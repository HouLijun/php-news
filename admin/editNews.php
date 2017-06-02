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
    <title>编辑新闻</title>
</head>
<body>
<?php
include "../public/db.php";
$id=$_GET["id"];
$sql="select * from list where id='{$id}'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
?>
<button><a href="showNewsList.php?id=<?php echo $row['cate_id']?>">返回</a></button>
<form action="editNewsCon.php" method="get">
    <input type="hidden" name="id" value="<?php echo $id;?>">
    <label for="title">新闻标题：
        <input type="text" id="title" name="title" value="<?php echo $row['title'];?>">
    </label>
    <br>
    <br>
    <label for="title">新闻内容：
        <div>
            <script id="editor" type="text/plain" style="width:100%;height:100%;" name="content">
                <?php echo $row["content"];?>
            </script>
            </div>
            </label>
            <br>
            <br>
            <input type="submit" value="提交">
                </form>
                </body>
                <script>
            var ue = UE.getEditor('editor',{

            });
            </script>
</html>