

CREATE TABLE  IF NOT EXISTS usuario(
    id SERIAL  PRIMARY KEY ,
    Nombre varchar(100) not null,
    Email varchar(100) not null unique ,
    Contrasena varchar(100)
);


INSERT INTO usuario(Nombre,Email,Contrasena) VALUES('prueba','email1@gmail.com','admin123');
INSERT INTO usuario(Nombre,Email,Contrasena) VALUES('prueba1','email2@gmail.com','admin12v3');
INSERT INTO usuario(Nombre,Email,Contrasena) VALUES('prueba2','email3@gmail.com','admin12fe3');