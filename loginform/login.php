<?php
session_start();
?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body style= " background: url('image_upload/images/bg1.jpg')no-repeat;">
        <section>
            <div class="form-box">
            <div class="form-value">
                <?php 
                include("connection.php");
                if (isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con,$_POST['email']);
                    $password = mysqli_real_escape_string($con,$_POST['password']);
                    $result = mysqli_query($con, "SELECT * FROM tbl_member WHERE email='$email'") or die("Select [Error]");
                    $row = mysqli_fetch_assoc($result);
                    if (is_array($row) && !empty($row) && password_verify($password, $row["password"])){
                        $_SESSION['valid'] = $row['email'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['id'] = $row['Id'];

                    }else{
                        echo "<div class='message'>
                <p> Wrong Username or Password!</p>
                    </div><br>";
                    echo "<a href='login.php'><button class='btn'>Go Back</button>";

                }
                if (isset($_SESSION['valid'])) {
                    header("Location: home.php");
                }
            } else {
                ?>

                <h2>Login</h2>
                    <form action="" method="POST">
                        
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" name="email" required>
                            <label for="">Email</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" name="password" required>
                            <label for="">Password</label>
                        </div>

                        <button type="submit" class="btn" name="submit">Login</button>
                        <div class="register">
                            <p>Don't have an account? <a href="register.php">Register</a></p>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>

    </html>