CREATE USER 'afp2'@'%' IDENTIFIED BY 'afp2project';
GRANT ALL PRIVILEGES ON *.* TO 'afp2'@'%' REQUIRE NONE WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
CREATE DATABASE IF NOT EXISTS `afp2`;
GRANT ALL PRIVILEGES ON `afp2`.* TO 'afp2'@'%';


CREATE TABLE `afp2`.`address` ( 
	`id` INT NOT NULL AUTO_INCREMENT ,  
	`country` VARCHAR(250) NOT NULL ,  
	`post_code` VARCHAR(25) NOT NULL ,  
	`city` VARCHAR(250) NOT NULL ,  
	`street` VARCHAR(250) NOT NULL ,  
	`house` VARCHAR(250) NOT NULL ,  
	`note` VARCHAR(250) NOT NULL ,    
	PRIMARY KEY  (`id`));

CREATE TABLE `afp2`.`users` (
 `id` INT NOT NULL AUTO_INCREMENT ,  
 `username` VARCHAR(50) NOT NULL ,  
 `password` VARCHAR(250) NOT NULL ,  
 `first_name` VARCHAR(50) NOT NULL ,  
 `last_name` VARCHAR(50) NOT NULL ,  
 `email` VARCHAR(100) NOT NULL ,  
 `birthdate` DATE,  
 `billing_address` INT NOT NULL ,  
 `shipping_adress` INT NOT NULL ,  
 `regdate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,  
 `level` TINYINT(4) NOT NULL ,    
 PRIMARY KEY  (`id`),
 CONSTRAINT users_billing_address_foreign
    FOREIGN KEY (billing_address) 
        REFERENCES address(id),
 CONSTRAINT users_shipping_address_foreign
    FOREIGN KEY (shipping_adress) 
        REFERENCES address(id));


CREATE TABLE `afp2`.`orders` (
 `id` INT NOT NULL AUTO_INCREMENT ,  
 `user_id` INT NOT NULL ,  
 `billing_address` INT NOT NULL ,  
 `shipping_adress` INT NOT NULL ,  
 `status` TINYINT(1) NOT NULL ,  
 `ordertime` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,   
 PRIMARY KEY  (`id`),
 CONSTRAINT orders_user_id_foreign
    FOREIGN KEY (user_id) 
        REFERENCES users(id),
 CONSTRAINT orders_billing_address_foreign
    FOREIGN KEY (billing_address) 
        REFERENCES address(id),
 CONSTRAINT orders_shipping_address_foreign
    FOREIGN KEY (shipping_adress) 
        REFERENCES address(id));


CREATE TABLE `afp2`.`products` (
 `id` INT NOT NULL AUTO_INCREMENT ,  
 `name` VARCHAR(50) NOT NULL ,  
 `brand` VARCHAR(50) NOT NULL ,  
 `in_stock` INT NOT NULL ,  
 `img` VARCHAR(255) NOT NULL ,  
 `category` VARCHAR(50) NOT NULL,   
 PRIMARY KEY  (`id`));


CREATE TABLE `afp2`.`cart` (
 `id` INT NOT NULL AUTO_INCREMENT ,  
 `user_id` INT NOT NULL ,  
 `product_id` INT NOT NULL ,  
 `amount` INT NOT NULL ,    
 PRIMARY KEY  (`id`),
 CONSTRAINT cart_user_id_foreign
    FOREIGN KEY (user_id) 
        REFERENCES users(id),
 CONSTRAINT cart_product_id_foreign
    FOREIGN KEY (product_id) 
        REFERENCES products(id));

CREATE TABLE `afp2`.`package` (
 `id` INT NOT NULL AUTO_INCREMENT ,  
 `product_id` INT NOT NULL ,  
 `order_id` INT NOT NULL ,  
 `amount` INT NOT NULL ,    
 PRIMARY KEY  (`id`),
 CONSTRAINT package_product_id_foreign
    FOREIGN KEY (product_id) 
        REFERENCES products(id),
 CONSTRAINT package_order_id_foreign
    FOREIGN KEY (order_id) 
        REFERENCES orders(id));