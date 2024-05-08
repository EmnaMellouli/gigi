<?php
session_start();
if(isset($_SESSION['id'])&&isset($_SESSION['email'])){

?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>HOME</title>
    <link rel="stylesheet" href="login.css"/>
</head>
<body>
    <h1 class="hello">hello <?php echo $_SESSION['name'];?></h1>
    <a href="logout.php">Logout</a>
</body>
</html>
<?php
}else{
    header("location: login.php");
          exit();
}
?>