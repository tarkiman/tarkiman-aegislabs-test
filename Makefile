migrate:
	php artisan migrate
dev:
	php artisan serve
deploy:
	#scp -r -P 64000 
test:
	./vendor/bin/phpunit
