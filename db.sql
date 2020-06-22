CREATE TABLE usuarios(
id int (11) auto_increment not null,
nombre varchar (100) not null,
apellidos varchar (100) not null,
email varchar (100) not null,
password varchar (255) not null,
telefono varchar (15),
rol varchar (30),
imagen varchar (255),
date datetime,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=INNODB;

INSERT INTO usuarios VALUES(null,
                            'Efrain Ademar',
                            'Villca Quispe',
                            'icon.ademar@gmail.com',
                            'password',
                            '67372862',
                            'admin',
                            'perfil.jpg',
                            curdate()
 );