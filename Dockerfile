# Pulls nginx
FROM nginx:alpine

# Copies configuration file for nginx into container
COPY default.conf /etc/nginx/conf.d/default.conf

# Copies over main index html file into container
COPY index.html /usr/share/nginx/html/index.html

# Copies over all stylesheets and js into container
COPY src /usr/share/nginx/html/src