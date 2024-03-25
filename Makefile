up:
	docker-compose up -d
	
down:
	docker-compose down

open-project:
	docker exec -it 30-days-to-learn-laravel bash

run:
	docker exec -it 30-days-to-learn-laravel bash -c "php artisan serve"

composer-update:
	docker exec 30-days-to-learn-laravel bash -c "composer update"

data:
	docker exec 30-days-to-learn-laravel bash -c "php artisan migrate"
	docker exec 30-days-to-learn-laravel bash -c "php artisan db:seed"

setup:
	@make build
	@make up 
	@make composer-update

build:
	docker-compose build --no-cache --force-rm