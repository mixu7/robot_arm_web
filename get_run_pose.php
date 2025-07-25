<?php
// الاتصال بقاعدة البيانات
include 'db.php';

// جلب آخر حركة تكون حالتها = 1
$sql = "SELECT * FROM poses WHERE status = 1 ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // نحول السطر إلى JSON حتى نقدر نستخدمه بالواجهة
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["message" => "لا توجد حركة نشطة."]);
}
?>