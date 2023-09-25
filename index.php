<?php 
	$configFile = file_get_contents("Config/config.json");
	$config = json_decode($configFile);
	//var_dump($configFile);
	//var_dump($config);
	//echo '------'.$config->database->name.'--------';
    //require_once '../CAR/autoloader.php';
	require_once ('../Routeur-Training-dev-Namespace/autoloader.php');
	$autoloader=new autoloader($config);
	$autoloader::register();	
	try
	{
      // var_dump($config);
	   //	$test=new zebi();
		//$test->zebikbir();*/
	
		//echo 'try---------->'.$config->basepath.'</br>';
		//require_once('Framework/httpRequest.php');
		$httpRequest = new HttpRequest();
        $router = new Router();
		$httpRequest->setRoute($router->findRoute($httpRequest,$config->basepath)); 
		// $httpRequest= "/" ou forum----- 
		//$config->basepath="PHP/Routeur-Training-dev/" chemin vers l index.php
        $httpRequest->run($config);
		//echo '//-----------------------try---Http------------------------------------//'.'</br>';
		//var_dump ( $httpRequest->run($config));
	}
	catch(Exception $e)
	{
        echo 'catch---------->'.$config->basepath.'</br>';
		echo '-----------------------////////VAR-dump--->$e//-------------------------------'.'</br>';
		//var_dump ($e);
		echo $e->getMessage().'</br>';
		echo "Le code de l'exception est : " . $e->getCode().'</br>';
		echo $e->getFile().'</br>';
		//echo '//-----------------------Http------------------------------------//'.'</br>';
		$httpRequest = new HttpRequest("/Error","GET");
		//echo $httpRequest->getUrl().'</br>';
		//echo $httpRequest->getMethod().'</br>';
		//var_dump ($httpRequest);
		//echo '-------------------------router----------------------------------//'.'</br>';
        $router = new Router();
		//echo '//------------------------------http->setRoute-------------------//'.'</br>';
		$httpRequest->setRoute($router->findRoute($httpRequest,$config->basepath));
		
		//$httpRequest->setRoute($router->findRoute($httpRequest));
		
		echo '//-------------------------------$http-->addparam----------------//'.'</br>';

		$httpRequest->addParam($e);
		//$httpRequest->getParam();
		//var_dump($httpRequest->getParam());
		//echo '//---------------------------$config ----------------------------//'.'</br>';
	
	    //var_dump($config);
      
		//echo '//--------http->RUN------//';			
		$httpRequest->run($config);
		//var_dump($httpRequest->run($config));
	}

