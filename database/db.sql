CREATE DATABASE planetr;

USE planetr;

--
CREATE TABLE gateway_servers (
  id INT(11) NOT NULL,
  name VARCHAR(60) NOT NULL,
  domain VARCHAR(60) NOT NULL,
  description VARCHAR(200) NOT NULL
);

ALTER TABLE gateway_servers
  ADD PRIMARY KEY (id);

ALTER TABLE gateway_servers
  MODIFY id INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1;

insert into gateway_servers (name,domain,description) values ('Dev', 'localhost', 'Development');
insert into gateway_servers (name,domain,description) values ('Unites States', 'us1.planetr.io', 'Gateway on US east');
insert into gateway_servers (name,domain,description) values ('Asia Pacific', 'ap1.planetr.io', 'Gateway on Asia Pacific');

-- TABLE USER
-- all pasword wil be encrypted using SHA2
CREATE TABLE users (
  id INT(11) NOT NULL,
  username VARCHAR(16) NOT NULL,
  password VARCHAR(60) NOT NULL,
  fullname VARCHAR(100) NOT NULL,
  email VARCHAR(60),
  phone VARCHAR(60),
  company VARCHAR(60),
  address VARCHAR(200),
  city VARCHAR(60),
  state VARCHAR(60),
  country VARCHAR(60),
  gateway_server_id INT NOT NULL,
  CONSTRAINT fk_gateway_server FOREIGN KEY(gateway_server_id) REFERENCES gateway_servers(id)
);

ALTER TABLE users
  ADD PRIMARY KEY (id);

ALTER TABLE users
  MODIFY id INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;

DESCRIBE users;

INSERT INTO users (id, username, password, fullname, gateway_server_id) 
  VALUES (1, 'admin', 'admin', 'Planetr Admin', 1);

SELECT * FROM users;

--
CREATE TABLE marketplace_category (
  id INT(11) NOT NULL,
  category VARCHAR(60) NOT NULL,
  category_indx INT NOT NULL
);

ALTER TABLE marketplace_category
  ADD PRIMARY KEY (id);

ALTER TABLE marketplace_category
  MODIFY id INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1;

insert into marketplace_category (category,category_indx) values ('General', 1);
insert into marketplace_category (category,category_indx) values ('Rendering', 2);
insert into marketplace_category (category,category_indx) values ('Machine Learning', 3);
insert into marketplace_category (category,category_indx) values ('Web Crawling', 4);

--
CREATE TABLE marketplace (
  id INT(11) NOT NULL,
  name VARCHAR(150) NOT NULL,
  iconurl VARCHAR(150) NOT NULL,
  description TEXT,
  category_id INT NOT NULL,
  type VARCHAR(60) NOT NULL,
  cost VARCHAR(60) NOT NULL,
  featured VARCHAR(3) NOT NULL,
  created_at timestamp NOT NULL DEFAULT current_timestamp,
  CONSTRAINT fk_category FOREIGN KEY(category_id) REFERENCES marketplace_category(id)
);

ALTER TABLE marketplace
  ADD PRIMARY KEY (id);

ALTER TABLE marketplace
  MODIFY id INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 1;

insert into marketplace (name,iconurl,description,category_id,type,cost,featured) 
values ('Blender Render', 'https://planetr.io/img/marketplace/blender-icon.png', 'Cycles is Blender’s ray-trace based production render engine.', 2, 'DCU', 'FREE', 'yes');
insert into marketplace (name,iconurl,description,category_id,type,cost,featured) 
values ('TensorFlow', 'https://styles.redditmedia.com/t5_3alkk/styles/communityIcon_khftc7a8x0e31.png', 'Cycles is Blender’s ray-trace based production render engine.', 3, 'DCU', 'FREE', 'no');
insert into marketplace (name,iconurl,description,category_id,type,cost,featured) 
values ('Puppeteer', 'https://user-images.githubusercontent.com/10379601/29446482-04f7036a-841f-11e7-9872-91d1fc2ea683.png', 'Cycles is Blender’s ray-trace based production render engine.', 4, 'DCU', 'FREE', 'no');
insert into marketplace (name,iconurl,description,category_id,type,cost,featured) 
values ('Chromium', 'https://cdn2.iconfinder.com/data/icons/metro-uinvert-dock/256/Google_Chromium.png', 'Cycles is Blender’s ray-trace based production render engine.', 4, 'DCU', 'FREE', 'no');
insert into marketplace (name,iconurl,description,category_id,type,cost,featured) 
values ('Chromium', 'https://cdn2.iconfinder.com/data/icons/metro-uinvert-dock/256/Google_Chromium.png', 'Cycles is Blender’s ray-trace based production render engine.', 1, 'DCU', 'FREE', 'no');

DESCRIBE marketplace;