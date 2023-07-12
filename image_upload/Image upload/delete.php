<?php
require_once 'conn.php';

if (isset($_POST['id'])) {
    $image_id = $_POST['id'];

    $query = mysqli_query($conn, "SELECT * FROM `images` WHERE id = '$image_id'") or die(mysqli_error());
    $fetch = mysqli_fetch_array($query);
    $image_path = $fetch['location'];

    // Delete image file from the server
    if (file_exists($image_path)) {
        unlink($image_path);
    }

    // Delete image record from the database
    mysqli_query($conn, "DELETE FROM `images` WHERE id = '$image_id'") or die(mysqli_error());
    echo "<script>alert('Image deleted!')</script>";
    echo "<script>window.location = 'index.php'</script>";
}
?>
