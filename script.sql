drop database if exists cadastro;
create database cadastro;
use cadastro;
create table produtos(
codigo varchar(7)not null primary key,
nome varchar(50)not null,
categoria varchar(3)not null);