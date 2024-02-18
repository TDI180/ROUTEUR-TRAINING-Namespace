<?php
namespace Forum;
use BaseController as B;

class ForumController extends B\BaseController
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
							  $contentView="null";					  
							                ob_start();							                                                             
												  $test=new article_forum($content_forum);										
							                      $content_article=$test->articles();//fill the view 
												   $test="honda";
							  $contentView=ob_get_clean();//Opening the buffer to store all output from 
							  

							  if ( $contentView!=="null") { $this->View("Forum","","","FORUM",$contentView);}
							  									 
							  $this->View("Forum","","","FORUM",$contentView);
							   //if forumControlled not called --> the view forum don't receive $contentView
							  //call the view (function-baseController) with the contentView stored in the buffer.
							  //$this->View("Name","","","NAME",$contentView);							
							  return 0;
							}

					public function getName() {
											                                 echo 'welcome'. $this->Model.'</br>';
											                                 return 0;
										                                    }	

					public function setName()
					                                                        {
											                                 echo 'welcome'.$this->Model="KEBAB".'</br>';
											                                 return 0;	
										                                	 }								 			
					}

