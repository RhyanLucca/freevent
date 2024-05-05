import tkinter as tk
from tkinter import ttk
from tkinter import filedialog


app = tk.Tk()
app.geometry('500x300')
app.title('Gerenciador de caminhos')

origemLabel = tk.Label(app, text='Origem:').pack()
origemEntry = tk.Entry(app).pack()

class Getpaths():

    def origem():
        origemDoc = filedialog.askdirectory()
        print(origemDoc)
        # origemEntry.delete(0,END)
        origemEntry.insert(0,'new label')

    def destino():
        destino = filedialog.askdirectory()
        print(destino)

origemButton = ttk.Button(app, text='Selecione a origem do arquivo', command=Getpaths.origem).pack()

destinoLabel = tk.Label(app, text='Destino:').pack()
destinoEntry = tk.Entry(app).pack()

destinoButton = ttk.Button(app, text='Selecione o destino do arquivo', command=Getpaths.origem).pack()

app.mainloop()



# teste = input('Digite seu nome: ')
# print(teste)
# import os
# teste = os.listdir('C:/Users/rhyan.gaudino/Desktop/RhyanLucca/Automações Rhyan/Automacao-envio-documentos')
# caminhoArquivoFdp = 'C:/Users/rhyan.gaudino/Desktop/RhyanLucca/Automações Rhyan/Automacao-envio-documentos/folha de pagamento' 
# for arquivo in teste:
#     print(arquivo)
#     if 'Folha de Pagamento' in arquivo:
#         print('---------------Arquivo FdP encontrado------------')
#         os.rename(arquivo, f"C:/Users/rhyan.gaudino/Desktop/RhyanLucca/Automações Rhyan/Automacao-envio-documentos/folha de pagamento/{arquivo}")
        # os.rename(f"C:/Users/rhyan.gaudino/Desktop/RhyanLucca/Automações Rhyan/Automacao-envio-documentos/folha de pagamento")
    # elif 'Contracheque' in arquivo:
    #     print('---------------Arquivo Contracheque encontrado------------')
# import customtkinter as ctk
# app = ctk.CTk()
# app.title('Movedor de documentos')
# app.geometry('900x500')
# # button = ctk.CTkButton(app, text="CTkButton").pack()
# entry = ctk.CTkEntry(app, placeholder_text='Caminho de origem',).pack()
# frame = ctk.CTkFrame(master=app, width=200, height=200)
# label = ctk.CTkLabel(frame, text="CTkLabel")
# app.mainloop()