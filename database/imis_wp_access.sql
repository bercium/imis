CREATE USER 'imis_wp'@'%' IDENTIFIED BY '***';

GRANT USAGE ON * . * TO 'imis_wp'@'%' IDENTIFIED BY '***' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

GRANT ALL PRIVILEGES ON `imis_wp` . * TO 'imis_wp'@'%';