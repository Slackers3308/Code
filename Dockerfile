
FROM fauria/lamp

COPY * /var/www/html/

RUN mysql < /var/www/html/setupdb.sql