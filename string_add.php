<?php
/*　文字列の場合*/
//元ネタ
$string_1 = "Hello";
$string_2 = "world.";

//.（ドット)を使った結合
$string_dot = $string_1 . $string_2 . "\n";
echo $string_dot;

//ダブルクォートを使った変数展開
$string_dquote = "{$string_1}{$string_2}\n";
echo $string_dquote;