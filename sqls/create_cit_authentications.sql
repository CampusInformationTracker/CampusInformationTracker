create table cit_authentications (
member_id int unsigned not null primary key,
hashed_password varchar(200) not null,
google_token varchar(200),
twitter_token varchar(200),
twitter_secret_token varchar(200)
);