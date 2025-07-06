<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>標準偏差</title>
</head>
<body>
    <form action="index03.php" method="post">
        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<label for='num{$i}'>Sample value #{$i} </label>";
                echo "<input type='number' id='num{$i}' name='num{$i}' required><br>";
            }
        ?>
        <br>
        <button type="submit">계산（計算）</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            echo "<p><strong>인력 값 : </strong> ";
            $num_sum = 0;
            $values = [];

            for ($i = 1; $i <= 5; $i++) {
                $value = (float)$_POST["num{$i}"];
                $num_sum += $value;
                $values[] = $value;
                echo "{$value} ";
            }
            echo "</p>";

            // 平均
            $avg = round($num_sum / count($values), 2);
            echo "<p><strong>평균 : </strong>{$avg}</p>";

            // 分散
            $variance_sum = 0;
            foreach ($values as $v) {
                $variance_sum += pow($v - $avg, 2);
            }
            $variance = $variance_sum / count($values);
            echo "<p><strong>분산 : </strong>" . round($variance, 2) . "</p>";

            // 標準偏差
            $std_dev = sqrt($variance);
            echo "<p><strong>표준편차 : </strong>" . round($std_dev, 2) . "</p>";
        }
    ?>
</body>
</html>
