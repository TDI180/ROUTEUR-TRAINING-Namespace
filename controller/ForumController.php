<?php
//namespace Forum;

class ForumController extends BaseController
					{	
					private $Model;
					private $ForumModel;
					//public function __construct()
					//{return 0;}
					
					public function Forum()
							{
							  $this->ForumModel=new ForumModel("blog","article");	//construct-the-view--Call the model										
							 // $this->ForumModel=new ForumModel("blog","article");
							  $content_forum=$this->ForumModel->article();//content of the view
							 	
							  ob_start();
							  $test=new article_forum($content_forum);										
							  $content_article=$test->articles();//fill the view 
							  $contentView=ob_get_clean();//Opening the buffer to store all output from forummodel
							  									 
							  $this->View("Forum","","","FORUM",$contentView); 
							  //call the view (function-baseController) with the contentView stored in the buffer.
							  //$this->View("Name","","","NAME",$contentView);							
							  return 0;
							}

					public function getName(){
											   echo 'welcome'. $this->Model.'</br>';
											   return 0;
										     }	
					public function setName(){
											   echo 'welcome'.$this->Model="KEBAB".'</br>';
											   return 0;	
											 }								 			
					}

