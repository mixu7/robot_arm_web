<?php
// الاتصال بقاعدة البيانات
include 'db.php';

// التحقق من وجود المعرف المرسل
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // تحديث الحقل status ليصبح 0
    $sql = "UPDATE poses SET status = 0 WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "تم تغيير الحالة إلى 0 ✅";
    } else {
        echo "حدث خطأ أثناء التحديث: " . $conn->error;
    }
} else {
    echo "لم يتم إرسال معرّف الحركة.";
}
?>