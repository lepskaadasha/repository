<?php 
    session_start();
    if (!isset($_COOKIE['count'])){ setcookie("count", 0); }
     else { setcookie("count", $_COOKIE['count'] + 1); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="block">
        <?php 
            echo 'cookie: Страницу перезагрузили '.$_COOKIE['count'].' раз';
        ?>
    </div>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .block {
            border: 1px solid black;
            padding: 20px;
            -webkit-box-shadow: 1px 1px 6px 0px rgba(50, 50, 50, 0.75);
            -moz-box-shadow:    1px 1px 6px 0px rgba(50, 50, 50, 0.75);
            box-shadow:         1px 1px 6px 0px rgba(50, 50, 50, 0.75);
        }
    </style>
</body>
</html>