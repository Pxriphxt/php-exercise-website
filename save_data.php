<!-- ติดตั้ง SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.min.css">

<!-- ติดตั้ง SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.all.min.js"></script>

<?php

include("php/config.php");



$id = $_GET['id'];
$stance = $_POST['stance'];
$set1 = $_POST['set1'];

$sqll = "SELECT lt FROM users WHERE id_user='$id'";
          $result = $con->query($sqll);
          $row = $result->fetch_assoc();

$token = $row['lt'];
    $sToken = "$token";
    $sMessage = "บันทึกการออกกำลังกาย\n";
    $sMessage .= "ท่าทางการออกกำลังกาย : ".$stance."\n";
    $sMessage .= "จำนวนครั้ง/เซ็ต : ".$set1."\n";
	
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

$sql = "INSERT INTO ex1 (id_user,stance,set1) VALUES ('$id','$stance', '$set1')";

if ($con->query($sql) === TRUE) {
    echo "เพิ่มข้อมูลเรียบร้อย";
    header("location:table.php?id=".$id );
    echo $id;
    echo $stance;
    echo $set1;
  } else {
    echo "Error deleting record: " . $con->error;
    echo '<script>
            Swal.fire({
                icon: "error",
                title: "บางอย่างผิดพลาด??",
                text: "มีบางอย่างผิดพลาดโปรดตรวจสอบ!!",
                footer: "SEE YOU AGAIN",
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                window.location.href = "table.php";
            });
            </script>';
  }
  
  $con->close();


?>