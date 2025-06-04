<?php
$menus = array(
  array('name' => 'CURRY', 'price' => 900),
  array('name' => 'PASTA', 'price' => 1200),
  array('name' => 'COFFEE', 'price' => 600)
);

// 商品一覧の表示
for ($i = 0; $i < count($menus); $i++) {
  echo "{$menus[$i]['name']}は{$menus[$i]['price']}円です<br>";
}

// 合計金額の計算
$sum = array_sum(array_column($menus, 'price'));
echo "合計金額は{$sum}円です<br>";

// 最高価格の取得
$max = max(array_column($menus, 'price'));

// 最高価格の商品名を探す
$maxName = '';
foreach ($menus as $menu) {
  if ($menu['price'] === $max) {
    $maxName = $menu['name'];
    break; // 見つかったらループ終了
  }
}

echo "{$maxName}が最高価格で{$max}円です";
?>
