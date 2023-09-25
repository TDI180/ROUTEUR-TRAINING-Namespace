<?php
           // $configFile = file_get_contents("Config/config.json");
            //$config = json_decode($configFile);
//var_dump ($config );

class UserController extends BaseController
{ 
    public function login() // action
    {
        $this->View("login","","","LOGIN","");
        return 0;
    }
    
    public function authenticated()
    {
      if($_POST['log']==='') {echo '--------->>ENTER LOG PLEASE'.'</br>';}
      else 
      {      
            if (isset ($_POST['log']))
            {
                echo  "log---->".$_POST['log'].'</br>';               
                $this->View("authenticated","","","AUTHENTICATED","");
              // you need to instanciate the class UserManager!!! 
                $r=new UserManager("mvc","customer");//__construct($database,$table)      
                $zebi=$r->getByMail($_POST['log']).'</br>';
                echo'.............voila le password............:!!   '.$zebi.'</br>';
               
                //unset ($_POST['log']);
                //unset ($_POST['pass']);
            }            
        }         
        
      // ECHO 'zebi---kbir';
      return 0;
    }

}