## Basic setup

* To set things up, run `make init`.
* To make the database connection work, update `config/settings.yaml` or create a new user in your database to match what's in that file.
* Log into mysql and use `CREATE DATABASE calendar` to create the database.
* To see output from unit tests, run `./vendor/bin/phpunit`.
* To import fixtures, run `mysql -uroot -p calendar < fixtures.sql`
* To run the server, type `php -S localhost:8000`
* Visit `http://localhost:8000/` to see output

### Extra tip

Try viewing the page with JavaScript disabled to see what filtering is server-side and what's not.

