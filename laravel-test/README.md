## Build Docker

Required installed docker on pc

Run `docker-compose build` on root folder project

## Run Docker

Run command below on root folder project

-   `docker-compose up -d`
-   `docker-compose exec app composer install`
-   `docker-compose exec app php artisan migrate`
-   `docker-compose exec app php artisan db:seed`

## Test Web

http://localhost:8080

## Test Api

http://localhost:8080/api/activity-logs?user_id=1&type=login&order_by=id&sort=desc
