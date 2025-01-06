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
             <h1 style="text-align: center;">รับแจ้งเตือน ผ่านไลน์</h1>
             <br>
             <div>
             <center><font style="color:white">วิธีรับแจ้งเตือนเข้าไลน์ : </font></center><br>
             <center><font style="color:white">1.เข้า //notify-bot.line.me/en/</font></center><br>
             <center><img src="Line/01.png" height="70%" width="70%"></center>
             <center><font style="color:white">2.กด Log in เข้า Line ของตัวเอง</font></center><br>
             <center><img src="Line/02.png" height="70%" width="70%"></center>
             <center><font style="color:white">3.หลังจาก Log in คลิกที่ My page</font></center><br>
             <center><img src="Line/03.png" height="70%" width="70%"></center>
             <center><font style="color:white">4.กดที่ Generate token</font></center><br>
             <center><img src="Line/04.png" height="70%" width="70%"></center>
             <center><font style="color:white">4.เลือกที่ต้องการรับการแจ้งเตือน แล้วใส่ชื่อในการแจ้งเตือน แล้วกด Generate token</font></center><br>
             <center><img src="Line/05.png" height="70%" width="70%"></center>
             <center><font style="color:white">5.หลังจากนั้นจะได้ token คัดลอก token ไว้</font></center><br>
             <center><img src="Line/06.png" height="70%" width="70%"></center>
             <center><font style="color:white">6.กดที่ เปลี่ยนโปรไฟล์ นำ token ที่ได้มาใส่ในช่อง Line Token แล้วกดอัพเดพ</font></center><br>
             <center><img src="Line/07.png" height="70%" width="70%"></center>
             <Center><td><a href="table.php?id=<?php echo $id?>"class="button2">กลับ</a></td></Center>
        </div>

    </div>


            

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>