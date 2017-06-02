<?php
header("content-type:text/html;charset=utf-8");
include "../public/db.php";
$account=$_POST["account"];
$password=md5($_POST["password"]);
$sql="select * from user where account='{$account}' and  limited='1'";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
    if($row["password"]==$password){
        session_start();
        $_SESSION["login"]="true";
        echo "<script>alert('登陆成功');location.href='index.php'</script>";
        exit();
    }else{
        echo "<script>alert('密码错误');location.href='login.php'</script>";
        exit();
    }
}
echo "<script>alert('账号不存在');location.href='login.php'</script>";
