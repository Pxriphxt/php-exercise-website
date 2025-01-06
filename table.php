<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }

   $id = $_GET['id'];
//    echo $id;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบบันทึกการออกกำลังกาย</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="index.css">
     <!-- ติดตั้ง SweetAlert2 CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.min.css">
    <!-- ติดตั้ง SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.all.min.js"></script>
</head>
<!-- <script>
    alert('test')
</script> -->
<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="home.php">
                        <span class="title">ระบบบันทึกการออกกำลังกาย</span>
                    </a>
                </li>

                <li>
                    <a href='table.php?id=<?php echo $id?>'>
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">บันทึกการออกกำลังกาย</span>
                    </a>
                </li>

                <li>
                    <a href="stance.php?id=<?php echo $id?>">
                        <span class="icon">
                        <ion-icon name="accessibility-outline"></ion-icon>
                        </span>
                        <span class="title">ท่าทางการออกกำลังกาย</span>
                    </a>
                </li>

                <li>
                    <a href="bmi.php?id=<?php echo $id?>">
                        <span class="icon">
                        <ion-icon name="calculator-outline"></ion-icon>
                        </span>
                        <span class="title">คำนวณค่า BMI</span>
                    </a>
                </li>

                <li>
                    <a href="LineNotify.php?id=<?php echo $id?>">
                        <span class="icon">
                        <ion-icon name="notifications-outline"></ion-icon>
                        </span>
                        <span class="title">รับแจ้งเตือนผ่านไลน์</span>
                    </a>
                </li>


                <li>
                    <a href="edit.php?id=<?php echo $id?>">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">เปลี่ยนโปรไฟล์</span>
                    </a>
                </li>

                <li>
                    <a href='logout.php'>
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">ออกจากระบบ</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>


                <div class="user">
                    <img src="assets/imgs/people.jpg" alt="">
                </div>
            </div>

    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบบันทึกการออกกำลังกาย</title>
    <link rel="stylesheet" href="index.css">
    <!-- ติดตั้ง SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.min.css">
    <!-- ติดตั้ง SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.all.min.js"></script>
</head>

<body>
            <br>
             <h1 style="text-align: center;">ตารางบันทึกผลการออกกำลังกาย</h2>
             <div>
		<form method="POST" action="save_data.php?id=<?php echo $id?>" style="text-align:center; padding: 0 15vh;">	
        <div class="font1">
        <font style="color:white">ท่าทางการออกกำลังกาย : </font>
        <input type="text" name="stance" class="label" required>
        </div>
        <div class="font2">
            <font style = "color:white">จำนวนครั้ง/เซ็ต : </font>
            <input type="text" name="set1" value="/" class = "label" required>
        </div>
            
			<input type="submit"  class="button-link-edit" name="submit" value="เพิ่มข้อมูล">
		</form>
	</div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <!-- <th>id_device</th> -->
                        <th>ท่าทางการออกกำลังกาย</th>
                        <th>จำนวนครั้ง/เซ็ต</th>
                        <th>เวลา</th>
                        <th>จัดการ</th>
                        <th>ลบข้อมูล</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("php/config.php");
                    $sql = "SELECT * FROM ex1 WHERE id_user='$id' order by id DESC";
                    $result = mysqli_query($con, $sql);
                    $order = 1;
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <!-- <td><?php echo $row['id_device'] ?></td> -->
                            <td><?php echo $row['stance']?></td>
                            <td><?php echo $row['set1']?></td>
                            <td><?php echo $row['time'] ?></td>
                            <td><a href="edit_data.php?id=<?php echo $id;?>&upd=<?php echo $row['id']?>" class="button-link-edit"  onclick="return confirm('คุณต้องการแก้ไขข้อมูลหรือไม่!?')" style="cursor: pointer;">แก้ไข</a></td>
                            <td><a href="Delete.php?id=<?php echo $id;?>&del=<?php echo $row['id']?>" class="button-link-delete"  onclick="return confirm('คุณต้องการลบข้อมูลหรือไม่!?')" style="cursor: pointer;">ลบ</a></td>
                        
            
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>


            

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>