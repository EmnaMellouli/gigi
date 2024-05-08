<?php
session_start();
include "db_conn.php";
if(isset($_post['uname']) && isset($_post['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_post['uname']);
    $pass = validate($_post['password']);
    if (empty($uname)){
      header("location: login.php?error=Email is required");
      exit();
    }
    else if (empty($pass)){
        header("location: login.php?error=Password is required");
        exit();
}
else{
    $sql = "SELECT * FROM users WHERE email='$uname' and password='$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if ($row["email"] === $uname && $row["password"]===$pass){
          $_SESSION['email'] = $row['email'];
          $_SESSION['name'] = $row['name'];
          $_SESSION['id'] = $row['id'];
          header("location: home.php");
          exit();
        }else{
            header("location: login.php?error=Incorrect email or password");
            exit();
        }
    }else{
        header("location: login.php?error=Incorrect email or password");
        exit();
    }
}
}else{
    header("location: login.php");
    exit();
}