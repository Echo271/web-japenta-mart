<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload gambar</title>
</head>
<body>
    <h1>Upload Gambar</h1>
    <form action="upload_img.php" method="post" enctype="multipart/form-data">
        <label for="upload">Upload :</label>
        <input type="file" name="upload">
        <input type="submit" name="submit">
    </form>   
</body>
</html>

<?php

    // Check if image file is a actual image or fake image
    if(isset($_POST['submit'])) {
        $gambar = $_FILES['upload']['name'];
        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "sayang.$ekstensi";
        $tmp = $_FILES['upload']['tmp_name'];
        if(move_uploaded_file($tmp, 'img/'.$gambar_baru)){
            echo "Sukses";
        }else{
            echo "Gagal";
        }

    }
?>