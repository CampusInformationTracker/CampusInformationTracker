create table cit_information (
information_id int unsigned not null primary key auto_increment,
title varchar(50) not null,
body mediumtext not null,
created timestamp not null,
modified timestamp not null
);