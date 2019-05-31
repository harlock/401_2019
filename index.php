<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)) . DS);
	define('URL', "http://localhost/Web4012019/proyecto/");

	require_once ("Config/Autoload.php");
	Config\Autoload::run();
	Config\Enrutador::run(new Config\Request());

	require_once("Views/template.php");
?>







