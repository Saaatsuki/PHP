<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    // 関数getCircleAreaを定義
    function getCircleArea($radius) {
      return $radius * $radius * 3;
    }

    // 戻り値を変数に代入
    $circleArea = getCircleArea(5);

    // 結果を出力
    echo $circleArea;

  ?>

</body>
</html>
