<?php
	require_once 'image.php';
	$img = (new Image())->setAttrs(['src' => 'img.png', 'width' =>'300', 'height'=>'200']);
	echo $img->open();
	require_once 'Link.php';
	require_once 'menu.php';
	echo $link1. ' '. $link2.' ' . $link3. ' '. $link4. ' '. $link5."<br>";
?> 