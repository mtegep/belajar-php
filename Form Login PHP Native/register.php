<?php
    include 'config.php';

    error_reporting(0);

    session_start();

    if(isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        if ($password == $cpassword) {
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Wow! User Registration Completed.')</script>";
                    $username = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                } else {
                    echo "<script>alert('Woops! Something Wrong Went')</script>";
                }
            } else {
                echo "<script>alert('Woops! Email Already Exists.')</script>";
            }
        } else {
            echo "<script>alert('Password Not Matched.')</script>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"href="style.css">

    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="type" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" id="myPassword" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" id="myPassword" required>
            </div>
            <input type="checkbox" class="show"> Show Password
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
        </form>
    </div>
    <script>
        let showPw = document.querySelector(".show");
        let pw = document.querySelectorAll("#myPassword")
        
        showPw.addEventListener("click", ()=>{
           for(let i = 0; i < pw.length;i++){
            if (pw[i].type === "password"){
                pw[i].type = "text";
            } else{
                pw[i].type = "password";
            }
           }
        })
    </script>
</body>
</html>