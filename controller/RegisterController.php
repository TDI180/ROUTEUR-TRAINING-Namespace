<?php

class RegisterController extends BaseController

{
    private $Model;
	private $RegisterModel;
    private $kebab;  
    private $honda; 
   
   // public function __construct() {}

              public function Register()
						   {                               
                            $this->kebab=new RegisterModel("mvc","register"); //Instanciation of the MODEL and no connexion to DATABASE                               
                            ob_start(); //fill the view                               
                            $this->kebab->AllRegisterPerson(); 
                           //$this->kebab->rownumber();                           
              $contentView=ob_get_clean();//Opening the buffer to store all output from forum-model
                            //var_dump($contentView);                                 
                            $this->View("Register","","","Register",$contentView);// ($filename,$login,$pass,$titre,$contenu)                              
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