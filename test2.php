<?php

$test = file_get_contents('README.md');
//var_dump($test);
$res = '';
if(preg_match('#^(.*?)$#us',$test,$match)){
  $res = $match[1];
}

var_dump($res);

?>
