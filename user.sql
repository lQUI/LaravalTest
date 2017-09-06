create database if not exists testdb;

use testdb;

drop table if exists user;

create table  user (id varchar(32),name varchar(32),age int,created_at datetime, updated_at datetime,email varchar(32));

drop table if exists token;

create table  token (intAuthToken varchar(32),id varchar(32) ,device varchar(32),ip varchar(16),created_at datetime, updated_at datetime,email varchar(32)) ;

insert into user(id,name,age) values('sql100029','peter',25),('sql100030','tom',50),('sql100031','karl',34),('sql100032','mary',18);

insert into token (intAuthToken, id, device, ip) values('xxxyyyzz','sp100029','iphone6','192.168.1.88'), ('aaabbbccc','spl100029','Samsung Glaxy s3','177.15.33.8'),('dddeeefff','sp10003','xiaomi 4x','110.20.3.7'),('eeefffggg','sp100031','xiaomi 4x','111.20.3.7'),('yuqbajnnr','sp100032','iPhone se','121.2.88.137');
