CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES
  ('admin', '$2y$10$e0LQ6fhsE0.a1YxoG1ViOO5n5QjFJ9K0knBLhK5l.BMlL/t5L8H8u');
