create table cit_lectures (
lecture_id int unsigned not null primary key auto_increment,
name_ja varchar(100) not null,
name_en varchar(100) not null,
professor int unsigned not null,
room_id int unsigned not null,
school_id int unsigned not null,
department_id int unsigned not null,
credit_type int unsigned not null,
credit int unsigned not null,
day_of_week int unsigned not null
);