<?php
       class RegisterModel extends BaseManager
                                {
                                    public function __construct($name,$table)
                                    {                                    	
                                     parent::__construct($name,$table);  
                                     echo 'I am in '.__CLASS__.'</br>';                                 
                                    }

                                    private $Register; 
                                    private $honda;

                                  /*  public function Register()
                                    {
                                        ?>
                                           <p>HERE---ALL---REGISTERED---PERSON</p>     
                                        <?php 
                                          return 0;
                                    }*/

                                    public function test()		
                                    {                                      
                                       echo "test-count"."</br>";
                                       return 0 ;
                                    }

                                    public function rownumber()		
                                    {                                      
                                       $this->honda=parent::RowCount();
                                       return $this->honda ;
                                    }

                                    public function RegisterModel()
                                    {                                                 
                                  ?>
                                           <p>OK--->HERE---getALL---REGISTERED---PERSON</p>     
                                  <?php                                      
                                      $this->Register=parent::getALL(); 
                                      var_dump($this->Register=parent::getALL());
                                      return $this->Register;
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

                                     // echo "=====>". self::rownumber()."</br>";	

                                    for ($i=0;$i<=self::rownumber()-2;$i++)
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