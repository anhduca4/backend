#!/bin/bash

docker-compose build
docker-compose start
docker-compose exec shobo-app php artisan migrate:reset
docker-compose exec shobo-app php artisan migrate
docker-compose exec shobo-app php artisan db:seed
