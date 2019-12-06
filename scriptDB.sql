CREATE DATABASE dbmarket DEFAULT CHARACTER SET "utf8";

CREATE TABLE categorias (
	idCategoria INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	nombreCategoria VARCHAR(20) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE ciudades (
	idCiudad INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	nombreCiudad VARCHAR(20) NOT NULL
) ENGINE = InnoDB;

CREATE TABLE usuarios (
	idUsuario INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	nombreUsuario VARCHAR(35) NOT NULL,
	correoUsuario VARCHAR(60) NOT NULL,
	passwordUsuario VARCHAR(35) NOT NULL,
	telefonoUsuario VARCHAR(15) NOT NULL,
	avatarUsuario VARCHAR(80) NOT NULL,
	rolUsuario TINYINT(1) NOT NULL   
) ENGINE = InnoDB;

CREATE TABLE avisos (
	idAviso INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	tituloAviso VARCHAR(80) NOT NULL,
	precioAviso INT NOT NULL,
	descripcionAviso TEXT NOT NULL,
	imgAviso VARCHAR(80) NOT NULL,
	estadoAviso TINYINT(1) NOT NULL,
	idCiudad INT NOT NULL,
	idCategoria INT NOT NULL,
	idUsuario INT NOT NULL
) ENGINE = InnoDB;

ALTER TABLE avisos 
	ADD CONSTRAINT fk_avisos_categorias 
	FOREIGN KEY (idCategoria)
	REFERENCES categorias (idCategoria)
	ON DELETE CASCADE
	ON UPDATE CASCADE,
	ADD CONSTRAINT fk_avisos_ciudades
	FOREIGN KEY (idCiudad)
	REFERENCES ciudades (idCiudad)
	ON DELETE CASCADE
	ON UPDATE CASCADE,
	ADD CONSTRAINT fk_avisos_usuarios
	FOREIGN KEY (idUsuario)
	REFERENCES usuarios (idUsuario)
	ON DELETE CASCADE
	ON UPDATE CASCADE;



