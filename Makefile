dev:
	php -S localhost:8080 -t src

lint:
	php-cs-fixer fix src