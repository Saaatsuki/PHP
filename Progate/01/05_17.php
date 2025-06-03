<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $str = 'progate';

    // strlenを用いて$strの長さをecho
    echo strlen($str); // 結果: 7

    echo '<br>';

    $array = array('HTML', 'CSS', 'PHP');

    // countを用いて$arrayの要素数をecho
    echo count($array); // 結果: 3

    echo '<br>';

    // randを用いて10から15までのランダムな数字をecho
    echo rand(10, 15);

  ?>

</body>
</html>
