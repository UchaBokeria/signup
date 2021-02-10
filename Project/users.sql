
CREATE TABLE users(
  id int(255) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(500),
  surname VARCHAR(500),
  birthDate DATE,
  gender TINYINT(1),
  address VARCHAR(100),
  mobile VARCHAR(500),
  mobile2 VARCHAR(500),
  country_id INT(255),
  city VARCHAR(255),
  email VARCHAR(350),
  password VARCHAR(500),
  confirmed TINYINT(1),
  createdAt timestamp
);
