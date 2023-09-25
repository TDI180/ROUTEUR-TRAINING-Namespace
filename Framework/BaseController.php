<?php
//namespace Forum;
//include ("Exception/ViewNotFoundException.php");

class BaseController
{
	private $_httpRequest;
	private $_param;
	private $_config;
	private $_FileManager;
	
	public function __construct($httpRequest,$config)
	{
		$this->_httpRequest = $httpRequest;
		$this->_config = $httpRequest;
		$this->_param = array();
		$this->addParam("httprequest",$this->_httpRequest);
		$this->addParam("config",$this->_config);
		//$this->bindManager();
		$this->_FileManager = new FileManager();
	}
	
	protected function view($filename,$login,$password,$TitleView,$contentView)
	{
		//echo '$this->_httpRequest->getRoute()->getController()'.'</br>';
		//echo $this->_httpRequest->getRoute().'</br>';
		//echo $this->_httpRequest->getRoute()->getController().'</br>';
		//echo $contentView;
	if(file_exists("View/".$this->_httpRequest->getRoute()->getController()."/css/".$filename.".css"))
		{
			$this->addCss("View/".$this->_httpRequest->getRoute()->getController()."/css/".$filename.".css");
		}
		if(file_exists("View/".$this->_httpRequest->getRoute()->getController()."/js/".$filename.".js"))
		{
			$this->addJs("View/".$this->_httpRequest->getRoute()->getController()."/js/".$filename.".js");
		}
		if(file_exists("View/".$this->_httpRequest->getRoute()->getController()."/".$filename.".php"))
		{
		
			                ob_start();			  
				             echo $this->_FileManager->generateCss();
				             echo $this->_FileManager->generateJs();	
			$content_CSS_JS=ob_get_clean();
			
		include("View/layout.php");
		include("View/".$this->_httpRequest->getRoute()->getController()."/".$filename.".php");
						
		}
		else  {	//throw new ViewNotFoundException();
			      new ViewNotFoundException();
		      }
		//include("View/layout.php");
		//include("View/" . $this->_httpRequest->getRoute()->getController() . "/" . $filename . ".php");  

	}

	protected function viewFooter($contentFooter)
									{
	                            	 include("View/FOOTER.php");
	                                }
	
	public function addJs($file)
	{
		$this->_FileManager->addJs($file);
		//$this->_FileManager->generateJs();
	}

	public function bindManager()	// 
	{	
      //  echo '-----------$this->_httpRequest->getRoute()->getManager()---------//'.'</br>';
	//	var_dump ($this->_httpRequest->getRoute()->getManager()); //return empty
		foreach($this->_httpRequest->getRoute()->getManager() as $manager)
		{
			//$this->$manager = new manager($this->_config->database);// class new manager () not defined
			//var_dump ($this->$manager = new manager($this->_config->database));
		}
	}
	
	public function addParam($name,$value)
	{
		$this->_param[$name] = $value;
	}

    public function addCss($file)
		{
			$this->_FileManager->addCss($file);

		}
}


	