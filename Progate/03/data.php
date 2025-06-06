<?php
// menu.phpの読み込みを削除してください

// drink.phpとfood.phpを読み込んでください
require_once('drink.php');
require_once('food.php');

// $juiceをDrinkクラスのインスタンスとしてください
$juice = new Drink('JUICE', 600, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png');
// $coffeeをDrinkクラスのインスタンスとしてください
$coffee = new Drink('COFFEE', 500, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/coffee.png');
// $curryをFoodクラスのインスタンスとしてください
$curry = new Food('CURRY', 900, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png');
// $pastaをFoodクラスのインスタンスとしてください
$pasta = new Food('PASTA', 1200, 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/pasta.png');

$menus = array($juice, $coffee, $curry, $pasta);

?>