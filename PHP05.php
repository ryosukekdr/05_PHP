<?php
$name = "Ryosuke";
if($name == "Ryosuke"){
    echo "私は" . $name . "です";
}
else{
    echo "Ryosukeではありません";
}
echo "\n";


$total = 0;
for ($i = 0; $i<=10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";


$fruits = array("ぶどう", "梨", "バナナ", "リンゴ", "マンゴスチン");
foreach($fruits as $favorite){
    echo $favorite;
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