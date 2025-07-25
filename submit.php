<?php
// ربط الاتصال بقاعدة البيانات
include 'db.php';

// التحقق من أن الطلب تم عن طريق POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // قراءة القيم من النموذج
    $motor1 = $_POST['motor1'];
    $motor2 = $_POST['motor2'];
    $motor3 = $_POST['motor3'];
    $motor4 = $_POST['motor4'];
    $motor5 = $_POST['motor5'];
    $motor6 = $_POST['motor6'];

    // إدخال البيانات في قاعدة البيانات مع status = 1 (نشطة)
    $sql = "INSERT INTO poses (motor1, motor2, motor3, motor4, motor5, motor6, status)
            VALUES ('$motor1', '$motor2', '$motor3', '$motor4', '$motor5', '$motor6', 1)";

    if ($conn->query($sql) === TRUE) {
        echo "تم حفظ الحركة بنجاح ✅";
    } else {
        echo "خطأ في الحفظ: " . $conn->error;
    }
}
?>