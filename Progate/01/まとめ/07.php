<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo '<br>';
echo '-----';
echo '<br>';

// この下にコードを書いてください
$total = array_sum($prices);
echo "合計金額は{$total}円です"."<br>";

$max = max($prices);
echo "最高価格は{$max}円です";
?>
