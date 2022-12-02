create database libreriaVirrey;
use libreriaVirrey;

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
idEstado char(15) primary key not null,
secuenciaEstado int not null,
descripcionEstado varchar(225) not null
);

create table usuario(
idUsuario int primary key not null AUTO_INCREMENT,
dniUsuario char(8) not null,
nombreUsuario varchar(255) not null,
apellidoUsuario varchar(255) not null,
direccionUsuario varchar(255) not null,
correoUsuario varchar(255) not null,
contraseniaUsuario char(20) not null,
telefonoUsuario char(11),
celularUsuario int,
cargoUsuario varchar(50) not null,
fechaCreadoUsuario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
imagenUsuario varchar(225)
);

create table libro(
idLibro int primary key not null AUTO_INCREMENT,
nombreLibro varchar(225) not null,
idAutor int not null,
idEditorial int not null,
stockLibro int not null,
precioLibro float not null,
descuentoLibro float not null,
idDescripcion int not null,
imagenLibro varchar(225),
fechaLibro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY (idAutor) REFERENCES autor(idAutor),
FOREIGN KEY (idEditorial) REFERENCES editorial(idEditorial),
FOREIGN KEY (idDescripcion) REFERENCES descripcion(idDescripcion)
);

create table orden(
idOrden int primary key not null AUTO_INCREMENT,
idUsuario int not null,
itemsOrden int not null,
fechaCreacionOrden TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
fechaEntregaOrden date not null,
idEstado char(15) not null,
foreign key (idUsuario) references usuario(idUsuario),
foreign key (idEstado) references estado(idEstado)
);

create table detalleOrde(
idOrden int not null,
idLibro int not null,
itemDetalle int not null,
cantidadDetalle int not null,
igvDetalle float not null,
subTotalDetalle float not null,
primary key(idOrden,idLibro)
);
ALTER TABLE detalleOrde ADD foreign key (idOrden) references orden(idOrden);
ALTER TABLE detalleOrde ADD foreign key (idLibro) references libro(idLibro);

create table comentario(
    idComentario int primary key not null AUTO_INCREMENT,
    idLibro int not null,
    idUsuario int not null,
    descripcionComentario varchar(225) not null,
    puntajeComentario int(1) not null,
    fechaCreacionComentario TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    foreign key (idUsuario) references usuario(idUsuario),
    foreign key (idLibro) references libro(idLibro)
);

create table carrito(
    idCarrito int primary key not null AUTO_INCREMENT,
    idLibro int not null,
    idUsuario int not null,
    cantidadCarrito int not null,
    foreign key (idUsuario) references usuario(idUsuario),
    foreign key (idLibro) references libro(idLibro)
);


######################## CONSULTAS DE LAS TABLAS ########################


######### Table libro

select * from libro

# Consulta de los productos mas vendidos
select l.idLibro, l.nombreLibro, a.nombreAutor, e.nombreEditorial, l.precioLibro, l.stockLibro, l.descuentoLibro, l.imagenLibro, sum(d.cantidadDetalle)
        from libro l, autor a, editorial e, detalleorde d
    where l.idAutor = a.idAutor and l.idEditorial = e.idEditorial and l.idLibro = d.idLibro 
    group by l.idLibro, l.nombreLibro, a.nombreAutor, e.nombreEditorial, l.precioLibro, l.stockLibro, l.descuentoLibro, l.imagenLibro
    order by sum(d.cantidadDetalle) desc 
    limit 20

# Consulta de los productos con mayor descuento
select l.idLibro, l.nombreLibro, a.nombreAutor, e.nombreEditorial, l.precioLibro, l.stockLibro, l.descuentoLibro, l.imagenLibro
        from libro l, autor a, editorial e
    where l.idAutor = a.idAutor and l.idEditorial = e.idEditorial
    group by l.idLibro, l.nombreLibro, a.nombreAutor, e.nombreEditorial, l.precioLibro, l.stockLibro, l.descuentoLibro, l.imagenLibro
    order by l.descuentoLibro desc 
    limit 20

# Consulta de los productos mas valorados
select l.idLibro, l.nombreLibro, a.nombreAutor, e.nombreEditorial, l.precioLibro, l.stockLibro, l.descuentoLibro, l.imagenLibro, avg(c.puntajeComentario)
	    from libro l, autor a, editorial e, comentario c 
    where l.idAutor = a.idAutor and l.idEditorial = e.idEditorial and l.idLibro = c.idLibro 
    group by l.idLibro, l.nombreLibro, a.nombreAutor, e.nombreEditorial, l.precioLibro, l.stockLibro, l.descuentoLibro, l.imagenLibro
    order by avg(c.puntajeComentario) desc 
    limit 20

# Consulta de los productos mas nuevos en la tienda
select l.idLibro, l.nombreLibro, a.nombreAutor, e.nombreEditorial, l.precioLibro, l.stockLibro, l.descuentoLibro, l.imagenLibro
	    from libro l, autor a, editorial e
    where l.idAutor = a.idAutor and l.idEditorial = e.idEditorial
    group by l.idLibro, l.nombreLibro, a.nombreAutor, e.nombreEditorial, l.precioLibro, l.stockLibro, l.descuentoLibro, l.imagenLibro
    order by l.fechaLibro  desc 
    limit 20


######################## INSERTAR DATOS A LAS TABLAS ########################

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