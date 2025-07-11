<?php
// フォームからPOSTで送られた値を取得
$id = $_POST['id'] ?? '';
$pw = $_POST['pw'] ?? '';

// 簡単にサニタイズ（XSS対策）
$id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
$pw = htmlspecialchars($pw, ENT_QUOTES, 'UTF-8');

echo "<h2>送信されたデータ</h2>";
echo "ID: " . $id . "<br>";
echo "PW: " . $pw . "<br>";
?>
