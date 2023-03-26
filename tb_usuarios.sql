CREATE DATABASE dbphp7;

USE dbphp7;

CREATE TABLE tb_usuarios (
  idusuario int(11) NOT NULL AUTO_INCREMENT,
  deslogin varchar(64) NOT NULL,
  dessenha varchar(256) NOT NULL,
  dtcadastro timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (idusuario)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




USE `dbphp7`;
DROP procedure IF EXISTS `sp_usuarios_insert`;

DELIMITER $$
USE `dbphp7`$$
CREATE PROCEDURE `sp_usuarios_insert` (
pdeslogin varchar(64),
pdessenha varchar(256)
)
BEGIN
	INSERT tb_usuarios (deslogin, dessenha) values (pdeslogin, pdessenha);
    
    SELECT * FROM tb_usuarios WHERE idusuario = last_insert_id();
END$$

DELIMITER ;