create table cit_members (
member_id int unsigned not null primary key,
member_type enum('B', 'M', 'P', 'O') not null,
name varchar(100) not null,
name_ruby varchar(100) not null,
sex enum('M', 'F') not null,
school_id int unsigned not null,
department_id int unsigned not null,
email varchar(100) not null
);