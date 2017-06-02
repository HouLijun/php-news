<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改分类</title>
</head>
<body>
<?php
include "../public/db.php";
$id=$_GET['id'];
$sql="select cateName from categories where id='{$id}'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
$cateName=$row["cateName"];
?>
<form action="editCateCon.php">
    <input type="text" name="cateName" value="<?php echo $cateName;?>">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <input type="submit" value="修改">
</form>
<button onclick="alert(1);location.href='showCate.php'">返回</button>
</body>
</html>