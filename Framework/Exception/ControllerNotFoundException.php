<?php
	class ControllerNotFoundException extends Exception 
	{
		public function __construct($message ="class____controller______not______found")
		{
		   parent::__construct($message, "0003");
		}
	}