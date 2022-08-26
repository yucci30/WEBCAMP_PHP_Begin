<?php
$array = [
    "key1" => "Red",
    "key2" => "yellow",
    "key3" => "Green",
    "key4" => "Blue",
    "key5" => "Black",
    ];
    
    foreach( $array as $coler){
        echo"{$coler}\n";
    }
    
    $colors = [
    "Red",
    "Yellow",
    "Green",
    "Blue",
    "Black",
];
//
foreach($colors as $v) {
    echo "{$v} \n";
}

//連想配列
$coler = [
    "Red" => "#ff0000",
    "Yellow" => "#ffff00",
    "Green" => "#00ff00",
    " Blue" => "#0000ff",
    "Black" => "#000000",
    ];
    
//foreachで処理
foreach($coler as $k => $v) {
    echo "{$k}:{$v} \n";
}





















