create database db_senac;
use db_senac;

create table produtos (
id int auto_increment primary key not null,
nome char(200),
quantidade int,
preco decimal(10,2),
detalhe char(30),
foto char(100));

insert into produtos values 
(null , 'ssd kingstone 240gb',10,'189','detalhe1.php','img/ssd3.webp'),
 (null , 'memoria ram 8gb ',6,'260','detalhe2.php','img/memo.jpg'),
 (null , 'teclado dell', 5 ,'90','detalhe3.php','img/teclado.png'),
 (null , 'Mousepad Gamer Havit Control, Extra Grande ',2,'49','detalhe4.php','img/mouseped.png'),
(null , 'Headset Gamer HyperX Cloud Core',1,'399','detalhe5.php','img/fone.png'),
(null , 'Processador AMD Ryzen 5 5600, 3.5GHz ',6,'1.139','detalhe6.php','img/amd.png'),
(null , 'Processador Intel Core i5-10400F, 2.9GHz )',9,'679','detalhe7.php','img/intel.png'),
 (null , 'Monitor Gamer Samsung Odyssey ',10,'3.699','detalhe8.php','img/monitor.png'),
 (null , 'Placa de Vídeo GTX 1660 Ti O6G EVO OC Asus TUF Gaming NVIDIA Geforce', 15 ,'1.679','detalhe9.php','img/placadevideo.png');
 
 drop table produtos;
 
 select * from produtos;
 
  create table pedidos(id_pedidos int not null primary key auto_increment,
 id_produto int not null,
 quantidade int,
 preco decimal(10,2),
 total decimal(10,2),
 data_pedido timestamp);
 select * from pedidos;
 drop table pedidos;