# Prepare for production

args = `arg="$(filter-out $@,$(MAKECMDGOALS))" && echo $${arg:-${1}}`

up:
	@docker compose up -d

down:
	@docker compose down

stop:
	@docker compose stop

restart:
	@docker compose restart

composer:
	@docker exec -it prot_php composer $(call args, install)

dump:
	@docker exec -it prot_php php artisan optimize:clear
	@docker exec -it prot_php composer dump-autoload

static:
	@docker exec -it prot_node npm install
	@docker exec -it prot_node npm run dev

key:
	@docker exec -it prot_php php artisan key:generate

migrate:
	@docker exec -it prot_php php artisan migrate:fresh --seed

refresh:
	@docker exec -it prot_php php artisan migrate:refresh --seed

tinker:
	@docker exec -it prot_php php artisan tinker

art:
	@docker compose run --rm --user 1000:1000 prot_php php artisan $(call args, tin)

sh:
	@docker compose run --rm --user 1000:1000 prot_php $(call args, bash)

production: ensure-composer ensure-permissions enable-cache build-assets

ensure-composer:
	composer update --ignore-platform-req=php --optimize-autoloader

ensure-permissions:
	chmod -R o+w storage

enable-cache:
	php artisan optimize


