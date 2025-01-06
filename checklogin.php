<!-- <?php
include('php/config.php');


$username = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE Email='$username'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);

echo $username;
echo $password;
// if ($username == $row['Username'] && $password == $row['password']){

// header('location:table.php?id='.$username);                

// }else{
//                     echo "<div class='message'>
//                       <p>Wrong Username or Password</p>
//                        </div> <br>";
//                    echo "<a href='index.php'><button class='btn'>Go Back</button>";
// }


?> -->