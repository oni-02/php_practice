<?php

function sum($max) {
    
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);
echo "\n";

$string = "ABCDEF";
echo strlen($string);
echo "\n";

function number($double) {
    
    
    $double *= 2;
    return $double;
}
echo number(8);
echo "\n";

function c($a,$b) {
    
    return $a + $b;
    
}
echo c(5,3);
echo "\n";

function a() {
    
    $arr = array(1, 3, 5 ,7, 9);
    return "product(arr) = " . array_product($arr)."\n";
    
}
echo a();

 
 
 
 
 $str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除くよっ！</p>";
echo strip_tags($str,"<p>") ."\n";

$furutsu = array("いちご","ぶどう","なし");
array_merge($furutsu,"みかん","柿");
print_r($furutsu);

 function max_array($arr) {
  // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
        //どうしたらいいかわからない・・・・
        if ($max_number < $a) {
            $max_number = $a;
        }
     }
    
     return $max_number;
 }
 
 $test_array = [1,30,5,7,9];
 $max_array_result = max_array($test_array);
 
 print_r($max_array_result);
 echo "\n";
 