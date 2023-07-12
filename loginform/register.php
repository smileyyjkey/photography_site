<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <title>Sign Up</title>
</head>
<body style= " background: url('image_upload/images/bg1.jpg')no-repeat;">
    <section>
        <div class="form-box">
            <div class="form-value">

                <?php

                include("connection.php");
                if (isset($_POST['submit'])) {
                    $username = mysqli_real_escape_string($con, $_POST['username']);
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);
                    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

                $hashed_password=password_hash($password,PASSWORD_BCRYPT);

                    // Verify if email exists
                    $verify_query = mysqli_query($con, "SELECT Email FROM tbl_member WHERE Email='$email'");
                    if (mysqli_num_rows($verify_query) != 0) {
                        echo "<div class='message'>
                              <p>This email is already in use. Please try another one!</p>
                          </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                    } else {
                        // Insert new user into the database
                        $insert_query = "INSERT INTO tbl_member(Username, Email, Password) VALUES ('$username', '$email', '$hashed_password')";
                        if (mysqli_query($con, $insert_query)) {
                            echo "<div class='message'>
                                  <p>Registered successfully!</p>
                              </div> <br>";
                            echo "<a href='login.php'><button class='btn'>Login Now</button></a>";
                        } else {
                            echo "Error: " . mysqli_error($con);
                        }
                    }
                } else {
                    ?>

                <form action="" method="post">
                    <h2>Sign Up</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" name="username" required>
                        <label for="">Username</label>
                    </div>
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

                    <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="cpassword" id="cpassword" autocomplete="off" required>
                        <label for="">CPassword</label>
                    </div>

                    <button type="submit" class="btn" name="submit">Sign up</button>
                    <div class="register">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
            <?php }?>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
