<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" charset="utf-8" src="../static/editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../static/editor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="../static/editor/lang/zh-cn/zh-cn.js"></script>
    <title>添加新闻</title>
</head>
<body>
<?php
include "../public/db.php";
$cate_id=$_GET["id"];
?>
<form action="addNewsCon.php" method="get">
    <input type="hidden" name="cate_id" value="<?php echo $cate_id;?>">
    <label for="title">新闻标题：
        <input type="text" id="title" name="title">
    </label>
    <br>
    <br>
    <label for="title">新闻内容：
        <div>
            <script id="editor" type="text/plain" style="width:500px;height:500px;" name="content"></script>
        </div>
    </label>
    <br>
    <br>
    <input type="submit" value="添加">
</form>
</body>
<script>
    var ue = UE.getEditor('editor',{
        PathFormat:"/php/06.01news/static/images/admin/{time}"
    });
</script>
</html>