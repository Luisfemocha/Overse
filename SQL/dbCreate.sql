CREATE DATABASE OVERSE;

USE OVERSE;

CREATE TABLE empleado(
    idE int PRIMARY KEY,
    nomE varchar(100) not null,
    telE varchar(10) not null,
    esp varchar(200) /*especialidades del empleado*/
);

CREATE TABLE empresa(/*desarrollador de juego*/
    idEmp int PRIMARY KEY, /*NIT OR ISIN*/
    nomEmp varchar(100) not null,
    telEmp varchar(25),
    corEmp varchar(250), /*correo*/
    dirEmp varchar(300) /*direccion de la empresa*/
);

CREATE TABLE juego(
    idJ int AUTO_INCREMENT primary key,
    nomJ varchar(100) not null,
    precio int not null,
    ESRB varchar(5) not null, /*ec, e, e10, t, m, ao, rp*/
    genero varchar (50),
    plataforma varchar(50) not null,
    empJ int, /*empresa*/
    oferta boolean,
    CONSTRAINT FK1 FOREIGN KEY (empJ) REFERENCES empresa(idEmp)
);

CREATE TABLE cliente(
    idC int PRIMARY KEY,
    nomC varchar(100) not null,
    telC varchar(10),
    corC varchar(250),
    prefJC int, /*juego preferido*/
    prefPC varchar(50), /*plataforma preferida*/
    prefGC varchar(50), /*genero preferido*/
    prefEC int, /*empleado preferido*/
    CONSTRAINT FK2 FOREIGN KEY (prefJC) REFERENCES juego(idJ),
    CONSTRAINT FK3 FOREIGN KEY (prefEC) REFERENCES empleado(idE)
);

CREATE TABLE venta(
    idV int AUTO_INCREMENT PRIMARY KEY,
    emp1 int not null,
    clie1 int,
    descuento int,
    valor int not null,
    fecha datetime not null,
    CONSTRAINT FK4 FOREIGN KEY (emp1) REFERENCES empleado(idE),
    CONSTRAINT FK5 FOREIGN KEY (clie1) REFERENCES cliente(idC)
);

CREATE TABLE stock(
    idS int PRIMARY KEY AUTO_INCREMENT,
    idJ1 int not null,
    encargado int,
    vent int, /*si fue vendido o no*/
    CONSTRAINT FK6 FOREIGN KEY (encargado) REFERENCES empleado(idE),
    CONSTRAINT FK7 FOREIGN KEY (vent) REFERENCES venta(idV)
);