<?php
include "../public/db.php";
$id=$_GET['id'];
$cateName=$_GET['cateName'];
$sql="update categories  set cateName='{$cateName}' where id='{$id}'";
$result=$db->query($sql);
if($result){
    echo "<script>alert('修改成功!');location.href='showCate.php'</script>";
}