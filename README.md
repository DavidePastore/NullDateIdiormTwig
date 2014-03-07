NullDateIdiormTwig
==================

A little project to present a problem with null date for idiorm/twig. More info here: https://github.com/j4mie/idiorm/issues/181.


How to reproduce
----------------

* Start the MySQL service;
* Execute all the queries in the ```query.sql``` file;
* Change the database credentials in ```index.php```;
* ```composer update```;
* Go into ```http://localhost/NullDateIdiormTwig/``` and cry;
* Try to comment row 19 in ```templates/index.twig```;
* Go into ```http://localhost/NullDateIdiormTwig/``` and smile.
