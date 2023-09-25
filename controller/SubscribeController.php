<?php

class SubscribeController extends BaseController

{
    private $Model;
	private $SubscribeModel;
    private $sub;   
    private $kebab;  
   // public function __construct() {}

              public function Subscribe()
						               {                               
                            $this->sub=new SubscribeModel("mvc","Register"); //Instanciation of the MODEL and no connexion to DATABASE                               
                            ob_start(); //fill the view                               
                           //$this->sub->SubscribeModel();
                          // $this->sub->AllRegisterPerson();                            
              $contentView=ob_get_clean();//Opening the buffer to store all output from forum-model
                            //var_dump($contentView);                                 
                            $this->View("Subscribe","","","Subscribe",$contentView);// ($filename,$login,$pass,$titre,$contenu)                              
                            return 0;
                                       }

              public function Insert (){
                            $this->ins=new SubscribeModel("mvc","Register"); //Instanciation of the MODEL and no connexion to DATABASE                               
                            ob_start(); //fill the view  
                            $this->ins->InsertModel();
                            
                            $contentView=ob_get_clean();   
                            $this->View("SubscribeViewInsert","","","SubscribeViewInsert",$contentView);                         
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