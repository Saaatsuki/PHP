<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php
    // 連想配列を作成
    $scores = array(
      '数学' => 70,
      '英語' => 90,
      '国語' => 80
    );

    // '国語' に5を足す
    $scores['国語'] += 5;

    // '国語' を表示
    echo $scores['国語'];
  ?>

</body>
</html>
