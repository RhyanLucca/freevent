import os
from tkinter import *
import tkinter as tk
from tkinter import filedialog
from tkinter import ttk
from tkinter import messagebox as mb
from PIL import ImageTk, Image
import mysql.connector
import shutil
from shutil import copyfile
from pathlib import Path

class DbFunctions():

    def connectDb(self):
        self.mydb = mysql.connector.connect(
            host="localhost",
            user="root",
            password="",
            database="docPathDb"
        )
        self.cursor = self.mydb.cursor()

        # CREATE TABLE docPathTable(
        # docId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        # docOriginPath VARCHAR(200) NOT NULL, 
        # docFilterMethod INT NOT NULL,
        # docNameSearch VARCHAR(150) NOT NULL,
        # docDestinyPath VARCHAR(200) NOT NULL,
        # docNameUpdate VARCHAR(150) NOT NULL,
        # docAction INT NOT NULL,
        # docPathStatus int NOT NULL
        # );

    def newPath(self, docOriginPath, docFilterMethod, docNameSearch, docDestinyPath, docNameUpdate, docAction, docPathStatus):
        
        dbfunctions.connectDb()
        
        if docFilterMethod == 'Contém':
            docFilterMethod = 0
        elif docFilterMethod == 'Começa com':
            docFilterMethod = 1
        elif docFilterMethod == 'Termina com':
            docFilterMethod = 2

        if docAction == 'Copiar':
            docAction = 0
        elif docAction == 'Mover':
            docAction = 1

        query = f"INSERT INTO docPathTable (docOriginPath, docFilterMethod, docNameSearch, docDestinyPath, docNameUpdate, docAction, docPathStatus) VALUES ('{docOriginPath}', '{docFilterMethod}', '{docNameSearch}', '{docDestinyPath}', '{docNameUpdate}', '{docAction}', '{docPathStatus}');"

        dbfunctions.cursor.execute(query)

        self.mydb.commit()

    def returnPaths(self):

        for i in tree.get_children():
            tree.delete(i)

        dbfunctions.connectDb()

        query = f"SELECT * FROM docPathTable WHERE docPathStatus = 0 OR docPathStatus = 1;"

        query = dbfunctions.cursor.execute(query)

        query = dbfunctions.cursor.fetchall()

        for x in query:
            x =list(x)
            if x[2] == 0:
                x[2] = 'Contém'
            elif x[2] == 1:
                x[2] = 'Começa com'
            elif x[2] == 2:
                x[2] = 'Termina com'

            if x[6] == 0:
                x[6] = 'Copiar'
            elif x[6] == 1:
                x[6] = 'Mover'

            if x[7] == 0:
                x[7] = 'Ativo'
            elif x[7] == 1:
                x[7] = 'Inativo'
            
            tree.insert('', tk.END, values=x)

    def updatePath(self):

        curItem = tree.focus()
        if curItem == '':
            raise IndexError(mb.showerror("Erro", "Selecione um modelo para ser atualizado"))
        else:

            dbfunctions.connectDb()

            curItem = tree.focus()
            idCurItem = tree.item(curItem)['values'][0]
            statusCurItem = tree.item(curItem)['values'][7]
            if statusCurItem == 'Ativo':
                query = f"UPDATE docPathtable SET docPathStatus = 1 WHERE docId = {idCurItem};"
            else:
                query = f"UPDATE docPathtable SET docPathStatus = 0 WHERE docId = {idCurItem};"

            dbfunctions.cursor.execute(query)
            
            self.mydb.commit()
        
            dbfunctions.returnPaths()

            mb.showinfo("Alteração de status bem sucedida", "Status alterado com sucesso!")

    def deletePath(self):
        
        curItem = tree.focus()

        if curItem == '':
            raise IndexError(mb.showerror("Erro", "Selecione um modelo para ser excluido"))
        else:
            resp=mb.askquestion("Exclusão de modelo", "Exluir o modelo selecionado?")
            
            if resp == 'no':
                pass

            else:
                dbfunctions.connectDb()

                curItem = tree.focus()
                idCurItem = tree.item(curItem)['values'][0]
                query = f'UPDATE docPathTable SET docPathStatus= 2 WHERE docId = {idCurItem};'
                mb.showinfo("Exclusão bem sucedida", "O modelo selecionado foi excluido com sucesso!")

                dbfunctions.cursor.execute(query)
                
                self.mydb.commit()

                dbfunctions.returnPaths()

class DocPath():

    def searchOrigem(self):
        self.origemDoc = filedialog.askdirectory()
        print(self.origemDoc)
        origemLabelSet.config(text=self.origemDoc)
        self.origem = self.origemDoc
    
    def searchdestino(self):
        self.destinoDoc = filedialog.askdirectory()
        destinoLabelSet.config(text=self.destinoDoc)

    def addNewPattern(self):
        dbfunctions.newPath(self.origemDoc,MetodosStrVar.get(),nomeEntry.get(),self.destinoDoc,newPatternEntry.get(),acaoStrVar.get(),0)
        origemLabelSet.config(text='')
        destinoLabelSet.config(text='')
        nomeEntry.delete(0, END)
        newPatternEntry.delete(0, END)
        MetodosStrVar.set('')
        acaoStrVar.set('')

        dbfunctions.returnPaths()

    def executeSelectedPattern(self):
        
        dbfunctions.connectDb()

        try:
            curItem = tree.focus()
            idCurItem = tree.item(curItem)['values'][0]
            statusCurItem = tree.item(curItem)['values'][7]
            if statusCurItem == "Ativo":
                query = f'SELECT * FROM docPathTable WHERE docId = {idCurItem};'

                query = dbfunctions.cursor.execute(query)
                query = dbfunctions.cursor.fetchone()

                pathList = os.listdir(query[1])
                cont = 1
                for arquivo in pathList:
                    prefixo, sufixo = os.path.splitext(arquivo)
                    if query[6] == 0:
                        if str(query[3]) in str(arquivo):
                            copyfile(f'{query[1]}/{arquivo}', f'{query[4]}/{query[5]}({cont}){sufixo}')
                            cont += 1
                    elif query[6] == 1:
                        if str(query[3]) in str(arquivo):
                            shutil.move(f'{query[1]}/{arquivo}', f'{query[4]}/{query[5]}({cont}){sufixo}')
                            cont += 1

                mb.showinfo("Execução bem sucedida", "O modelo selecionado foi executado com sucesso!")
            else:
                mb.showerror("Erro", "O modelo selecionado não pode ser executado")

        except IndexError as e:
            mb.showerror("Erro", "Selecione um modelo para ser executado")

    def executePatterns(self):

        query = f"SELECT * FROM docPathTable WHERE docPathStatus = 0;"

        query = dbfunctions.cursor.execute(query)

        query = dbfunctions.cursor.fetchall()
    
        for x in query:
            pathList = os.listdir(x[1])
            # print(x)
            destinyPathList = os.listdir(x[4])
            # contagem = 1
            contagem = 1 + len(destinyPathList)
            print(contagem)
            cont = contagem
            for arquivo in pathList:
                prefixo, sufixo = os.path.splitext(arquivo)
                if x[6] == 0:
                    if str(x[3]) in str(arquivo):
                        copyfile(f'{x[1]}/{arquivo}', f'{x[4]}/{x[5]}({cont}){sufixo}')
                        cont += 1
                        print(cont)
                elif x[6] == 1:
                    if str(x[3]) in str(arquivo):
                        shutil.move(f'{x[1]}/{arquivo}', f'{x[4]}/{x[5]}({cont}){sufixo}')
                        cont += 1
                        print(cont)

        mb.showinfo("Execução bem sucedida", "Os modelos foram executados com sucesso!")

docPath = DocPath()
dbfunctions = DbFunctions()

app = tk.Tk()
app.geometry('1100x620')
app.title('Gerenciador de documentos')
app.minsize(width=795, height=500)
app.configure(background='#063970')
app.iconbitmap('Automacao-envio-documentos/source/MVC/view/icone.ico')

image= Image.open("Automacao-envio-documentos/source/MVC/view/logoFranco.png")
image = image.resize((100, 100))
image.save("Automacao-envio-documentos/source/MVC/view/logoFranco.png")
img = ImageTk.PhotoImage(image)

origemLabel = tk.Label(app, bg='#063970', fg='white', text='Origem do arquivo:').place(relx=0.01,rely=0.01)
origemLabelSet = Label(app, bg='#063970', fg='black', background='white', anchor=W)
origemLabelSet.place(relx=0.01, rely=0.05, relwidth=0.74)

origemPath = tk.Button(app, text='Selecione a origem do arquivo:', command=docPath.searchOrigem, cursor='hand2')
origemPath.place(relx=0.78, rely=0.045, relwidth=0.21)

Label(app, bg='#063970', fg='white', text='Método de filtro:').place(relx=0.01, rely=0.11)

myDict={0:'Contém', 1:'Começa com', 3:'Termina com'}
options=list(myDict.values())

MetodosStrVar = tk.StringVar()
cb_metodos = ttk.Combobox(app, value=options, textvariable=MetodosStrVar)
cb_metodos.place(relx=0.01, rely=0.15, relwidth=0.21)

Label(app, bg='#063970', fg='white', text='Nome do arquivo').place(relx=0.25,rely=0.11)
nomeEntry = Entry(app, text='Informe o nome do arquivo:')
nomeEntry.place(relx=0.25, rely=0.15, relwidth=0.74)

destinoLabel = tk.Label(app, bg='#063970', fg='white', text='Destino do arquivo:').place(relx=0.01,rely=0.22)
destinoLabelSet = Label(app, bg='#063970', fg='black', background='white', anchor=W)
destinoLabelSet.place(relx=0.01, rely=0.26, relwidth=0.74)

destinoPath = tk.Button(app, text='Selecione o destino do arquivo:', command=docPath.searchdestino, cursor='hand2')
destinoPath.place(relx=0.78, rely=0.255, relwidth=0.21)

Label(app, bg='#063970', fg='white', text='Novo padrão do nome').place(relx=0.01,rely=0.33)

newPatternEntry = Entry(app)
newPatternEntry.place(relx=0.01,rely=0.37, relwidth=0.74)

Label(app, bg='#063970', fg='white', text='Ação:').place(relx=0.78,rely=0.33)
listAcao = ['Copiar', 'Mover']
acaoStrVar = tk.StringVar()
cb_acao = ttk.Combobox(app,values=listAcao, textvariable=acaoStrVar)
cb_acao.place(relx=0.78,rely=0.37, relwidth=0.21)

confButton = Button(app, text='Confirmar', command=docPath.addNewPattern, cursor='hand2')
confButton.place(relx=0.01,rely=0.47, relwidth=0.2)

logo = Label(app, image=img, bg='#063970').place(relx=0.45, rely=0.42)

columns = ('ID','Origem', 'Filtro', 'Nome', 'Destino', 'Novo Nome', 'Ação', 'Status')
tree = ttk.Treeview(app, columns=columns, show='headings')

tree.heading('ID', text='ID')
tree.column("ID", width=1, anchor=CENTER)

tree.heading('Origem', text='Origem')
tree.column("Origem", anchor=CENTER)

tree.heading('Filtro', text='Filtro')
tree.column("Filtro", width=30, anchor=CENTER)

tree.heading('Nome', text='Nome')
tree.column("Nome", width=50, anchor=CENTER)

tree.heading('Destino', text='Destino')
tree.column("ID", anchor=CENTER)

tree.heading('Novo Nome', text='Novo Nome')
tree.column("Novo Nome", width=50, anchor=CENTER)

tree.heading('Ação', text='Ação')
tree.column("Ação", width=60, anchor=CENTER)

tree.heading('Status', text='Status')
tree.column("Status", width=50, anchor=CENTER)

tree.place(relx=0.01,rely=0.54, relheight=0.36, relwidth=0.98)

treeExecute1Button = Button(app, text='Executar modelo', cursor='hand2', command=docPath.executeSelectedPattern)
treeExecute1Button.place(relx=0.15,rely=0.93, relwidth=0.1)

treeExecuteAllButton = Button(app, text='Executar todos', cursor='hand2', command=docPath.executePatterns)
treeExecuteAllButton.place(relx=0.35,rely=0.93, relwidth=0.1)

treeUpdateButton = Button(app, text='Alterar status', cursor='hand2', command=dbfunctions.updatePath)
treeUpdateButton.place(relx=0.55,rely=0.93, relwidth=0.1)

treeExcludeButton = Button(app, text='Excluir modelo', cursor='hand2', command=dbfunctions.deletePath)
treeExcludeButton.place(relx=0.75, rely=0.93, relwidth=0.1)

dbfunctions.returnPaths()

app.mainloop()