# trainee-project
first trainee project for doity

# to let the project ready execute each step bellow

Install XAMPP

download the zip file of the project and unzip it into a project-folder

move the project-folder to the htdocs folder from XAMPP

run XAMPP Control Panel and start Apache and Mysql


# mysql database commands (use the raw to copy the mysql code)

CREATE DATABASE doity;

CREATE TABLE events (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  cpf_cnpj varchar(14) NOT NULL,
  date date NOT NULL,
  address varchar(255) NOT NULL,
  hood varchar(100) NOT NULL,
  zip_code int(8) NOT NULL,
  city varchar(100) NOT NULL,
  state varchar(100) NOT NULL,
  phone int(13),
  mobile int(13) NOT NULL,
  created datetime NOT NULL,
  modified datetime NOT NULL
);

ALTER TABLE events
  ADD PRIMARY KEY (id);
  
ALTER TABLE events
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


INSERT INTO `events` (`name`, `cpf_cnpj`, `date`, `address`, 
`hood`, `zip_code`, `city`, `state`, `phone`, `mobile`, `created`, `modified`) 
VALUES ('Evento X', '123.456.789-00', '1989-01-01', 'Rua da Web, 123', 
'Internet', '1234568', 'Teste', 'Teste', '5555555', '55555555',  
'2019-09-03 00:00:00', '2019-09-03 00:00:00');

# start to use

change the project-folder\config.php file using your DB configurations

access in your browser localhost/project-folder/
