<?php
include "../public/db.php";
$id=$_GET["id"];
$cate_id=$_GET["cate_id"];
$sql="delete from list where id='{$id}'";
$result=$db->query($sql);
if($db->affected_rows>0){
    echo "<script>alert('删除成功');location.href='showNewsList.php?id={$cate_id}';</script>";
}