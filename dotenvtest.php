<?php
	require 'vendor/autoload.php';
	
	$dotenv = new Dotenv\Dotenv(__DIR__);
	$dotenv->load();

	echo getenv('JWT_SECRET');
