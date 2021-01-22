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
       <style>
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</body>
</html>