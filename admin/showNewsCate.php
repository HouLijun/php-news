<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        html,body{
            width:100%;
            height:100%;
            margin:0;
            padding:0;
        }
    </style>
    <title>分类显示</title>
</head>
<body>
<?php
include "../public/db.php";
include "../public/cateTree.php";
$obj=new cateTree();
$obj->getNewsCateList(0,0,$db,"categories");
echo $obj->str;
?>
</body>
</html>