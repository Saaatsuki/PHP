<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>光の到達時間</title>
    <link rel="stylesheet" href="02.css">
</head>
<body>
    <h1>🌞 太陽の光の到達時間 🌞</h1>

    <!-- method="post" に修正し、actionは同じファイルを指定 -->
    <form action="" method="post">
        <label for="planet">惑星を選択：</label>
        <select name="planet" id="planet" required>
            <option value="수성">수성(水星)</option>
            <option value="지구">지구(地球)</option>
            <option value="화성">화성(火星)</option>
            <option value="토성">토성(土星)</option>
        </select>
        <button type="submit">計算する</button>
    </form>

    <?php
    // POSTリクエストのときだけ処理
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $planet = $_POST['planet'];

        // 距離と日本語名の設定
        if ($planet === '수성') {
            $distance = 57900000;
            $planet_ja = "水星";
        } elseif ($planet === '지구') {
            $distance = 150000000;
            $planet_ja = "地球";
        } elseif ($planet === '화성') {
            $distance = 230000000;
            $planet_ja = "火星";
        } elseif ($planet === '토성') {
            $distance = 1429400000;
            $planet_ja = "土星";
        } else {
            echo "<p>再入力してください。</p>";
            exit;
        }

        // 光の速度で到達時間を計算（300,000 km/s）
        $time = round(($distance / 300000) / 60, 3); // 秒→分

        // 結果表示
        echo "<p>☀️ 太陽から <strong>{$planet_ja}</strong> までの光の到達時間は <strong>{$time} 分</strong> です。</p>";
    }
    ?>
</body>
</html>
