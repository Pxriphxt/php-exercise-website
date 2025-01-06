<!-- ติดตั้ง SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.min.css">

<!-- ติดตั้ง SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.all.min.js"></script>

<?php

include("php/config.php");

$id = $_GET['id'];
$id_del = $_GET['del'];

echo "id=".$id;
echo "del=".$id_del;

$sqll = "SELECT lt FROM users WHERE id_user='$id'";
          $result = $con->query($sqll);
          $row = $result->fetch_assoc();

$token = $row['lt'];
    $sToken = "$token";
    $sMessage = "ลบบันทึกการออกกำลังกายสำเร็จ";
	
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

$sql = "DELETE FROM ex1 WHERE id = $id_del";
if ($con->query($sql) === TRUE) {
  echo "เพิ่มข้อมูลเรียบร้อย";
  header("location:table.php?id=".$id );
  } else {
    echo "Error deleting record: " . $con->error;
    echo '<script>
                window.location.href = "table.php";
            </script>';
  }
  
  $conn->close();


?>