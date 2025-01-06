<?php 
session_start();

include("php/config.php");
if(!isset($_SESSION['valid'])){
    header("Location: index.php");
}

$id = $_GET['id'];
$upd = $_GET['upd'];



// ตรวจสอบว่ามีการส่งค่า id มาผ่าน URL
// if(isset($_GET['id'])){
    // $id = $_GET['id'];
    
    // ดึงข้อมูลการออกกำลังกายจากฐานข้อมูล
    // $sql = "SELECT * FROM ex1 WHERE id='$id' ";
    // $result = mysqli_query($con, $sql);
    
    // ตรวจสอบว่าพบข้อมูลหรือไม่
    // if(mysqli_num_rows($result) > 0){
        // $row = mysqli_fetch_assoc($result);
    // } else {
        // echo "ไม่พบข้อมูลการออกกำลังกายที่คุณต้องการแก้ไข";
        // exit; // หยุดการทำงานถ้าไม่พบข้อมูล
    // }
// } else {
    // echo "ไม่ได้ระบุรหัสการออกกำลังกายที่ต้องการแก้ไข";
    // exit; // หยุดการทำงานถ้าไม่มีรหัสการออกกำลังกาย
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>แก้ไขข้อมูลการออกกำลังกาย</title>
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <header>แก้ไขข้อมูลการออกกำลังกาย</header>
            <?php
            $count = "SELECT * FROM ex1 WHERE id_user='$id' AND id='$upd'";
            $result = $con->query($count);
            $row = $result->fetch_assoc();
            ?>
            <form action="edit_tb.php?id=<?php echo $id?>&upd=<?php echo $upd?>" method="POST">
                <div class="field input">
                    <label for="stance">ท่าทางการออกกำลังกาย</label>
                    <input type="text" name="stance" id="stance" value="<?php echo $row['stance']; ?>" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="set1">จำนวนครั้ง/เซ็ต</label>
                    <input type="text" name="set1"  id="set1" value="<?php echo $row['set1']; ?>" autocomplete="off" required>
                </div>

                <!-- เพิ่มฟิลด์ซ่อนไว้เพื่อส่งค่า id ไปใน edit_tb.php -->
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
</body>
</html>