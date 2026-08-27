create database ifood_crud;    
use ifood_crud;

create table cliente (
    id_cliente int primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null unique,
    telefone varchar(15) not null,
    endereco varchar(255) not null
)

create table restaurante (
    id_restaurante int primary key auto_increment,
    nome varchar(100) not null,
    categoria varchar(100) not null,
    endereco varchar(255) not null,
    telefone varchar(15) not null
)

create table pedido (
    id_pedido int primary key auto_increment,
    id_cliente int not null,
    id_restaurante int not null,
    data_pedido datetime not null,
    status varchar(50) not null,
    valor decimal(10, 2) not null,
    
    foreign key (id_cliente) references cliente(id_cliente),
    foreign key (id_restaurante) references restaurante(id_restaurante)
)