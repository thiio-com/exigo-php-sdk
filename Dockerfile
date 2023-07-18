
# docker build -t exigo:test .
# docker run -it exigo:test bash
# curl icanhazip.com
# vendor/bin/phpunit tests/GetItemsTest.php

FROM php:8.1.21

COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN apt-get update && apt install -y git zip
RUN composer install

CMD [ "tail", "-f" ]