<?=ExtendsView::extend('navBar')?>

<?php $title = $post->name; ?>

<? if(isset($post)):?>

     <h1>Product numero <?=$post->id?></h1>


<? endif;?>


