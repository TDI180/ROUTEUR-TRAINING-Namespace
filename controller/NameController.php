<?php

class RegisterController extends BaseController

{
    private $Model;
	  private $NameModel;
    private $kebab;   
   
   // public function __construct() {}

            public function Register()
						  {
                               
                            $this->kebab=new RegisterModel('notable','nodatabase'); //Instanciation of the MODEL and no connexion to DATABASE                               
                            ob_start(); //fill the view                               
                            $this->kebab->RegisterModel();
               $contentView=ob_get_clean();//Opening the buffer to store all output from forum-model
                                                              
                            $this->View("Name","","","Name",$contentView);// ($filename,$login,$pass,$titre,$contenu)
                              
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