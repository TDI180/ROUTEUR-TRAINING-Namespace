<?php

		class BaseManager 
        {
            private $_table;
            private $_object;
            protected $_bdd;
            private $_datasource; 
            
            public function __construct($database,$table)
            {               
                echo 'I am in '.__CLASS__.'</br>';
                $this->_table = $database;
                $this->_object = $table;
              
               /* echo '------$table-------';
                var_dump($this->_object);
                echo '------$database-------';
                var_dump($this->_table);
                echo '------$datasource-------';

                var_dump ($datasource);
                echo '------$this->BDD------';*
                echo '-------$this->_table----->'.$this->_table.'</br>';
                echo '-------$this->_object---->'.$this->_object.'</br>';

                var_dump(isset($this->_table));
                var_dump(isset($this->_object));*/

                if ($this->_table!=='notable' && $this->_object!=='nodatabase') 
                {

                    $configFileUser = file_get_contents("Config/config.json");
                    $this->_datasource= json_decode($configFileUser,true);	        
                    $this->_bdd = BDD::getInstance($this->_datasource,$database,$table); 
                    // creation de la base de donnée ou verification de son existence
                    //dont forget , the autoloader loads the BDD Throught Framework/BDD.php
                    //var_dump ($this->_bdd)."</br>";  
                    //unset($this->_table); 
                    //unset($this->_object);                     
                }  
               
            }
            
            public function getById($id)
            {
                $req = $_bdd->prepare("SELECT * FROM " . $this->_table . " WHERE id=?");
                $req->execute(array($id));
                $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$this->_object);
                return $req->fetch();
            }
            
            public function getAll()
            {
                $req = $this->_bdd->prepare("SELECT * FROM " .$this->_object);
                $req->execute();
               // $req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,$this->_object);
                $req->setFetchMode(PDO::FETCH_OBJ);
                //$req->setFetchMode(PDO::FETCH_COLUMN,4);
                return $req->fetchAll();                
            }

            public function RowCount()
                        {
                          $reket = $this->_bdd->prepare("SELECT * FROM ".$this->_object);
                          $reket->execute();
                           // echo "Number of Columns :--->".$reket->columnCount()."</br>";
                           // echo "Number of Columns :--->".$reket->rowCount()."</br>";                                  
                          return $reket->rowCount();                           
                        }   

            public function test_base_manager ($table,$name)
            {

                echo "okok---> je suis dans base-manager"."</br>";
                echo $table."</br>";
                echo $name."</br>";
            }

            
            public function create($obj,$param)
            {
                $paramNumber = count($param);
                $valueArray = array_fill(1,$param_number,"?");
                $valueString = implode($valueArray,", ");
                $sql = "INSERT INTO " . $this->_table . "(" . implode($param,", ") . ") VALUES(" . $valueString . ")";
                $req = $_bdd->prepare($sql);
                $boundParam = array();
                foreach($param as $paramName)
                {
                    if(property_exists($obj,$paramName))
                    {
                        $boundParam[$paramName] = $obj->$paramName;	
                    }
                    else
                    {
                        throw new PropertyNotFoundException($this->_object,$paramName);	
                    }
                }
                $req->execute($boundParam);
            }
            
            public function update($obj,$param)
            {
                $sql = "UPDATE " . $this->_table . " SET ";
                foreach($param as $paramName)
                {
                    $sql = $sql . $paramName . " = ?, ";
                }
                $sql = $sql . " WHERE id = ? ";
                $req = $_bdd->prepare($sql);
                
                $param[] = 'id';
                $boundParam = array();
                foreach($param as $paramName)
                {
                    if(property_exists($obj,$paramName))
                    {
                        $boundParam[$paramName] = $obj->$paramName;	
                    }
                    else
                    {
                        throw new PropertyNotFoundException($this->_object,$paramName);	
                    }
                }
                
                $req->execute($boundParam);
            }
            
            public function delete($obj)
            {
                if(property_exists($obj,"id"))
                {
                    $req = $_bdd->prepare("DELETE FROM " . $this->_table . " WHERE id=?");
                    return $req->execute(array($obj->id));
                }
                else
                {
                    throw new PropertyNotFoundException($obj,"id");	
                }
            }
        }