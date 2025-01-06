<?php
session_start(); // เริ่ม session

// ลบ session ทั้งหมด
session_destroy();

// ส่งผู้ใช้กลับไปยังหน้าที่คุณต้องการ
header('Location: index.php');
exit;
?>