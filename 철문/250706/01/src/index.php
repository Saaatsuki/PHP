<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>光の到達時間計算フォーム</title>
    <link rel="stylesheet" href="01.css">
</head>
<body>
    <h2>🌞 太陽から惑星までの光の到達時間を計算</h2>
    
    <form action="index.php" method="post">
        <label for="planet">惑星（Planet）を選んでください:</label><br><br>
        
        <select name="planet" id="planet" required>
            <option value="수성">수성（水星）</option>
            <option value="지구">지구（地球）</option>
            <option value="화성">화성（火星）</option>
        </select>
        
        <br><br>
        <button type="submit">計算する</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $planet = $_POST['planet'];

        switch ($planet) {
            case '수성':
                $distance = 57900000;
                $planet_ja = "水星";
                break;
            case '지구':
                $distance = 150000000;
                $planet_ja = "地球";
                break;
            case '화성':
                $distance = 230000000;
                $planet_ja = "火星";
                break;
            default:
                echo "<p>❌ 未知の惑星です。</p>";
                exit;
        }

        $time_minutes = round(($distance / 300000) / 60, 2);

        echo "<p>☀️ 太陽から <strong>{$planet_ja}</strong> までの光の到達時間は <strong>{$time_minutes} 分</strong> です。</p>";
    }
    ?>
</body>
</html>
