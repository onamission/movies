<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'mysql:host=localhost;dbname=movie_stars',
	'emulatePrepare' => TRUE,
	'username' => 'movie_user',
	'password' => 'movie_user',
	'charset' => 'utf8',
    'enableParamLogging' => TRUE,
    'enableProfiling' => TRUE,
);