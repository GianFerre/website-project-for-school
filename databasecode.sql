CREATE TABLE users4 (
	user_custaccno varchar(256) not null,
	user_last varchar(256) not null,
	user_first varchar(256) not null,
	user_middle varchar(256) not null,
	user_address1 varchar(256) not null,
	user_address2 varchar(256) not null,
	user_address3 varchar(256) not null,
	user_contact varchar(256) not null,
	user_email varchar(256) not null,
	user_gender varchar(256) not null,
	user_birthday varchar(256) not null
);

INSERT INTO users2 (user_custaccno, user_last, user_first, user_middle, user_address1, user_address2, user_address3, user_contact, user_email, user_gender, user_birthday) VALUES ('12341234' , 'parker', 'sean', 'nelson', '$sample', 'sample', 'sample', '23452354', 'randomness@gmail.com', 'male', '01/01/1980');