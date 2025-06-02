<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 配列を作る
    $colors = array('赤', '青', '黄');

    // 最初の要素を出力
    echo $colors[0]; // 赤

    // 要素を追加
    $colors[] = '白';

    // 最後の要素（白）を出力
    echo $colors[count($colors) - 1]; // 白

  ?>

</body>
</html>
