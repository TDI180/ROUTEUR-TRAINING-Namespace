<div class="error">
    
	<h1>Une erreur s'est produite Bobby</h1>
	<div class="error-message">Message : <?= $a->getMessage().'</br>'; ?></div>
	<div class="error-stack">Pile d'execution : <?= $a->getTraceAsString().'--------->>>>>----</br>'; ?></div>
   

    <?php if(method_exists($a,"getMoreDetail")){ ?>
        <h1>============la methode existe========></h1>
        <div class="error-detail">DETAIL OF ERROR====><?=$a->getMoreDetail().'</br>'; ?></div>
        <div class ="">=========error====><?=$a->getCode().'</br>';?></div>
    <?php } ?>

</div>