<?php

	class UserManager extends BaseManager
	{
		public function __construct($database,$table)
		{
			//$configFileUser = file_get_contents("Config/config.json");
	        //$configUser = json_decode($configFileUser,true);		
			parent::__construct($database,$table);
			/*foreach ( $configUser['autoloadFolder'] as $zebi) 
			{
				echo "Valeur courante de config->autoloadfolder===". $zebi."</br>";
			}
			
			echo '---------------------------------------------------------'."</br>";

			/*foreach ($arrayOfObjs as $key => $object) {
				echo $object->object_property;
			}*/

			/*foreach ( $configUser['database'] as $zebikbir) 
			{
				echo "Valeur courante de config->database===". $zebikbir."</br>";
			}
			
			echo '-------name---------'.$config['database']['name'].'--------------------'.'</br>';
			echo '-------dbname-------'.$config['database']['dbname'].'------------------'.'</br>';
			echo '-------host---------'.$config['database']['host'].'--------------------'.'</br>';
			echo '-------user---------'.$config['database']['user'].'--------------------'.'</br>';*/
					
		}

        public function getByMail($email)
		   {
			 //echo '-----voila l email---->'.$email.'</br>';
			 $reket = $this->_bdd->prepare('SELECT pwd FROM customer WHERE mail= ?');
			 $reket->execute([$email]);
			 $user = $reket->fetch();

				/* echo '---$user[pwd]---->'.$user['pwd'].'.......'.'</br>';
				 echo '---$user[0]------>'.$user[0].'.......'.'</br>';
				 var_dump($user);*/	

			 $stmt = $this->_bdd->query('SELECT mail FROM customer');	
			 while ($row = $stmt->fetch())
					{
					  echo $row['mail'] .'</br>';
					}
			 
			 return $user['pwd'];		 
			 
	    	}

			/*public function RowCount ()
                             {
                              $reket = $this->_bdd->prepare("SELECT * FROM ".$this->_object);
                              $reket = $this->_bdd->execute();
                             // echo "Number of Columns : ". $count->columnCount();
                              echo "------>testROWCOUNT";
                              return 0 ;
                             }     */  

			public function InsertnewBoy ($Login,$pass,$date,$email)
			 {	
				 echo $_POST['LOGIN']."<br>";
                 echo $_POST['PASS']."</br>";  
                 echo date("l jS \of F Y h:i:s A")."<br>";
				 echo $_POST['EMAIL']."</br>";				 
				 $date = new DateTime();
				// echo $date."</br>";
                 $result = $date->format('Y-m-d H:i:s')."</br>";
                 echo $result."</br>";
				 $sql="INSERT INTO `register`(`Login`,`pass`,`email`) 
				 VALUES ('".$_POST['LOGIN']."','".$_POST['PASS']."','".$_POST['EMAIL']."')";				

		        $stmt=$this->_bdd->prepare($sql);				
		        $stmt->execute();

		/*$sql="INSERT INTO `register`(`Login`, `pass`, `date`, `email`) 
		VALUES ($_POST['LOGIN'],$_POST['PASS'],'25/07/2023',$_POST['EMAIL'])";		
	     $stmt=$this->_bdd->prepare($sql);
	     $stmt->execute(['Login','pass','date','email']);*/

			  return 0;
		 	 }

		public function getALL_Article_Forum ($name,$table)
		{
			//echo "je suis dans la fonction-test dans user-manager"."</br>";
			//parent:: test_base_manager ($name,$table);
			parent::getAll();
			//var_dump (parent::getAll());
			return parent::getAll();
		}

       /* public function RowCount ()		
						{
						$reket = $this->_bdd->prepare("SELECT * FROM ".$this->_object);
                        $reket = $this->_bdd->execute();
                        echo "Number of Columns : ". $count->columnCount();	
						return 0 ;				
						//return parent ::RowCount ();	
						}*/


	}




