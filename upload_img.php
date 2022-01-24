<?php
if (isset($_POST["btn"])) {
    if (isset($_FILES["upload"])) {
        echo " upload  thành công ";
        $client = $_FILES["upload"]["tmp_name"];
        $server = "upload_img/" . time() . $_FILES["upload"]["name"];
        move_uploaded_file($client, $server);
    } else {
        echo " Vui lòng chọn file ";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="upload">
    <button name="btn">upload</button>
</form>
<div><img src="<?php echo $server ?? "" ?> " alt=""></div>
</body>
</html>

