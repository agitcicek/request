<?php 

$url = isset($_GET['url']) ? $_GET['url'] : false;

if($url){
  echo $url;
}else{
  echo 'empty';
}
