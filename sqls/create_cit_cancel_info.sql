create table cit_cancel_info (
cancel_id int unsigned not null primary key auto_increment
lecture_id int unsigned not null,
cancel_date timestamp not null,
created timestamp not null,
modified timestamp not null
);