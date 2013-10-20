create table cit_change_info (
change_id int unsigned not null primary key auto_increment,
lecture_id int unsigned not null,
begin_date timestamp not null,
end_date timestamp not null,
room_id int unsigned,
created timestamp not null,
modified timestamp not null
);