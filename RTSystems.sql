#CREATE DATABASE rtsystems

USE rtsystems;

SHOW TABLES;

DESCRIBE tabusers;
DESCRIBE tabevents;
DESCRIBE tabinscricoes;

SELECT * FROM tabusers;
SELECT * FROM tabevents;
SELECT * FROM tabinscricoes;
SELECT * FROM estados;
SELECT * FROM cidades;

INSERT INTO tabinscricoes (tabevents_id, tabusers_cadID, user_codigo, inscricao_data, inscricao_validate) VALUES ();

SELECT *
FROM tabinscricoes inc
LEFT JOIN tabusers as users
ON users.cadID = inc.tabusers_cadID
WHERE tabevents_id = 3;

SELECT * FROM tabevents WHERE id != 1 AND eventUF = '20' ORDER BY RAND() LIMIT 10;

SELECT * FROM tabevents WHERE eventUF = 26 AND eventPayment >= 200 ORDER BY id;
SELECT * FROM tabevents WHERE eventUF = '26' AND eventPayment >= '350.55';


SELECT 
ev.id, 
ev.eventName, 
DATE_FORMAT(ev.eventStart, '%d/%m - %H:%m') as eventStart, 
DATE_FORMAT(ev.eventEnd, '%d/%m - %H:%m') as eventEnd, 
ev.eventDescription, 
ev.eventLocation, 
ev.eventGeoLocation, 
ev.eventPayment, 
ev.eventVacancies, 
ev.eventActive 
FROM tabevents as ev
#LEFT JOIN tabinscricoes as inc
#ON ev.id = inc.tabevents_id
WHERE ev.eventCodTime BETWEEN 0 AND 3
AND 
ev.eventPayment >= 150 
AND ev.eventActive=1 ORDER BY id DESC;

select count(tabusers_cadID) from tabinscricoes WHERE tabevents_id = 20;

SELECT 
ev.id, 
ev.eventName,
DATE_FORMAT(ev.eventStart, '%d/%m - %H:%m') as eventStart, 
DATE_FORMAT(ev.eventEnd, '%d/%m - %H:%m') as eventEnd, 
ev.eventDescription, 
ev.eventLocation, 
ev.eventGeoLocation, 
ev.eventPayment, 
ev.eventVacancies,
ev.eventActive,
(SELECT COUNT(tabusers_cadID) FROM tabinscricoes where tabusers_cadID=23 and inc.tabevents_id = 22)
FROM tabevents as ev
INNER JOIN tabinscricoes as inc
ON ev.id = inc.tabevents_id
WHERE ev.eventCodTime BETWEEN 0 AND 3 
AND ev.eventPayment >= 100 
AND ev.eventActive=1 
ORDER BY id DESC;

INSERT INTO tabusers (cadName, cadEmail, cadPswd, cadCPF, cadTelefone) 
VALUES ('adm', 'adm@adm.com', 'adm123', '11111111111', '11911111111');

SELECT id, eventName, eventStart, eventEnd, eventDescription, eventLocation, eventGeoLocation, eventPayment, eventVacancies FROM tabevents WHERE eventPayment >= 200;

SELECT 
id, 
eventName, 
date_format(eventStart, '%d/%m/%y - %H:%m'),  
date_format(eventEnd, '%d/%m/%y - %H:%m'), 
eventDescription, 
eventLocation, 
eventGeoLocation, 
eventPayment, 
eventVacancies, 
eventActive 
FROM tabevents;


CREATE TABLE tabevents (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
eventName VARCHAR(80) NOT NULL, 
eventStart DATETIME NOT NULL, 
eventEnd DATETIME NOT NULL,
eventDuration FLOAT NOT NULL,
eventDescription VARCHAR(150) NOT NULL, 
eventLocation VARCHAR(150) NOT NULL, 
eventGeoLocation VARCHAR(20) NOT NULL, 
eventPayment FLOAT NOT NULL,
eventVacancies INT NOT NULL);

INSERT INTO tabevents 
(eventName,eventStart,eventEnd,eventDescription,eventLocation,eventGeoLocation,eventPayment,eventVacancies) VALUES(
"Balada Ruby", 
now(),
now(), 
"Balada Ruby, muita diversão e Ruby", 
"Rua On Rails num.71",
"CEP:06325110", 
150,
15);

INSERT INTO tabevents 
(eventName,eventStart,eventEnd,eventDescription,eventLocation,eventGeoLocation,eventPayment,eventVacancies) VALUES(
"Balada C#", 
now(),
now(), 
"Balada C#, muita diversão e C#", 
"Rua DOTNET num.100",
"CEP:06325110", 
250,
8);

INSERT INTO tabevents 
(eventName,eventStart,eventEnd,eventDescription,eventLocation,eventGeoLocation,eventPayment,eventVacancies) VALUES(
"Balada Python", 
now(),
now(), 
"Balada Python, muita diversão e Python", 
"Rua Pycharm num.253",
"CEP:06325110", 
275,
15);

INSERT INTO tabevents 
(eventName,eventStart,eventEnd,eventDescription,eventLocation,eventGeoLocation,eventPayment,eventVacancies) VALUES(
"Balada Go", 
now(),
now(), 
"Balada Go, muita diversão e Go", 
"Rua Pycharm num.253",
"CEP:06325110", 
100,
10);

INSERT INTO tabevents 
(eventName,eventStart,eventEnd,eventDescription,eventLocation,eventGeoLocation,eventPayment,eventVacancies) VALUES(
"Balada Node", 
now(),
now(), 
"Balada Node, muita diversão e Node", 
"Rua Node num.253",
"CEP:06325110", 
300,
5);

INSERT INTO tabevents 
(eventName,eventStart,eventEnd,eventDescription,eventLocation,eventGeoLocation,eventPayment,eventVacancies) VALUES(
"Balada Rust", 
now(),
now(), 
"Balada Rust, muita diversão e Rust", 
"Rua Rust num.253",
"CEP:06325110", 
75,
20);

#TRUNCATE TABLE tabusers;
#TRUNCATE TABLE tabevents;


INSERT INTO tabevents(
eventName,
eventDescription,
eventStart,
eventEnd,
eventCodTime,
eventVacancies,
eventPayment,
eventUF,
eventCodCidade,
eventGeoLocation,
eventRua,
eventRuaNumero,
eventLocation,
eventExtras,
eventActive,
eventContractor,
eventContractorEmail) VALUES();
