<?php 
class autoloader
			{  
				public static $config;
								
				public function __construct(object $Obj)
				                                  {
													 self::$config=$Obj;	
													//var_dump(self::$config).'</br>';													
												  }  
												                                               
				
				static function register()
											{
											//spl_autoload_register('autoload');
											//echo __CLASS__.'</br>';	
											spl_autoload_register([__CLASS__,'autoload']);
											//spl_autoload_register([__CLASS__,'autoloadfolder']);
											}	
											
				public static function geters()// static function called with self
				               {
					            var_dump(self::$config);
				               } 							
	
			    static function autoload($class)
				 {
					//self::geters();
					foreach(self::$config->autoloadFolder as $folder)
									{
									 if(file_exists($folder.'/'.$class.'.php'))
										{
										//var_dump ($class);
										 $class=str_replace(__NAMESPACE__ . '\\','',$class);
										 var_dump ($class);
										 $class=str_replace('\\','/',$class);
										// var_dump ($class);		
										 require_once($folder . '/' . $class . '.php');	
										 
										 // echo 	$folder.'/'.$class.'.php'.'</br>';
										  //you can see on the screen the include folder,file.php										  
										  break;
										}
									}
								}  
				static function autoloadfolder($class)
								{
								   //self::geters();
								   foreach(self::$config->autoloadFolder as $folder)
												   {
													if(file_exists($folder.'/'.$class.'.php'))
													   {
														echo  $folder.'/'.$class.'.php';  
													   //var_dump ($class);
														$class=str_replace(__NAMESPACE__ . '\\','',$class);
														var_dump ($class);
														$class=str_replace('\\','/',$class);
													   // var_dump ($class);		
														require_once($folder . '/'. $class . '.php');															
														// echo 	$folder.'/'.$class.'.php'.'</br>';
														//you can see on the screen the include folder,file.php										  
														 break;
													   }
												   }
											   }   				
								

           }                                           
						 