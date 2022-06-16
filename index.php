<?php 
require_once 'iFile.php';
require_once 'File.php';
require_once 'tag.php';

$file = new File('index.php');

echo $file->getPath().'<br>';
echo $file->getDir().'<br>';
echo $file->getExt().'<br>';
echo $file->getName().'<br>';
echo $file->getSize().' байт'.'<br>';

echo $file->getText();
	$img = new Tag('img');
	echo $img->open().''.$img->close(); 

	$header = new Tag('header');
	echo $header->open().'header сайта'.$header->close();
?> 