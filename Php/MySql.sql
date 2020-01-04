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
 
 insert into employee value (1,"Nguyễn Trịnh(Giám đốc)","../Img/cau6.jpg","Xuân Phú-Hòa Sơn-Hòa Vang-Đà Nẵng","0983942707","Đàn Organ"),
                        (2,"Trần Văn Bi","../Img/4.jpeg","Hòa Ninh-Hòa Vang-Đà Nẵng","0876533462","Chỉnh âm"),
                        (3,"Lê Đình Vũ","../Img/2.jpg","Hòa Ninh-Hòa Vang-Đà Nẵng","0927881056","Chỉnh âm"),
                        (4,"Phan Phước Bảo","../Img/1.jpg","Xuân Phú-Hòa Sơn-Hòa Vang-Đà Nẵng","0775196254","MC");
                        
create table service(
 id int auto_increment primary key,
 names varchar(255),
 images varchar(255),
 emp varchar(255),
 price varchar(255)
 );
 
  insert into service value (1,"Nhạc công","../Img/nhaccong.jpg","Nguyễn Trịnh","500.000"),
                        (2,"Nhạc","../Img/nhac.jpg","Trần Văn Bi","500.000"),
                        (3,"Nhạc công","../Img/nhaccong.jpg","Nguyễn Văn Mạnh","500.000"),
                        (4,"MC","../Img/mc.jpg","Phan Phước Bảo","500.000"),
                        (5,"Pháo","../Img/phao.jpg","Nguyễn Trịnh","400.000"),
                        (6,"Kim tuyến","../Img/ktuyen.jpg","Nguyễn Trịnh","300.000"),
                        (7,"Màn hình led","../Img/denled.jpg","Nguyễn Anh Bi","2.000.000"),
                        (8,"Máy chiếu","../Img/maychieu.jpg","Nguyễn Trịnh","900.000"),
                        (9,"Máy nổ","../Img/mno.png","Nguyễn Trịnh","600.000"),
                        (10,"Phương tiện","../Img/nhac3.jpg","Nguyễn Trịnh","500.000"),
                        (11,"Trống","../Img/trong.jpg","Nguyễn Văn Lạc","1.000.000"),
                        (12,"Guitar","../Img/guitar.jpg","Nguyễn Văn Lạc","500.000"),
						(13,"Toàn bộ","../Img/toanbo.png","All","500.000");