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