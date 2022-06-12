FROM php:7-fpm
COPY ./src /var/www/html
RUN apt update && apt install -y procps && apt install -y sudo && apt install -y vim

RUN mkdir -p /app/tmp
COPY . . 

RUN echo "security.limit_extensions = .php .php3 .php4 .php5 .php7 .css .js .htm .html .phtml .pl .py .rb .sh .fcgi .cgi .asp .aspx .php4 .php5 .php7 .phps .phtml .fcgi .cgi .asp .aspx .php4 .php5 .php7 .phps .phtml" >> /usr/local/etc/php-fpm.d/www.conf.default
RUN echo "security.limit_extensions = .php .php3 .php4 .php5 .php7 .css .js .htm .html .phtml .pl .py .rb .sh .fcgi .cgi .asp .aspx .php4 .php5 .php7 .phps .phtml .fcgi .cgi .asp .aspx .php4 .php5 .php7 .phps .phtml" >> /usr/local/etc/php-fpm.d/www.conf

EXPOSE 8000
EXPOSE 9000
