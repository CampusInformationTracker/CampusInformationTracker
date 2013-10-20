create table cit_courses (
course_id int unsigned not null primary key auto_increment,
member_id int unsigned not null,
lecture_id int unsigned not null,
year smallint unsigned not null,
semster tinyint unsigned not null
);