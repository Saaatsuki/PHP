<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
  ?>

  <!-- この下で$xの計算をしていきましょう -->
  <?php
    echo $x += 10;
    
  ?>

  <br>

  <!-- この下で$yの計算をしていきましょう -->
  <?php
    echo $y *= 5;
    
  ?>

  <br>

  <!-- この下で$aの計算をしていきましょう -->
  <?php
    echo $a += 1;
    
  ?>

  <br>
  
  <!-- この下で$bの計算をしていきましょう -->
  <?php
    echo $b -= 1;
    
  ?>

</body>
</html>
