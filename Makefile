init:
	@make build
	@make up
build:
	docker-compose build --no-cache
up:
	docker-compose up -d
	@make open
down:
	docker-compose down
logs:
	docker-compose logs -f 
php_log:
	docker-compose logs -f php
web_log:
	docker-compose logs -f web
doc_log:
	docker-compose logs -f nginx_schemaspy
db_log:
	docker-compose logs -f db
db_exec:
	docker-compose exec db /bin/bash
sql:
	docker-compose exec db bash -c 'mysql -u root -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'
php_exec:
	docker-compose exec php /bin/bash
web_exec:
	docker-compose exec web /bin/sh
schemaspy_run:
	docker-compose run schemaspy
open:
	@make open_doc	
	@make open_app	
open_doc:
	open http://localhost:3000
open_app:
	open http://localhost:8080/index.php
curl_doc:
	curl http://localhost:3000
curl_app:
	curl http://localhost:8080/index.php
