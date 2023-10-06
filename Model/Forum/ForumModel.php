<?php
//namespace Forum;
class ForumModel extends BaseManager
                                {
                                    public function __construct($name,$table)
                                                    {
                                                    // $configFileUser = file_get_contents("Config/config.json");
                                                    // $configUser = json_decode($configFileUser,true);		
                                                     parent::__construct($name,$table);
                                                    // $this->Forum_Article=parent::getALL();
                                                    
                                                    //parent::__construct($name,$table);
                                                    //$this->Forum_Article=parent::getALL_Article_Forum($name,$table,"");
                                                    }
                                    private $Forum_article;                     

                                    public function zebi ()
                                            {
                                                ob_start();
                                                echo 'ForumModel'.'<br/>';
                                                $now = time();
                                                $end = $now + 600;
                                                setcookie('debut', $now, $end);
                                                echo time()."</br>"; 
                                                $zebi=ob_end_flush();
                                                return $zebi;
                                            }

                                    public function article()
                                                  {                                                 
                                                    $this->Forum_Article=parent::getALL(); 
                                                   // var_dump($this->Forum_Article);
                                                    return $this->Forum_Article;
                                                  }
                                }

 class article_forum 
{
    public function __construct($content)

		{
       $this->article=$content; 
     /*echo '-------------------';
     var_dump($this->article);
     echo '-------------------';*/
    }

     public $article;

     public  function articles ()
     
     {  ?>
            
            <h1>FORUM</h1>
      <?php
     
      for ($i=0;$i<4;$i++) 
              {        
              ?>               
                  <h3>TITRE:::::><?=$this->article[$i]->titre?></h3>
                  <h4>date::::::><?=$this->article[$i]->datetime?></h4>
                  <p>contenu::::><?=substr($this->article[$i]->contenu,0,400)."........suite--ici"?></p>
              <?php                                                                                                                
              } 
      return 0 ;
     }
}

                               