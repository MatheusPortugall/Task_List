# Task_List
A simple task manager, to study the MVC structure.


Create a database and put your name and its settings in config / config.php.
SERVER: server name.
DBNAME: name of the bank.
USER: Your User.
PASSWORD: Your Password

Run this SQL code to generate the table:
	CREATE TABLE tasks (id int AUTO_INCREMENT PRIMARY KEY, name varchar(60) NOT NULL, description varchar(100) NOT NULL, deadline datetime, priority varchar(50) NOT NULL, completed varchar(50) NOT NULL);



