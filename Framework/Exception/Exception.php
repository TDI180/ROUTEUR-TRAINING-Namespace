<?php
	class MultipleRouteFoundException extends Exception
	{
		public function __construct($message = "More than 1 route has been found")
		{
			parent::__construct($message, "0001");
		}
	}


    class NoRouteFoundException extends Exception
	{
		public function __construct($message = "No----route---has----been----found")
		{
			parent::__construct($message, "0002");
		}
	}

	class ControllerNotFoundException extends Exception
	{
		public function __construct($message = "class------controller----not----found")
		{
			parent::__construct($message, "0003");
		}
	}
