<?php
   namespace  Home;
   use BaseController as B ;
   class HomeController extends B\BaseController
					{
						public function Home()
						{
							$this->view("home","","","HOME","");	
						}

						/*public function Login() // action
						{
							$this->View("Login","","");
							//echo 'LOGIN--LOGIN'.'</br>' ;
						}*/
					}


					
