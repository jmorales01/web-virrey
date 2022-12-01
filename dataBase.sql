create database libreria_virrey;
use libreria_virrey;

create table sexo(
idSexo char(1) primary key not null,
descripcionSexo char(10) not null
);

create table autor(
idAutor int primary key not null AUTO_INCREMENT,
nombreAutor varchar(225) not null
);

create table editorial(
idEditorial int primary key not null AUTO_INCREMENT,
nombreEditorial varchar(225) not null
);


create table descripcion(
idDescripcion int primary key not null AUTO_INCREMENT,
descripcionDescripcion varchar(500)
);

create table estado(
idEstado char(4) primary key not null,
descripcionEstado varchar(225) not null
);

create table usuario(
idUsuario int primary key not null AUTO_INCREMENT,
dni int not null,
nombre varchar(255) not null,
apellido varchar(255) not null,
direccion varchar(255) not null,
correo varchar(255) not null,
contrasenia char(20) not null,
telefono char(11),
celular int,
cargo varchar(50) not null,
fechaCreado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table libro(
idLibro int primary key not null AUTO_INCREMENT,
nombre varchar(225) not null,
idAutor int not null,
idEditorial int not null,
stock int not null,
precio float not null,
descuento float not null,
idDescripcion int not null,
imagen varchar(225),
FOREIGN KEY (idAutor) REFERENCES autor(idAutor),
FOREIGN KEY (idEditorial) REFERENCES editorial(idEditorial),
FOREIGN KEY (idDescripcion) REFERENCES descripcion(idDescripcion)
);

create table orden(
idOrden int primary key not null AUTO_INCREMENT,
idUsuario int not null,
items int not null,
fechaCreacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
fechaEntrega date not null,
idEstado char(4) not null,
foreign key (idUsuario) references usuario(idUsuario),
foreign key (idEstado) references estado(idEstado)
);

create table detalleOrde(
idOrden int not null,
idLibro int not null,
item int not null,
cantidad int not null,
igv float not null,
subTotal float not null,
primary key(idOrden,idLibro)
);
ALTER TABLE detalleOrde ADD foreign key (idOrden) references orden(idOrden);
ALTER TABLE detalleOrde ADD foreign key (idLibro) references libro(idLibro);





# INSERTAR DATOS A LAS TABLAS

insert into sexo
value
("M","Masculino"),
("F","Femenino")
;


INSERT INTO editorial( nombre) 
VALUES 
('Editorial ficticio')
;


INSERT INTO autor(nombre) 
VALUES 
('George RR. Martine')
;


INSERT INTO descripcion(descripcion) 
VALUES 
('Libro que relata una historia sobre 7 reinos en guerra por el poder')
;


INSERT INTO libro(idLibro, nombre, idAutor, idEditorial, stock, precio, descuento, idDescripcion, imagen) 
VALUES 
(1000,'Game of thrones',1,1,200,34.67,5.4,1,'imagen.jpg')
;