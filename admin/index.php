<?php
header("content-type:text/html;charset=utf-8");
session_start();
if(!isset($_SESSION["login"])||$_SESSION['login']!="true"){
    echo "<script>location.href='login.php'</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh-CN" class="hb-loaded"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/css/admin.css">
    <script src="../static/js/jquery.min.js"></script>
    <script src="../static/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body huaban_collector_injected="true">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">新闻后台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">管理员 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid content">
    <div class="row">
        <div class="col-xs-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">分类管理</a>
                    <ul class="dropdown-menu dropdown-sidebar">
                        <li><a href="addCate.php" target="iframe">添加分类</a></li>
                        <li><a href="showCate.php" target="iframe">编辑分类</a></li>
                    </ul>
                </li>

                <li>
                    <a href="showNews.php" target="iframe">新闻管理</a>
                   <!-- <ul class="dropdown-menu dropdown-sidebar">
                        <li><a href="addNews.php" target="iframe">添加新闻</a></li>
                        <li><a href="showNews.php" target="iframe">编辑新闻</a></li>
                    </ul>-->
                </li>
            </ul>
        </div>
        <div class="col-xs-9 col-md-10 main">
            <iframe src="welcome.php" frameborder="0"  name="iframe"></iframe>
        </div>
    </div>
</div>
</body>
</html>66 139 202