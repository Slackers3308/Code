
FROM fauria/lamp

COPY * /var/www/html/
COPY setupdb.sql /docker-entrypoint-initdb.d/
