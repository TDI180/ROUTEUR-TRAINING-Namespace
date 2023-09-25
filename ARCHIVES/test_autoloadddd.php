	
	<?php
	
	    class zebi {
                       public  function tazz()
   					                                    { echo "zebi kbir ";}
	                 }

		function __autoload($classname)
															{
																echo "autoload $classname<br />";
																
																include( $classname."php");
															}
															
		spl_autoload_register("__autoload");
		
		echo "new zebi<br />";
		
		$foo = new zebi();
		$foo->tazz();
		$foo33 = new zebi33();
		
	?>
	