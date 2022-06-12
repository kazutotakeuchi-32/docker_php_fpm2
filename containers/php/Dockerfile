FROM php:7-fpm
COPY ./src /var/www/html
RUN apt update && apt install -y procps && apt install -y sudo && apt install -y vim 
# RUN apt-get update && apt-get install  iputils-ping && apt-get install -y  net-tools &&  apt install -y default-mysql-client
RUN  docker-php-ext-install pdo_mysql

RUN mkdir -p /app/tmp
COPY . . 

# security
RUN echo "security.limit_extensions = .php .php3 .php4 .php5 .php7 .css .js .htm .html .phtml .pl .py .rb .sh .fcgi .cgi .asp .aspx .php4 .php5 .php7 .phps .phtml .fcgi .cgi .asp .aspx .php4 .php5 .php7 .phps .phtml" >> /usr/local/etc/php-fpm.d/www.conf.default
RUN echo "security.limit_extensions = .php .php3 .php4 .php5 .php7 .css .js .htm .html .phtml .pl .py .rb .sh .fcgi .cgi .asp .aspx .php4 .php5 .php7 .phps .phtml .fcgi .cgi .asp .aspx .php4 .php5 .php7 .phps .phtml" >> /usr/local/etc/php-fpm.d/www.conf

# composer install 
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

EXPOSE 8000
EXPOSE 9000