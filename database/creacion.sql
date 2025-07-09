

create database seneca
character set latin1
collate latin1_spanish_ci;

use seneca;

drop user if exists'seneca@%';

-- crea un usuario llamado seneca que puede conectar desde cualquier direccion IP
create user 'seneca'@'%' identified by '1234';

-- Damos permiso al usuario para realizar cualquier sentencia en la base de datos seneca
grant all PRIVILEGES on seneca.* to 'seneca'@'%';

CREATE TABLE alumnos (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(30) not null,
    apellido1 varchar(30) not null ,
    apellido2 VARCHAR(30),
    fecha_nac DATE,
    email VARCHAR(100)
);

create table asignaturas (
    id int unsigned AUTO_INCREMENT primary key,
    nombre varchar(50) not null,
    tipo enum('TRONCAL', 'OBLIGATORIA', 'OPTATIVA'),
    creditos FLOAT DEFAULT 6 check(creditos>0),
    curso TINYINT unsigned 
);


drop table if exists vehiculos;
create table vehiculos (
    matricula char(8) primary key,
    marca varchar(20) NOT NULL,
    modelo varchar(30) NOT NULL,
    tipo enum('turismo','autobús', 'camion', 'furgón') not null,
    color varchar(20) not null,
    fecha_matriculacion date default CURDATE(),
    cilindrada smallint unsigned,
    itv_pasada bool default TRUE NOT NULL
);

insert into vehiculos
values('9991ABC', 'mercedes', 'citaro', 'autobús', 'blanco', '2016-06-03', 7.5, true),
      ('1853DCL', 'porsche', 'panamera','turismo', 'rojo', '2019-01-03', 2.5, true),
      ('8627ADD', 'ford', 'torneo','furgon', 'blanco', '2009-12-27', 2.5, false),
      ('4250MLD', 'reanult', 'clio','turismo', 'verde', '2024-04-03', 2.5, true);