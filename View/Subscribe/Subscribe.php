<?php
   //include("View/layout.php");
  //echo $content_view_forum;
 // echo $contentView;
 ?>

 <div class="container">

    <div class="jumbotron">
    <h1>TRAINING Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>

</div>

<div class="container">
                <div class="jumbotron">
                       <p>YOU CAN SUBSCRIBE DUDE !</p>  
                       <div class="container">
     <div class="jumbotron">

         <form class="login-form" action="http://training/Insert" method="post"> 
	
	       <label> SUBSCRIBE </label>.<br>
           LOGIN...<input type="text" name="LOGIN"/><br>
	         PASS.....<input type="text" name="PASS"/><br>          
            EMAIL....<input type="text" name="EMAIL"/><br>
	         ..............<input type="submit" value="Se connecter" />
	
        </form>

     </div>
</div> 
                        <?php echo $contentView;?>
                </div>    
</div>

</body>
</html>