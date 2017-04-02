create database film;

create table admin(
id int unsigned auto_increment key,
dname varchar(20) not null unique,
password varchar(32) not null
);

create table film(
id int unsigned auto_increment key,
dname varchar(50) not null unique,
daoyan varchar(20),
actor varchar(50),
class int unsigned,
country int unsigned,
lang varchar(20),
dtime datetime,
star int,
info text,
play varchar(255),
time datetime default now()
);


create table class(
id int unsigned auto_increment key,
dname varchar(20) not null,
);

create table country(
id int unsigned auto_increment key,
dname varchar(20) not null unique
);
