<?php  
	$configFile = file_get_contents("Config/config.json");
	$config = json_decode($configFile);   
	require_once ('../Routeur-Training-dev-Namespace/autoloader.php');	
	$autoloader=new  bm\autoloader($config);
	//$autoloaderForum=new  autoloaderForum($config);
	$autoloader::register();
	
	try
	{     
	    $httpRequest = new HttpRequest\HttpRequest();
        $router = new Router\Router();
		$httpRequest->setRoute($router->findRoute($httpRequest,$config->basepath)); 		
        $httpRequest->run($config);		
	}
	catch(Exception $e)
	{
        echo 'catch---------->'.$config->basepath.'</br>';
		echo '-----------------------////////VAR-dump--->$e//-------------------------------'.'</br>';		
		echo $e->getMessage().'</br>';
		echo "Le code de l'exception est : " . $e->getCode().'</br>';
		echo $e->getFile().'</br>';		
		$httpRequest = new HttpRequest\HttpRequest("/Error","GET");	
        $router = new Router\Router();

		$httpRequest->setRoute($router->findRoute($httpRequest,$config->basepath));		
		echo '//-------------------------------$http-->addparam----------------//'.'</br>';
		$httpRequest->addParam($e);			
		$httpRequest->run($config);		
	}

