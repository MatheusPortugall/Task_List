# Task_List
A simple task manager, to study the MVC structure.


Crie um banco de dados e coloque seu nome e suas configurações em config/config.php.
SERVER: nome do servidor.
DBNAME: nome do banco.
USER: Seu Usuario.
PASSWORD: sua Senha

Rodar esse código SQL para gerar a tabela: 
	CREATE TABLE tasks (id int AUTO_INCREMENT PRIMARY KEY, name varchar(60) NOT NULL, description varchar(100) NOT NULL, deadline datetime, priority varchar(50) NOT NULL, completed varchar(50) NOT NULL);



