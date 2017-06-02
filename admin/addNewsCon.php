<?php
header("content-type:text/html;charset:utf-8");
include "../public/db.php";
$cate_id=$_GET['cate_id'];
$title=$_GET['title'];
$content=$_GET['content'];
$sql="insert into list (title,content,cate_id) values ('{$title}','{$content}','{$cate_id}')";
$db->query($sql);
if($db->affected_rows>0){
    echo "<script>alert('添加成功');location.href='addNews.php?id={$cate_id}'</script>";
}
