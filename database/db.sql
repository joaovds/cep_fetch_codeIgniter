CREATE DATABASE fetch_api_pw3;

USE fetch_api_pw3;

CREATE TABLE tb_user (
  cd INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(80) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(100) NOT NULL,
  uf CHAR(2),
  city VARCHAR(100),
  district VARCHAR(80),
  street VARCHAR(80),
  number INT
);
