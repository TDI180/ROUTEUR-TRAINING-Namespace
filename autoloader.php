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
					/*bloc useless---begin*/
					foreach(self::$config->Namespace as $space)
							{ 
									    //echo  $space."</br> ";	
										//var_dump($space)."</br>";
										// $space=str_replace('-BDD' ,'',$space);	
																			
										/* $space=substr($space,0,strpos($space,'-'));//on efface la class pas le namespace*/
										 $str = 'HONDA-YAMAHA';
										 $char = '-';
										 $space = explode($char, $space);
										 echo  "namespace--->-".$space [0] . "</br>";										

										// $newstring = preg_replace("/(.*?):(.*)/", "$2", $string);
										// echo "controleur---->".$space[1]."</br>";
							
									   foreach(self::$config->autoloadFolder as $folder) // put  this loop into the first loop to solve the fatal error
														{
														  //  var_dump ($folder.'/'.$space.'.php');
														  // echo "space-folder-ONE---->".$space."</br>";

															if (file_exists($folder.'/'.$space[1].'.php'))
																			{
																			   echo	$folder . '/' . $space[1] . '.php'.'</br>';						
																			   require_once($folder . '/' . $space[1] . '.php');	 	
																			      //echo "$-folder/$-space.php--->". $folder . '/' . $class . '.php'.'</br>';		
																				//require_once("view/Forum/Forum.php");	 																					  
																				break;
																			}
							                            }	
							}	
						//	$class=str_replace('\\','/',$class);				

					switch ($class) {
                                                     /* case 'BDD\PDO' : $class=str_replace('BDD'. '\\','',$class);																												                                        	
						                                break;
						                                
						                               case 'BDD\BDD' : $class=str_replace('BDD'. '\\','',$class);																												                                        	
														break;
						
						                                case 'Route\Route' : $class=str_replace('Route'. '\\','',$class);														                                        	
														break;

														case 'HttpRequest\HttpRequest' : $class=str_replace('HttpRequest'. '\\','',$class);														                                        	
														break;
                                                        
														case 'Router\Router' : $class=str_replace('Router'. '\\','',$class);														                                        	
														break;

														case 'Route\ControllerNotFoundException' :  $class=str_replace('Route'. '\\','',$class);														                                        	
														break;*/

														case 'bm\Exeption' : $class=str_replace('bm'. '\\','',$class); 													                                        	
														break;		

                                                      /*  case 'FileManager\FileManager' : $class=str_replace('FileManager'. '\\','',$class);																												                                        	
														break;

														case 'BaseManager\BaseManager' : $class=str_replace('BaseManager'. '\\','',$class);																												                                        	
														break;

													    case 'BaseController\BaseController' : $class=str_replace('BaseController'. '\\','',$class);																												                                        	
														break;

														case 'Home\HomeController' :  $class=str_replace('Home'. '\\','',$class);
														break;

												        case 'Forum\ForumController' :  $class=str_replace('Forum'. '\\','',$class);
														break;

														case 'Forum\ForumModel' :  $class=str_replace('Forum'. '\\','',$class);
														break;*/
														
														case 'noRoute\NoRouteFoundException' :  $class=str_replace('noRoute'. '\\','',$class);													                                           
														break;

														case 'NoControl\ControllerNotFoundException' :  $class=str_replace('NoControl'. '\\','',$class);													                                           
														break; 
														
														case 'NoAction\ActionNotFoundException' :  $class=str_replace('NoAction'. '\\','',$class);													                                           
														break;   
														
														default : $class=str_replace(__NAMESPACE__. '\\','',$class);
					                               }

					$class=str_replace('\\','/',$class);	
					echo "space-TWO--->".$class.'</br>';			

					foreach(self::$config->autoloadFolder as $folder)
									{
									  // var_dump ($folder);
										if (file_exists($folder.'/'.$class.'.php'))
										       {
											 	   //echo	$folder . '/' . $class . '.php'.'</br>';						
													require_once($folder . '/' . $class . '.php');	 																											  
													break;
										       }
									}
				}  				 
			}
		
		                    
						 