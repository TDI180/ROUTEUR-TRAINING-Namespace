<?php 
namespace bm;
class autoloader
			{  
				public static $config;
								
				public function __construct(object $Obj)
				                                  {
													 self::$config=$Obj;																										
												  }  											                                               
				
				static function register()
											{	
											 spl_autoload_register([__CLASS__,'autoload']);								
											}	
												
			    static function autoload($class)
				 {		
					//echo $class.'</br>';			
					$class=str_replace(__NAMESPACE__.  '\\','',$class);									
					$class=str_replace('\\','/',$class);		
						
					
					foreach(self::$config->autoloadFolder as $folder)
									{
									 if (file_exists($folder.'/'.$class.'.php'))
										       {
											 	   //echo	$folder . '/' . $class . '.php'.'</br>';						
													require_once($folder . '/' . $class . '.php');	 																											  
													break;
										       }
									}
				}  				 
           }                                           
						 