import os
import mysql.connector
import shutil
from shutil import copyfile
from pathlib import Path
import sys
import time
import logging
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler, LoggingEventHandler
import logging

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

class DocPath():

    def executePatterns(self):

        dbfunctions.connectDb()

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


docPath = DocPath()
dbfunctions = DbFunctions()

def on_any_event(event):
    docPath.executePatterns()

if __name__ == "__main__":

    # logging.basicConfig(filename)
    
    path = 'C:/Users/rhyan.gaudino/Desktop/TesteBot'

    event_handler = FileSystemEventHandler()

    event_handler.on_any_event = on_any_event
 
    observer = Observer()

    observer.schedule(event_handler, path, recursive=True)
    observer.start()
    
    try:
        print('Watching')
        while True:
            time.sleep(1)
    finally:
        observer.stop()
        print('Done')
        observer.join()
