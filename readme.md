# how to:

# start container and install dependencies
docker compose up -d

docker compose run --rm composer install


# enter the container
sudo docker exec -it php_unit_testing bash

# run tests
vendor/bin/phpunit tests/

# writing code
write your tests on /tests and your production code on src