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
             <h1 style="text-align: center;">ท่าทางการออกกำลังกาย</h2>
             <br>
             <div>
	</div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ท่าทางที่</th>
                        <!-- <th>id_device</th> -->
                        <th>ท่าทางการออกกำลังกาย</th>
                        <th>แสดงท่าทาง</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>sit-ups</th>
                        <th><a href="situps.php?id=<?php echo $id?>">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>2</th>
                        <th>reverse crunches</th>
                        <th><a href="reverse crunches.php?id=<?php echo $id?>">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>3</th>
                        <th>bicycle crunches</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>4</th>
                        <th>flutter kicks</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>5</th>
                        <th>leg raise</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>6</th>
                        <th>elbow plank</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>7</th>
                        <th>lunges</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>8</th>
                        <th>high knees</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>9</th>
                        <th>high knees</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>10</th>
                        <th>climbers</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>11</th>
                        <th>plank jump-ins</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>12</th>
                        <th>lungs step-ups</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>13</th>
                        <th>squats</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>14</th>
                        <th>donkey kicks</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>15</th>
                        <th>bridges</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>16</th>
                        <th>jump knee tucks</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>17</th>
                        <th>fly steps</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>18</th>
                        <th>side leg raises</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>19</th>
                        <th>close grip push-ups</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>20</th>
                        <th>triceps dips</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>21</th>
                        <th>tricep extensions</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>22</th>
                        <th>get-ups</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>23</th>
                        <th>punches</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>24</th>
                        <th>side-to-side chops</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>25</th>
                        <th>leg curls</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>26</th>
                        <th>chin-ups</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>27</th>
                        <th>doorframe rows</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>28</th>
                        <th>body rows</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>29</th>
                        <th>sitting pull-ups</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>30</th>
                        <th>psudo planche</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>31</th>
                        <th>pull-ups</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>32</th>
                        <th>elbow lifts</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>33</th>
                        <th>superman</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>34</th>
                        <th>star plank</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>35</th>
                        <th>alt arm/leg plank</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>36</th>
                        <th>full arch</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>37</th>
                        <th>push-ups</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>38</th>
                        <th>plank rotations</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>39</th>
                        <th>chest squeeze</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>40</th>
                        <th>shoulder press</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>41</th>
                        <th>shoulder taps</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
                    <tr>
                        <th>42</th>
                        <th>clapping push-ups</th>
                        <th><a href="https://www.w3schools.com/">คลิกเพื่อดู</a></th>
                    </tr>
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