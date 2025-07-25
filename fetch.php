<?php
// الاتصال بقاعدة البيانات
include 'db.php';

// استعلام لجلب كل الحركات من قاعدة البيانات
$sql = "SELECT * FROM poses ORDER BY id DESC";
$result = $conn->query($sql);

// إذا فيه نتائج نعرضها في جدول
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8'>";
    echo "<tr>
            <th>ID</th>
            <th>Motor1</th>
            <th>Motor2</th>
            <th>Motor3</th>
            <th>Motor4</th>
            <th>Motor5</th>
            <th>Motor6</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['motor1'] . "</td>";
        echo "<td>" . $row['motor2'] . "</td>";
        echo "<td>" . $row['motor3'] . "</td>";
        echo "<td>" . $row['motor4'] . "</td>";
        echo "<td>" . $row['motor5'] . "</td>";
        echo "<td>" . $row['motor6'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>
                <button onclick='loadPose(" . $row['id'] . ")'>Load</button>
                <button onclick='removePose(" . $row['id'] . ")'>Remove</button>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "لا توجد حركات محفوظة.";
}
?>