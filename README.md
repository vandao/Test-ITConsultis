# Get Deep Value

Retrieve a value from a deeply nested array using "dot" notation

Run test `php test.php`

# Laravel Test

## Build Docker

Required installed docker on pc

Run `docker-compose build` on laravel-test folder project

## Run Docker

Run command below on laravel-test folder project

- `docker-compose up -d`
- `docker-compose exec app composer install`
- `docker-compose exec app php artisan migrate`
- `docker-compose exec app php artisan db:seed`

## Test Web

http://localhost:8080

## Test Api

http://localhost:8080/api/activity-logs?user_id=1&type=login&order_by=id&sort=desc
