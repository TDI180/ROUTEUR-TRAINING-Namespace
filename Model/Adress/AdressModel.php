<?php
       class AdressModel extends BaseManager
                                {

                                    public function __construct($name,$table)
                                                    {
                                                     parent::__construct($name,$table);
                                                    }     



                                    public function Injection()
                                    {
?>
                                           <p>ADRESSE---->INJECTION DE DEPENDANCES</p>   
                                           <p>COURSE ABOUT DEPENDANCY INJECTION</p>      
<?php 
                                          return 0;
                                    }
                                }
?>                              