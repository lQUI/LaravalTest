#!/bin/bash
#create table user and init table;
if [ $# -ne 2 ]; then
    echo '输入数据导入的数据库名:  insert_example_data [database] [username]' 
    exit 1
fi
database=$1
username=$2 
read -p '是否需要导入样本数据：（y/n）默认为y:' answer
read -t 30 -s -p "输入数据库$username用户的密码:"  password


if [ "$answer" = "N"  -o "$answer" = "n" ]
then
    mysql -u $username -p$password -D $database < ./create_schema.sql
else
    mysql -u $username -p$password -D $database < ./create_schema.sql 
    mysql -u $username -p$password -D $database <./insert_example_data.sql
   
fi



