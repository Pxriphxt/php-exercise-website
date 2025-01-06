<?php
include("php/config.php");

// ตรวจสอบว่ามีข้อมูลที่ส่งมาผ่าน POST หรือไม่
// if(isset($_POST['stance']) && isset($_POST['set1']) && isset($_POST['id'])) {
//     // ใช้ mysqli_real_escape_string เพื่อป้องกัน SQL Injection
//     $stance = mysqli_real_escape_string($con, $_POST['stance']);
//     $set1 = mysqli_real_escape_string($con, $_POST['set1']);
//     $id = mysqli_real_escape_string($con, $_POST['id']);
    $stance = $_POST['stance'];
    $set1 = $_POST['set1'];
    $id = $_GET['id'];
    $id_upd = $_GET['upd'];

    echo $id;
    echo $id_upd;

    $sqll = "SELECT lt FROM users WHERE id_user='$id'";
          $result = $con->query($sqll);
          $row = $result->fetch_assoc();

$token = $row['lt'];
    $sToken = "$token";
    $sMessage = "แก้ไขบันทึกการออกกำลังกาย\n";
    $sMessage .= "แก้ไขท่าทางการออกกำลังกายเป็น : ".$stance."\n";
    $sMessage .= "แก้ไชจำนวนครั้ง/เซ็ตเป็น : ".$set1."\n";
	
	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	//Result error 
	if(curl_error($chOne)) 
	{ 
		echo 'error:' . curl_error($chOne); 
	} 
	else { 
		$result_ = json_decode($result, true); 
		echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	} 
	curl_close( $chOne );  
    // สร้างคำสั่ง SQL UPDATE
    $sql = "UPDATE ex1 SET stance='$stance', set1='$set1' WHERE id='$id_upd'";

    // ทำการ execute คำสั่ง SQL
    if ($con->query($sql) === TRUE) {
        echo "อัปเดตข้อมูลสำเร็จ";
        header("location:table.php?id=".$id);
    } else {
        echo "เกิดข้อผิดพลาดในการอัปเดต: " . $con->error;
    }
    
    // ปิดการเชื่อมต่อ
    
    $con->close();
?>
