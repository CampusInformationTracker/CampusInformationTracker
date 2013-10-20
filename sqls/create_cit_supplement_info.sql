create table cit_supplement_info (
supplement_id int unsigned not null primary key auto_increment,
lecture_id int unsigned not null,
supplement_date timestamp not null,
period tinyint unsigned not null,
room_id int unsigned not null,
created timestamp not null,
modified timestamp not null
);