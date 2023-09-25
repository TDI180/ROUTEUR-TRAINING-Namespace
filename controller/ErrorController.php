<?php
	class ErrorController 
	{

		private $_conf;
		private $_httpRequest;
		public function __construct($httpRequest,$config)
		{
			 $this->_conf=$config;
			 $this->_httpRequest=$httpRequest;
		}
		
		public function Show($exception)
		{
			//var_dump ($exception);
			echo '</br>';
			$this->addParam("exception",$exception);
			$this->view($exception);	
			echo '------------------------SHOW--------------------------------'.'</br>';
			//$this->zebi();		
			//echo $exception->getMessage().'</br>'; 			
			//echo $exception->getTraceAsString().'</br>';
			//include "view/error/error.php";
		   
		}

		public function view ($a)
		{
			echo '------------------------VIEW--------------------------------'.'</br>';
			//var_dump ($a);
			//echo $a->getMessage().'</br>';
			//echo $a->getTraceAsString().'</br>';
			//echo  $_SERVER['REQUEST_URI'] ;

			//var_dump($this->_conf).'</br>';
			//var_dump($this->_httpRequest).'</br>';
			include "view/error/error.php";
	
		}

		public  function addParam($z,$a) {
											echo $z.'</br>';	
										 }

		}



