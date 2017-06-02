<?php
include "../public/db.php";
$id=$_GET["id"];
$selSql="select * from categories where p_id='{$id}'";
$selRes=$db->query($selSql);
if($selRes->fetch_assoc()){
    echo "<script>alert('有子栏目，不能删除');location.href='showCate.php';</script>";
}else{
    $sql="delete from categories where id='{$id}'";
    $result=$db->query($sql);
    if($result){
        echo "<script>alert('删除成功');location.href='showCate.php';</script>";
    }
}