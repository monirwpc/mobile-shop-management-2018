/* database for login logout part */

  /* creat database mobile */

/* database for user part */
	
	create table user(
	  username varchar(30) primary key,
	  password varchar(30) not null
	  );

	

	






/* database for mb_db part */

create table mb_db(
	customer_id int not null AUTO_INCREMENT,
    customer_name varchar(50),
    gender varchar(10),
    customer_address varchar(255),
    mobile_no varchar(15),
    mobile_name varchar(20),
    mobile_model varchar(20),
    price float(7,2),
    date varchar(20),
    PRIMARY KEY(customer_id)
);



insert into mb_db (customer_name,gender,customer_address,mobile_no,mobile_name,mobile_model,price,date)
VALUES
('Monirul Islam','male','Haripur','014587525546','Oppo','j3prime','7820','10/11/2017'),
('Monirul ','female','Haripur','014587525546','Nokia','j3prime','12050','11/11/2017'),
('Sujon Khan ','male','Dinajpur','01785496852','Samsung','hj125','16300','11/11/2017'),
('Nasirul Islam ','male','Rangpur','01789542136','Symphony','D32i','9000','11/11/2017'),
('Sajjat ','male','Dinajpur','01786598245','Nokia','j3prime','11350','11/11/2017'),
('Al-Amin Hasan ','male','Nilphamari','01745842136','Oppo','GHI45','7600','12/11/2017'),
('Orun Chandra ','male','Haripur','01754824156','Nokia','NK32i','12050','12/11/2017'),
('Khushi Akter ','female','Pirgaonj','014587525546','Symphony','j3prime','6455','12/11/2017'),
('Rupali Khatun ','female','Saidpur','01754213695','Samsung','k30','4500','12/11/2017'),
('Mustafizur Rahman ','male','Kurigram','014587525546','Nokia','j3prime','12050','12/11/2017');






/* database for contact part*/

create table contact_db(
	sl int not null AUTO_INCREMENT,
    name varchar(50),
    email varchar(50),
    phone varchar(20),
    massage varchar(255),
    PRIMARY KEY (sl)
);


insert into contact_db(name,email,phone,massage)VALUES
('Monirul Islam','monir3838@gmail.com','01745124845','Very Good Website'),
('Arif Khan','arif43@gmail.com','0173654875','This is Good'),
('Nasirul Khan','monir3838@gmail.com','01745124845','Very Good Website'),
('Kuddus Ali','monir3838@gmail.com','01745124845',' I like It'),
('Sajjat khan','saddat3838@gmail.com','01745132545','Improve yourself everyday'),
('Khalilur Rahman','mustafij3838@gmail.com','01745124845','It is an Website'),
('Orun Chandra','orun3838@gmail.com','017458554645','Very Good Website'),
('Al-Amin','amin838@gmail.com','01756825415','Very Good Thisng you need');











