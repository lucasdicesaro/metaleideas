CREATE DATABASE `metaleideasdb` ;
USE metaleideasdb;
-- --------------------------------------------------------

-- Usuario 
CREATE USER 'metaleideasuser'@'localhost' IDENTIFIED BY '***';
GRANT SELECT, INSERT, UPDATE, DELETE ON * . * TO 'metaleideasuser'@'localhost' IDENTIFIED BY '***' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON `metaleideasdb` . * TO 'metaleideasuser'@'localhost';

-- Admin
CREATE USER 'metaleideasadm'@'localhost' IDENTIFIED BY '***';
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, FILE, INDEX, ALTER, CREATE TEMPORARY TABLES, CREATE VIEW,  EVENT, TRIGGER, SHOW VIEW, CREATE ROUTINE, ALTER ROUTINE, EXECUTE ON * . * TO 'metaleideasadm'@'localhost' IDENTIFIED BY '***' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
GRANT ALL PRIVILEGES ON `metaleideasdb` . * TO 'metaleideasadm'@'localhost';