DROP TABLE IF EXISTS product_category;
DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS category;

CREATE TABLE product (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  price DECIMAL(5,2),
  sku VARCHAR(50) NOT NULL,
  quantity INT,
  description VARCHAR(50) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = INNODB;

CREATE TABLE category (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(50),
  code VARCHAR(10),
	PRIMARY KEY (id)
) ENGINE = INNODB;

CREATE TABLE product_category (
  product_id INT NOT NULL,
  category_id INT NOT NULL,
  INDEX (product_id),
  INDEX (category_id),
  FOREIGN KEY (product_id) REFERENCES product (id) ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (category_id) REFERENCES category (id)
) ENGINE = INNODB;