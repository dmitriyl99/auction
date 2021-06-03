init: docker-down-clear docker-pull docker-build docker-up api-init
up: docker-up
down: docker-down
restart: down up
lint: api-lint
analyze: api-analyze

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down --remove-orphans

docker-down-clear:
	docker-compose down -v --remove-orphans

docker-pull:
	docker-compose pull

docker-build:
	docker-compose build

api-init: api-composer-install

api-composer-install:
	docker-compose run --rm api-php-cli composer install

api-lint:
	docker-compose run --rm api-php-cli composer lint
	docker-compose run --rm api-php-cli composer cs-check

api-analyze:
	docker-compose run --rm api-php-cli composer psalm