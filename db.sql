CREATE DABASE catalogo;

CREATE TABLE menu (
  id INT AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  menu_parent VARCHAR(50),
  description VARCHAR(150),
  PRIMARY KEY(id) 
);

INSERT INTO menu (name, description) VALUES ('Catálogos', 'Lista de Catálogos');