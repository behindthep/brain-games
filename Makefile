install:
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime

validate:
	composer validate
	composer dump-autoload

lint:
	composer exec --verbose phpcs -- src bin
	composer exec --verbose phpstan

lint-fix:
	composer exec --verbose phpcbf -- src bin
