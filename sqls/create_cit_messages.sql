create table cit_messages (
message_id int unsigned not null primary key auto_increment,
sender varchar(20) not null,
addressee int unsigned not null,
title varchar(50) not null,
body mediumtext not null,
unread int unsigned default 1,
created timestamp not null
);