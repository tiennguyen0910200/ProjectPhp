drop database if exists DanNhacTrinh;
create database DanNhacTrinh;
use DanNhacTrinh;

create table employee(
 id int auto_increment primary key,
 name varchar(255),
 image varchar(255),
 address varchar(255),
 phone varchar(11),
 assignment varchar(255)
 );
 
 insert into employee value (1,"Trần Văn Bi","../Img/4.jpeg","Hòa Ninh-Hòa Vang-Đà Nẵng","0876533462","Chỉnh âm"),
                        (2,"Lê Đình Vũ","../Img/2.jpg","Hòa Ninh-Hòa Vang-Đà Nẵng","0927881056","Chỉnh âm"),
                        (3,"Phan Phước Bảo","../Img/1.jpg","Xuân Phú-Hòa Sơn-Hòa Vang-Đà Nẵng","0775196254","MC"),
                        (4,"Phạm Văn Mạnh","../Img/3.jpg","Hòa Liên-Hòa Vang-Đà Nẵng","0976110378","Đàn Organ");
                        
