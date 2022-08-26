<?php
//要素の１つの配列を作成
$awk = [ 123 ];
var_dump($awk);

//要素３つの配列を作成
$awk2 = [ 999, "Hello", 3.14 ];
var_dump($awk2);

//$awk に要素を追加
$awk[] = 1.41421356;
$awk[] = "string value";
var_dump($awk);