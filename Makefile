setup:
	@make build
	@make up 
	@make composer-update

build:
	docker-compose build --no-cache --force-rm

down:
	docker-compose down

up:
	docker-compose up -d

open-container:
	docker exec -it 30-days-to-learn-laravel bash

composer-update:
	docker exec 30-days-to-learn-laravel bash -c "composer update"

data:
	docker exec 30-days-to-learn-laravel bash -c "php artisan migrate"
	docker exec 30-days-to-learn-laravel bash -c "php artisan db:seed"