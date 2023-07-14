<?php
session_start();

include("connection.php");
if (!isset($_SESSION['valid'])) {
    header("Location: login.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Snapshots</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="static/style.css">

    <link rel='stylesheet' href='https://unpkg.com/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.css' />
<script src='https://unpkg.com/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.js'></script>

</head>
<body>
<header>
    <div class="wrapper">
    <?php

$id = $_SESSION['id'];
$username=$_SESSION['username'];
$query = mysqli_query($con, "SELECT*FROM tbl_member WHERE username='$username'");

while ($result = mysqli_fetch_assoc($query)) {
    $res_Uname = $result['username'];
}
?>
       
        <ul class="nav-area">
        
         <li><a href="image_upload/imageupload">Photos</a></li>
         <li><a href="chart.php">Chart</a></li>
            <li><a href="adoutus.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="logout.php">Logout</a></li> 
           

        </ul>
    </div>

    <div class="welcome-text">
        <h1>Welcome to Snapshots</h1>
    </div> 
    <div class='scroll-animations-example' data-scroll-container>
    <div class='scrollsection' data-scroll-section>
        <div class='item -normal' data-scroll data-scroll-speed="2">
            <img class='image' src='https://picsum.photos/id/1005/300/400'>
        </div>
        <div class='item -big' data-scroll data-scroll-speed="1">
            <img class='image' src='https://picsum.photos/id/1019/600/800'>
        </div>
        <div class='item -small -horizontal' data-scroll data-scroll-speed="4">
            <img class='image' src='https://picsum.photos/id/1027/400/300'>
        </div>
        <div class='item -normal' data-scroll data-scroll-speed="3">
            <img class='image' src='https://picsum.photos/id/1028/300/400'>
        </div>
        <div class='item -normal -horizontal' data-scroll data-scroll-speed="2">
            <img class='image' src='https://picsum.photos/id/1041/400/300'>
        </div>
        <div class='item -big -horizontal' data-scroll data-scroll-speed="4">
            <img class='image' src='https://picsum.photos/id/1042/800/600'>
        </div>
        <div class='item -small' data-scroll data-scroll-speed="2">
            <img class='image' src='https://picsum.photos/id/1049/300/400'>
        </div>
        <div class='item -normal -horizontal' data-scroll data-scroll-speed="1">
            <img class='image' src='https://picsum.photos/id/1056/300/400'>
        </div>
        <div class='item -small -horizontal' data-scroll data-scroll-speed="3">
            <img class='image' src='https://picsum.photos/id/1062/400/300'>
        </div>
        <div class='item -big' data-scroll data-scroll-speed="1">
            <img class='image' src='https://picsum.photos/id/1068/600/800'>
        </div>
        
        <div class='item -normal -horizontal' data-scroll data-scroll-speed="2">
            <img class='image' src='https://th.bing.com/th/id/R.072e318753d271b6994b7c89c440ba94?rik=6dDJnqSasBwCZQ&riu=http%3a%2f%2fth01.deviantart.net%2ffs11%2fPRE%2fi%2f2006%2f204%2f8%2f8%2fRing_represents_Love__by_vi3.jpg&ehk=U09OJr101qTNvvakISvSsuZn767r3E4F6BaviqxMD9s%3d&risl=&pid=ImgRaw&r=0'>
        </div>
        <div class='item -normal -horizontal' data-scroll data-scroll-speed="1">
            <img class='image' src='https://picsum.photos/id/1072/300/400'>
        </div>
        <div class='item -small -horizontal' data-scroll data-scroll-speed="4">
            <img class='image' src='https://picsum.photos/id/1075/400/300'>
        </div>
        <div class='item -big' data-scroll data-scroll-speed="3">
            <img class='image' src='https://picsum.photos/id/1081/600/800'>
        </div>
        <div class='item -normal -horizontal' data-scroll data-scroll-speed="2">
            <img class='image' src='https://picsum.photos/id/111/400/300'>
        </div>
        <div class='item -small -horizontal' data-scroll data-scroll-speed="4">
            <img class='image' src='https://picsum.photos/id/129/400/300'>
        </div>
        <div class='item -big' data-scroll data-scroll-speed="2">
            <img class='image' src='https://picsum.photos/id/137/600/800'>
        </div>
        <div class='item -normal -horizontal' data-scroll data-scroll-speed="1">
            <img class='image' src='https://picsum.photos/id/141/300/400'>
        </div>
        <div class='item -small -horizontal' data-scroll data-scroll-speed="3">
            <img class='image' src='https://picsum.photos/id/145/400/300'>
        </div>
        <div class='item -normal' data-scroll data-scroll-speed="1">
            <img class='image' src='https://picsum.photos/id/147/300/400'>
        </div>
    </div>
</div>

<div class='fake-ui'>
    <div class='logo'></div>
    <div class='nav'>
        <span class='item'></span>
        <span class='item'></span>
        <span class='item'></span>
    </div>
    <div class='footer'></div>
</div>

<script  src="static/script.js"></script>
</body>
</html>
<?php include "db_conn.php";
// if (!isset($_SESSION['valid'])) {
//     header("Location:view/home.php");

// }

?>

