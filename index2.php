<?php 
$animal['favorite'] = 'dog';
$animal['dislike'] = 'cat';
$animal['have'] = 'hamster';

$animal2 = array('favorite' => 'dog','dislike' => 'cat','have' => 'hamster');

$animal3[] = 'dog';
$animal3[] = 'cat';
$animal3[] = 'hamster';

$pref['tokyo']['shinjyuku']['restaurant'] = 'おはじき';
$pref['tokyo']['shibuya']['restaurant'] = '鳥貴族';
$pref['tokyo']['ikebukuro']['restaurant'] = 'サイゼリヤ';


$pref['tokyo']['shinjyuku']['hotel'] = 'パークハイアット';



//困ったらこれやれ
echo "<pre>";
var_dump($pref);


?>
