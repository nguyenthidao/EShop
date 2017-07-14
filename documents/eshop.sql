CREATE DATABASE eshop;

CREATE TABLE brands(
  id INT AUTO_INCREMENT PRIMARY KEY,
  code VARCHAR(100) NOT NULL,
  name VARCHAR(100) NOT NULL,
  description TEXT NOT NULL
);

CREATE TABLE users(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  password varchar(20) NOT NULL,
  role INT NOT NULL,
  email VARCHAR(100),
  city VARCHAR(100) NOT NULL,
  address VARCHAR(200),
  salary FLOAT,
  phone VARCHAR(20) NOT NULL,
  birthday DATE,
  status INT NOT NULL
);

CREATE TABLE products(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  size VARCHAR(100),
  color VARCHAR(20),
  price FLOAT NOT NULL,
  quality INT NOT NULL,
  description TEXT,
  ram text,
  keyboard text,
  display text,
  hard_drive text,
  wireless text,
  brands_id INT NOT NULL,
  FOREIGN KEY(brands_id) REFERENCES brands(id)
);

CREATE TABLE comments(
  id INT AUTO_INCREMENT PRIMARY KEY,
  content TEXT,
  users_id INT NOT NULL,
  products_id INT NOT NULL,
  FOREIGN KEY(users_id) REFERENCES users(id),
  FOREIGN KEY(products_id) REFERENCES products(id)
);

CREATE TABLE sales(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(200) NOT NULL,
  content TEXT NOT NULL,
  start_time DATE NOT NULL,
  end_time DATE,
  sale_number INT NOT NULL
);

CREATE TABLE sale_details(
  id INT AUTO_INCREMENT PRIMARY KEY,
  type INT NOT NULL,
  sales_id INT NOT NULL,
  products_id INT NOT NULL,
  brands_id INT NOT NULL,
  FOREIGN KEY(sales_id) REFERENCES sales(id),
  FOREIGN KEY(products_id) REFERENCES products(id),
  FOREIGN KEY(brands_id) REFERENCES brands(id)
);

CREATE TABLE orders(
  id INT AUTO_INCREMENT PRIMARY KEY,
  order_date DATE NOT NULL,
  required_date DATE,
  shipped_date DATE NOT NULL,
  status TEXT,
  users_id INT NOT NULL,
  FOREIGN KEY(users_id) REFERENCES users(id)
);

CREATE TABLE order_details(
  id INT AUTO_INCREMENT PRIMARY KEY,
  quality_ordered INT NOT NULL,
  price_each FLOAT NOT NULL,
  orders_id INT NOT NULL,
  products_id INT NOT NULL,
  FOREIGN KEY(orders_id) REFERENCES orders(id),
  FOREIGN KEY(products_id) REFERENCES products(id)
);

CREATE TABLE images(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  path VARCHAR(250) NOT NULL,
  products_id INT NOT NULL,
  FOREIGN KEY(products_id) REFERENCES products(id)
);

ALTER TABLE products DROP COLUMN size;
ALTER TABLE users DROP COLUMN salary;
ALTER TABLE users DROP COLUMN address, DROP COLUMN city, DROP COLUMN birthday, DROP COLUMN phone;