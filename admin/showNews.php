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
        iframe{
            float: left;
        }
        .category{
            width:20%;
            height:100%;
            box-shadow: 1px 0 1px #000;
        }
        .news{
            width:80%;
            height:100%;
        }
    </style>
    <title>Document</title>
</head>
<body>
<iframe src="showNewsCate.php" frameborder="0" class="category"></iframe>
<iframe src="showNewsList.php" frameborder="0" class="news" name="news"></iframe>
</body>
</html>