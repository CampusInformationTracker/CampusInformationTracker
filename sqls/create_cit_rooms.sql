create table cit_rooms (
room_id int unsigned not null primary key auto_increment,
campus enum('T', 'S') not null,
name varchar(50) not null
);