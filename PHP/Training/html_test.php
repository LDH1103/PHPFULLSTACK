<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="./html_test.php">
        <label for="post"></label>
        <input type="submit" value="0" id="0" name="player">
        <input type="submit" value="1" id="1" name="player">
        <input type="submit" value="2" id="2" name="player">
        <input type="submit" value="3" id="3" name="player">
    </form>
</body>
</html>

<?php

    $input = $_POST["player"];
    echo $input;

?>