<?php
session_start();
if(isset($_SESSION["login"])&&$_SESSION["login"]=="true"){
    echo "<script>location.href='index.php';</script>";
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
    <title>登录</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <style>
        .panel{
            width:500px;
            height:300px;
            margin: auto;
            position: absolute;
            top:0;
            bottom:0;
            left:0;
            right:0;
        }
        .panel-body{
            padding:30px;
        }
    </style>
</head>
<body>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title text-center">LOGIN</h3>
    </div>
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="loginCheck.php">
            <div class="form-group">
                <label for="account" class="col-sm-2 control-label">Account</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="account" placeholder="Account" name="account">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                </div>
            </div>
           <!-- <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 text-right">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                </div>
            </div>-->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 text-center">
                    <button type="submit" class="btn btn-info">Sign in</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>