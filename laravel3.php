<?php
$name="鬼塚　恵";

if ($name = "鬼塚　恵") {
   echo "あなたの名前です";
} else {
    echo"あなたの名前ではありません";
}
echo"\n";
$totale=0;
for($a = 0; $a <= 10000; $a++){
    $totale += $a;
}
echo $totale;
echo"\n";

$fruits=array("りんご","みかん","バナナ","いちご","なし");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
