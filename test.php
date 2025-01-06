<?php
          include("php/config.php");

          $count = "SELECT COUNT(id_user) as DevX FROM users";
          $result = $con->query($count);
          $row = $result->fetch_assoc();

          $total = $row['DevX'] + 1;
          echo $total;

?>