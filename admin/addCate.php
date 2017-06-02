<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加无限极分类</title>
</head>
<body>
<!--<h1>无限极分类</h1>-->
<?php
include "../public/db.php";
include "../public/cateTree.php";
$obj=new cateTree();
$obj->getTree(0,0,"&nbsp;&nbsp;",$db,"categories");
?>
<form action="addCateCon.php">
    <label for="category">所属栏目：
        <select name="category" id="category">
            <option value="0">一级栏目</option>
            <?php
            echo $obj->str;
            ?>
        </select>
    </label>
    <br>
    <br>
    <label for="cateName">栏目名称：
        <input type="text" id="cateName" name="cateName">
    </label>
    <br>
    <br>
    <input type="submit" value="添加">
</form>
</body>
</html>