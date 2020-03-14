## Basic setup

* To set things up, run `make init`.
* To make the database connection work, update `config/settings.yaml`.
* To see output from a smoke test, run `php public/index.php`.
* Or, to see the smoke test in a browser: 
    * `cd public`
    * `php -S localhost:8000`
    * Visit `http://localhost:8000/` in a browser
* To see output from unit tests, run `./vendor/bin/phpunit`.

## More details

See SETUP.md for a few tips on doing additional common tasks, along with links to documentation used in setting up this stub.

## TODO items 

* Remove Basics folder and verify that all steps above still work.
* Add a how-to on importing from fixtures.sql.
* Use composer to require https://github.com/phpstan/phpstan and add a git hook for running it before every commit.
* Add more tests.