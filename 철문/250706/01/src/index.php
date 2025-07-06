<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>光の到達時間計算フォーム</title>
    <link rel="stylesheet" href="01.css">
</head>
<body>
    <h2>🌞 太陽から惑星までの光の到達時間を計算</h2>
    
    <!-- フォーム：ユーザーが惑星を選択して送信 -->
    <form action="index.php" method="post">
        <label for="planet">惑星（Planet）を選んでください:</label><br><br>
        
        <select name="planet" id="planet" required>
            <!-- 惑星名は韓国語でvalueを設定し、表示は日本語併記 -->
            <option value="수성">수성（水星）</option>
            <option value="지구">지구（地球）</option>
            <option value="화성">화성（火星）</option>
            <option value="토성">토성（土星）</option>
        </select>
        
        <br><br>
        <button type="submit">計算する</button>
    </form>

    <?php
    // フォームがPOST送信された場合に処理を実行
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $planet = $_POST['planet']; // 選択された惑星名（韓国語）

        // 選択された惑星ごとに太陽からの距離(km)を設定
        // また表示用に日本語名も用意
        switch ($planet) {
            case '수성':  // 水星
                $distance = 57900000;
                $planet_ja = "水星";
                break;
            case '지구':  // 地球
                $distance = 150000000;
                $planet_ja = "地球";
                break;
            case '화성':  // 火星
                $distance = 230000000;
                $planet_ja = "火星";
                break;
            case '토성':  // 土星
                $distance = 1429400000;
                $planet_ja = "土星";
                break;
            default:
                // 惑星が未登録の場合はエラーメッセージ表示し処理終了
                echo "<p>未知の惑星です。</p>";
                exit;
        }

        // 光の速度 = 30万km/s
        // 時間計算：距離 ÷ 光速 → 秒に変換 → 分に変換（÷60）
        // 小数点第2位までroundで四捨五入
        $time_minutes = round(($distance / 300000) / 60, 2);

        // 結果を表示
        echo "<p>☀️ 太陽から <strong>{$planet_ja}</strong> までの光の到達時間は <strong>{$time_minutes} 分</strong> です。</p>";
    }
    ?>
</body>
</html>
