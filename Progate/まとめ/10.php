<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// この下にコードを書いてください
for ($i = 0; $i < count($menus); $i++) {
  echo "{$menus[$i]['name']}は{$menus[$i]['price']}円です<br>";
}

// 合計金額を計算
$sum = array_sum(array_column($menus, 'price'));
echo "合計金額は{$sum}円です";
?>
