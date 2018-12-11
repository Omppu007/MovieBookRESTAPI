CREATE DATABASE api_db;

CREATE TABLE api_user 
(user_id bigint(20) unsigned not null auto_increment, 
name varchar(256) not null, 
email varchar(256) not null, 
password varchar(2048) not null, 
primary key (user_id));

INSERT INTO api_user 
(name, email, password) 
VALUES 
('test', 'test@test.com', '$2y$10$AOslOYQ.PvPhARS6ojbl2OzQzZ3jJBStmV4bEwyR8nB9oRl2cI1tq');