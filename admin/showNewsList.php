<?php
include "../public/db.php";
if(isset($_GET["id"])){
    $id=$_GET["id"];
}else{
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        button{
            margin:5px;
        }
        li{
            margin:3px 0;
        }
    </style>
    <title>新闻编辑</title>
</head>
<body>
<button><a href="addNews.php?id=<?php echo $id;?>">添加新闻</a></button>

<?php
$sql="select * from list where cate_id='{$id}'";
$result=$db->query($sql);
if(mysqli_num_rows($result)>0){
    $str="<ul style='list-style: square;'>";
    while($row=$result->fetch_assoc()){
        $str.="<li><span>{$row['title']}</span><button><a href='editNews.php?id={$row['id']}'>修改</a></button><button><a href='delNews.php?id={$row['id']}&cate_id={$row['cate_id']}'>删除</a></button></li>";
    }
    $str.="</ul>";
    echo $str;
}else{
    echo "<div>没有内容，请添加</div>";
}
?>
</body>
</html>