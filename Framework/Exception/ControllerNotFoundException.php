<?php
Namespace NoControl;
class ControllerNotFoundException  extends \Exception // EXTENDS  class PHP Exception 
	{
		public function __construct($message ="class____controller______not______found")
		{
		   parent::__construct($message, "0003"); // CALL OF THE CLASS Exception
		}
	}