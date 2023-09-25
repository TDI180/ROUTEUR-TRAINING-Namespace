
<?php

    class vue 
					{
					  private $fichier; 
						  
						  public function __construct ($action)
							  { 
								 $this->fichier="E:/wamp/www/pattern_MVC_OBJET_index_1.0/view/".$action.".php";   							
							  } 
							  
					  public function generer ($contenu)
							  {
							     if (file_exists( $this->fichier))
								   {
								    require  $this->fichier ;
								   }
							  }
							  
					  private function CreateVue ($données)					  
							{
								ob_start();		 
								 //extract($données);
								$vue=$données;
								$retour=ob_get_clean();
								 return $retour;
							}  	  
					}
					
	 class INDEX
						 {
							public function Acceuil()
										  {
											 
											 ob_start();
											   //echo "<p> <a href ='INDEX.php ?c=0'>ALLER AU FORUM ECONOMIE</a>  </p> ";
											   echo "<p> <a>ZEBI</a>  </p> ";
											 $données=ob_get_clean();
						
											 require 'view\gabarit.php'; 
										   }
						 }
	class vuez 
					{
					  private $fichier; 
					  
						  public function __construct ($action)
							  { 
								$this->fichier="E:/wamp/www/pattern_MVC_OBJET_index_1.0/view/".$action.".php";   									
							  }
							  
					  public function generer ($contenu)
							  {
							     if (file_exists( $this->fichier))
								   {
								    require  $this->fichier ;
								   }
							  }
							  
						public function afficher ($action)
							 {	  		
							  
							  $this->fichier="E:/wamp/www/pattern_MVC_OBJET_index_1.0/view/".$action.".php";   	
							  require  $this->fichier ;
							 } 
							 
					  private function CreateVue ($données)					  
							{
								ob_start();		 
								 //extract($données);
								$vue=$données;
								$retour=ob_get_clean();
								 return $retour;
							}  	  
					}		
?>