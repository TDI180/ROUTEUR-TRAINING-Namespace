<?php

class AdressController extends BaseController

{
    private $Model;
	  private $AdressModel; 
    private $kebab;
   //public function __construct() { }; 

                    public function Adress()
						              	{
                              $this->kebab=new AdressModel('notable','nodatabase');
                              ob_start(); //fill the view                                  
                                $this->kebab->Injection();
                              $contentView=ob_get_clean();
                                //Opening the buffer to store all output from forummodel
                                                              
                                $this->View("Adress","","","Adress",$contentView);
                                // ($filename,$login,$pass,$titre,$contenu)                              
                                return 0;
                            }

                    public function getName(){
                        echo 'welcome'. $this->Model.'</br>';
                        return 0;
                      }	
                    public function setName(){
                        echo 'welcome'.$this->Model="KEBAB".'</br>';
                        return 0;	
                      }			


}