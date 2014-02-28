<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
		'debug' => true,
		'view' => new \Slim\Views\Twig()
));

$view = $app->view();

$view->parserExtensions = array(
		new \Slim\Views\TwigExtension(),
		new Twig_Extension_Debug()
);

$view->parserOptions = array(
		'debug' => true
);

//Database config
ORM::configure('mysql:host=localhost;dbname=NullDateIdiormTwig');
ORM::configure('username', 'root');
ORM::configure('password', '');

//Query logging
ORM::configure('logging', true);



//Route
$app->get('/', function () use ($app){
	$app->render('index.twig', array(
			'tests' => Model::factory("Test")->find_many()
	));
});

$app->run();

This is a [thread](http://forums.phpfreaks.com/topic/285615-parisidiorm-err-empty-response-on-null-value-in-twig/) where there is the same problem.

This solution is a little forced.

The real problem is that the application crashes when you try to access to that field via twig. Even a simple check to see if the variable is defined leads to a crash.

I created this project to repropose the same issue. Check it.
