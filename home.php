<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
      <h1>Hello, <?=$_SESSION['name'];?></h1><br>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>
<?php
}else{
  header("Location: index.php");
  exit();
}
?>