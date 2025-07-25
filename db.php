<?php
// بيانات الاتصال بقاعدة البيانات
$host = "localhost";       // الخادم (XAMPP يعمل محليًا)
$user = "root";            // اسم المستخدم الافتراضي في XAMPP
$password = "";            // بدون كلمة مرور
$dbname = "robot_arm_db";  // اسم قاعدة البيانات اللي أنشأناها

// إنشاء الاتصال
$conn = new mysqli($host, $user, $password, $dbname);

// التحقق من نجاح الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>