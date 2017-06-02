<?php
header("content-type:text/html;charset:utf-8");
include "../public/db.php";
$id=$_GET['id'];
$title=$_GET['title'];
$content=$_GET['content'];
$sql="update list set title='{$title}',content='{$content}' where id='{$id}'";
$db->query($sql);
if($db->affected_rows>0){
    echo "<script>alert('修改成功');location.href='editNews.php?id={$id}'</script>";
}
