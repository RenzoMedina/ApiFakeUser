/*Here is write yout database*/
USE your_database_name;

/*
? table of roles
*/
CREATE TABLE IF NOT EXISTS table_names(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name`  VARCHAR(90) NOT NULL,
    `last_name` VARCHAR(90) NOT NULL,
    `age` INT(3) NOT NULL ,
    `email` VARCHAR(100) NOT NULL,
    `phone` VARCHAR(20) NOT NULL,
    `address` VARCHAR(100) NOT NULL,
    `city` VARCHAR(100) NOT NULL,
    `company` VARCHAR(50) NOT NULL,
    `job` VARCHAR(50) NOT NULL,
    `estado` BOOLEAN NOT NULL,  
    `create_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `update_at` TIMESTAMP
)ENGINE = InnoDB;