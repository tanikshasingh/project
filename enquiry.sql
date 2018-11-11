CREATE TABLE IF NOT EXISTS enquiry_database.enquiry 
(
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(20) null,
email VARCHAR(20) null,
mobile VARCHAR(10) null,
issue VARCHAR(50) null,
)ENGINE=innodb;
