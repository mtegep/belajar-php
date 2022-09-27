<?php 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <marquee>
    <?php echo "<h1>Welcome " .
    $_SESSION['username'] . "</h1>"; ?>
    </marquee>
    <br>
    <div class="input-group">
    <a href="logout.php"><button name="submit" class="btn">Logout</button>
    
</body>
</html>