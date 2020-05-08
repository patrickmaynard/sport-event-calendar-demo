## Basic setup

* To set things up, run `make init`.
* To make the database connection work, update `config/settings.yaml` or create a new user in your database.
* Log into mysql and use `CREATE DATABASE calendar` to create the database.
* To see output from unit tests, run `./vendor/bin/phpunit`.
* To import fixtures, run `mysql -uroot -p calendar < fixtures.sql`
* To run the server, type `php -S localhost:8000`
* Visit `http://localhost:8000/` to see output

## More details

See SETUP.md for a few tips on doing additional common tasks, along with links to documentation used in setting up this stub.

## TODO items 

* Add "additional filters" per the requirements doc via https://datatables.net/
* Run tests again, including smoke tests.
* Remove SETUP.md and the line above that references it.
* Since you've broken the JavaScript barrier, go ahead and turn the menu into a true hamburger
* Run tests again, including smoke tests.
* Remove this TODO list. That's what tickets are for :-)