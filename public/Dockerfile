# QA Docker Wordpress
#
# Takes the wordpress source and places it inside a wordpress docker image
#


FROM wordpress

# Copy across the source files to the apache web root
COPY ./public /var/www/html
COPY ./ /var/www/
# Copy across the phpOverrides file
COPY ./phpOverrides.ini /usr/local/etc/php/conf.d/uploads.ini
