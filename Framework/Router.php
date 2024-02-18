<?php
namespace Router;
use  Route  as R;
use  noRoute  as N;
class Router
	{
		private $_listRoute;
		
		public function __construct()
		{
			$stringRoute = file_get_contents('Config/route.json');
			$this->_listRoute = json_decode($stringRoute);
		}

		public function getUrl()
		
		{
			return $this->_listRoute;	
		}
		
		public function findRoute($httpRequest,$basepath)
		{

			//echo '====getUrl===>'.$httpRequest->getUrl().'</br>';
			//echo '===getMethod====>'.$httpRequest->getMethod().'</br>';
			$url = str_replace($basepath,"",$httpRequest->getUrl());
			//echo 'je suis dans la fonction findRoute'.'</br>';
			//ECHO '====$url='.$url.'======='.'</br>';
			//var_dump ($url);
<<<<<<< HEAD
			$method = $httpRequest->getMethod();
||||||| 47f3510
<<<<<<< HEAD
			$method =$httpRequest->getMethod();

=======
			$method = $httpRequest->getMethod();
>>>>>>> c89f5c9b48b76c84ea7280638c9db1ded60d3395
=======
//<<<<<<< HEAD
			$method =$httpRequest->getMethod();

//=======
			//$method = $httpRequest->getMethod();
//>>>>>>> c89f5c9b48b76c84ea7280638c9db1ded60d3395
>>>>>>> ec767d34b150fde185f92a56f877dc918466a160
			//var_dump ($method);
			$routeFound = array_filter($this->_listRoute,function($route) use ($url,$method)
			{
				/*echo '$route->path'.'</br>';
				var_dump ($route->path );
				echo 'var_dump ($url);'.'</br>';
				var_dump ($url);*/								
				return preg_match("#^" . $route->path . "$#", $url) && $route->method == $method;
				/*echo '********************************************************</br>';
				var_dump (preg_match("#^" . $route->path . "$#", $url)) ;
				echo '********************************************************</br>';*/
				
			});

		 	/*echo 'zebiroute'.'</br>';
		    print_r($routeFound ).'</br>';*/
			$numberRoute = count($routeFound);
			/*echo '</br>';
			echo '$numberRoute====>'.($numberRoute).'</br>';
			echo '</br>';*/			
			//echo '</br>';
			
			if($numberRoute > 1)
			{
				throw new MultipleRouteFoundException();
			}
			else if($numberRoute == 0)
			{
				throw  new N\NoRouteFoundException($httpRequest);						                    	
			}
			else
			{							   
				return  new R\Route  ( array_shift($routeFound ) ) ;				
	    	}
	   }
	
	}
