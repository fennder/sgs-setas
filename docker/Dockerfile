FROM php:5.6

RUN ln -sf /usr/share/zoneinfo/America/Araguaina /etc/localtime

RUN apt update && apt upgrade -y && apt install -y \
	mc htop git curl zip nginx

#RUN phpenmod mbstring dom
#RUN sed -ie 's/upload_max_filesize\ =\ 2M/upload_max_filesize\ =\ 128M/g' /etc/php/5.6/php.ini
#RUN sed -ie 's/post_max_size\ =\ 8M/post_max_size\ =\ 128M/g' /etc/php/5.6/php.ini

#RUN sed -ie 's/pm.max_children\ =\ 5/pm.max_children\ =\ 90/g' /etc/php/7.2/fpm/pool.d/www.conf
#RUN sed -ie 's/pm.start_servers\ =\ 2/pm.start_servers\ =\ 40/g' /etc/php/7.2/fpm/pool.d/www.conf
#RUN sed -ie 's/pm.min_spare_servers\ =\ 1/pm.min_spare_servers\ =\ 20/g' /etc/php/7.2/fpm/pool.d/www.conf
#RUN sed -ie 's/pm.max_spare_servers\ =\ 3/pm.max_spare_servers\ =\ 40/g' /etc/php/7.2/fpm/pool.d/www.conf

RUN curl -L https://getcomposer.org/download/latest-1.x/composer.phar -o /usr/local/bin/composer
RUN chmod +x /usr/local/bin/composer

RUN php -v

RUN mkdir -m 777 /tmp/storage
RUN mkdir -m 777 /tmp/storage/logs
RUN mkdir -m 777 /tmp/storage/framework
RUN mkdir -m 777 /tmp/storage/framework/cache
RUN mkdir -m 777 /tmp/storage/framework/sessions
RUN mkdir -m 777 /tmp/storage/framework/views

RUN chmod 777 /src/bootstrap/cache -R

#CMD sleep infinity
CMD nginx -g "daemon off;"
