# MyIntelli prueba técnica

## Requirements

-   PHP 8.2
-   PHP extension php_zip enabled
-   PHP extension php_xml enabled
-   PHP extension php_gd2 enabled
-   PHP extension php_iconv enabled
-   PHP extension php_simplexml enabled
-   PHP extension php_xmlreader enabled
-   PHP extension php_zlib enabled

## Postgres installation

Having docker up and running run

```bash
docker-compose up -d
```

## Installation

git clone https://github.com/ICKillerGH/my-intelli.git

```bash
composer install

cp .env.example .env

php artisan key:generate

php artisan storage:link
```

Update database credentials in the .env file

```bash
php artisan migrate

php artisan db:seed
```

You can login with the following credentials:
email: test@example.com
password: password

## API Documentation

[Postmam Docs](https://documenter.getpostman.com/view/12742247/2sA3XWcyZH)
