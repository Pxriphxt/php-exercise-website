<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<!-- <script>
    alert('test')
</script> -->
<body>
        <div class="container">
            <div class="box form-box">
                <?php 
                include("php/config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $query = "SELECT * FROM users WHERE Email='$email' AND Password='$password'";
                    $result = mysqli_query($con, $query) or die("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    $id = $row['id_user'];
                    // echo $id;
                    if(is_array($row) && !empty($row)){
                        $_SESSION['valid'] = true;
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];
                        header("Location: table.php?id=".$id);
                    } else {
                        echo "<div class='message'>
                        <p>อีเมลหรือรหัสไม่ถูกต้อง</p>
                        </div> <br>";
                    }
                }
                ?>
                <header>Login บันทึกการออกกำลังกาย</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login">
                    </div>
                    <div class="links">
                        Don't have an account? <a href="register.php">Sign Up Now</a>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>
