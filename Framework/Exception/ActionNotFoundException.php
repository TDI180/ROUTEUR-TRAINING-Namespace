<?php
Namespace NoAction;
class ActionNotFoundException  extends \Exception // EXTENDS  class PHP Exception 
	{
		public function __construct($message =" Action not Found")
		{
		   parent::__construct($message, "0004"); // CALL OF THE CLASS Exception
		}
	}