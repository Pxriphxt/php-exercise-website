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
    <!-- // .page-banner -->
        <div class="container">
        <div class="box">
          <h1>BMI Calculator</h1>
          <div class="content">


            <div class="input">
                <label for="height">Age</label>
                <input type="text" class="text-input" id="age" autocomplete="off" required/>
            </div>

            <div class="gender">

                <label class="container">
                    <input type="radio" name="radio" id="m"><p class="text">Male</p>
                    <span class="checkmark"></span>
                  </label>


                <label class="container">
                    <input type="radio" name="radio" id="f" ><p class="text">Female</p>
                      <span class="checkmark"></span>
                    </label>

            </div>

            <div class="containerHW">
            <div class="inputH">
              <label for="height">Height(cm)</label>
              <input type="number" id="height" required>
            </div>

            <div class="inputW">
              <label for="weight">Weight(kg)</label>
              <input type="number" id="weight" required>
            </div>
          </div>

            <button class="calculate" id="submit" onclick="calculate();">Calculate BMI</button>
          </div>
          <div class="result">
            <p>Your BMI is</p>
            <div id="result">00.00</div>
            <p class="comment"></p>
          </div>
        
      

        </div>
      </div>
		



        <!-- The Modal -->
        <div id="myModal" class="modal">
      <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <p id="modalText"></p>
    </div></div>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="bmi/script.js"></script>
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>