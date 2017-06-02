<?php
include "../public/db.php";
$pid=$_GET['category'];
$cateName=$_GET['cateName'];
$sql="insert into categories (cateName,p_id) values ('{$cateName}','{$pid}')";
$result=$db->query($sql);
if($result){
    echo "<script>alert('添加成功!');location.href='addCate.php'</script>";
}