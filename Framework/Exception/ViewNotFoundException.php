<?php

 class ViewNotFoundException extends \Exception
    {

        private $_httpRequest;
		
		public function __construct()
		{
			echo "zebi wesh------------------------->PAS DE VUE ?????";
		}
		
		public function getMoreDetail()
		{
			return 0;
		}
       
    }