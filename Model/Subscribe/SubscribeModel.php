<?php
       class SubscribeModel extends UserManager
                                {
                                    public function __construct($name,$table)
                                    {                                    	
                                     parent::__construct($name,$table);   //appel de la data.base                                
                                    }

                                    private $Subscribe=''; 
                                    private $newBoy;
                                    private $row;
                                 

                                  /*  public function Register()
                                    {
                                        ?>
                                           <p>HERE---ALL---REGISTERED---PERSON</p>     
                                        <?php 
                                          return 0;
                                    }*/

                                    public function InsertModel()
                                    {                                                 
                                      /*echo $_POST['LOGIN']."<br>";
                                      echo $_POST['PASS']."</p>";                                            
                                      echo $_POST['EMAIL']."</p>";
                                      echo date("l jS \of F Y h:i:s A") . "<br>";*/
                                      $date=date("l jS \of F Y h:i:s A");
                                      parent::InsertnewBoy($_POST['LOGIN'],$_POST['PASS'],$date,$_POST['EMAIL']); 
                                      return 0;
                                    }  

                                    public  function AllRegisterPerson ()     
                                    { 
                                      $this->Register=parent::getALL();

                                        ?>
                                              <h1>HERE---ALL---REGISTERED---PERSON</h1>
                                        <?php
                                      $array = (array) $this->Register[0];//convert object to php
                                      echo 'voici le numero du premier inscrit:...'.$array['numero'].'</br>';
                                      echo 'ici---objet converti en tableau'.'</br>';
                                      var_dump ($array).'</br>'; 

                                        for ($i=0;$i<=4;$i++)
                                        {
                                        // $i=2;
                                          foreach ($this->Register[$i] as $person=>$value)
                                              {
                                                print "$person=>$value".'</br>';    
                                              }
                                        echo '--------------------------------------------------------------------'.'</br>';
                                        }
                                     return 0 ;
                                    }  
                                }

?>                              