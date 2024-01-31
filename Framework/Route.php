<?php  
namespace Route;
use BaseController as B;
use NoControl          as NoCtrl;
use NoAction            as  NoAct;

class Route
	{
		private $_path;
		private $_controller;
		private $_action;
		private $_method;
		private $_param;
		private $_manager;
		
		public function __construct($route)
		{
			$this->_path = $route->path;
			$this->_controller = $route->controller;
			$this->_action = $route->action;
			$this->_method = $route->method;
			$this->_param = $route->param;
			$this->_manager = $route->manager;

			//var_dump ($this->_path);
		}
		
		public function getPath()
		{
			return $this->_path;
		}
		
		public function getController()
		{
			return $this->_controller;
		}
		
		public function getAction()
		{
			return $this->_action;
		}
		
		public function getMethod()
		{
			return $this->_method;
		}
		
		public function getParam()
		{
			return $this->_param;
		}
		
		public function getManager()
		{
			return $this->_manager;
		}
		
		public function run($httpRequest,$config)
		{
			$controller = null;
			$Namecontroller = $this->_controller ."Controller";       			
			                                                        // in the switch statement ---> namespace statement
																	switch ($Namecontroller) 
																	{
																		case 'HomeController' : 
																			                                              $Namecontroller='Home'.'\\'.$Namecontroller ;
																		break;

																		case 'ForumController' : 
																			                                             $Namecontroller='Forum'.'\\'.$Namecontroller ;
						                                                break;	
																	}      

            if(class_exists($Namecontroller))
            {				
                $controller = new $Namecontroller($httpRequest,$config);//controler instanciation without namespace statement

                if(method_exists($controller, $this->_action))
				 {
					 echo  '$this--->_action=='.$this->_action .'</br>';         
				   //  var_dump( $httpRequest->getParam()) .'</br>';
				                                                                                                           
					$controller->{$this->_action}(...$httpRequest->getParam());
                }
                else
                {
                    throw new NoAct\ActionNotFoundException();
                }
            }
            else
            {
				//echo "zebi" ;
				throw new  NoControl\ControllerNotFoundException();	
            }			
		}
	}