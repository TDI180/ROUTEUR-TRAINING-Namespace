<?php
	class BDD
	{
		private $_bdd;
		private static $_instance;
		
		public static function getInstance($datasource,$database,$table)
		{
			if(empty(self::$_instance))
			{
				self::$_instance = new BDD($datasource,$database,$table);
			}
			return self::$_instance->_bdd;;
		}

		private function __construct($datasource,$database,$table)
		{
			//var_dump ($datasource);			
			//echo $datasource->dbname ;
		   //echo '-----name-----------'.$datasource['database']['name'].'--------------------'.'</br>';
			//$this->_bdd = new PDO('mysql:dbname='.$datasource['database']['name'].';host=' .$datasource['database']['host'],$datasource['database']['user'], $datasource['database']['password']);
			try {
							
				$this->_bdd = new PDO('mysql:dbname='.$datasource['database-'.$database]['name'].';port=3306;charset=utf8mb4;host=' .$datasource['database-'.$database]['host'],$datasource['database-'.$database]['user'], $datasource['database-'.$database]['password']);
				$sql='SELECT * from '.$table;
				$sth = $this->_bdd ->prepare($sql,[PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
			    
				foreach($this->_bdd->query($sql) as $row) {
															//echo'-------'.$row.'-------'.'</br>';
															//print_r ($row['mail']).'</br>';											
															//echo '---login---->'.$row['mail'].'---password----->'.$row['pwd'].'</br>';
														  }                                               
			   }
			catch (PDOException $e)
			{
				print "Erreur !:". $e->getMessage() . "<br/>";
                die();
			}
			//$this->_bdd = new PDO('mysql:host='.$datasource->host.';dbname='.$datasource->dbname,$datasource->user,$datasource->password);
		}
	}

