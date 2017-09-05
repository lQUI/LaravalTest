create database if not exists testdb;

use testdb;

drop table if exists user;

create table  user (id varchar(32),name varchar(32),age int);

insert into user values('sql100029','peter',25),('sql100030','tom',50),('sql100031','karl',34),('sql100032','mary',18);
