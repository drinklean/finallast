<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
mb_internal_encoding("UTF-8");
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="hihi.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hee-hee</title>
</head>

<body>

<form action="index.php" method="post">
<input type="text" name="surname" placeholder="фамилия">
<input type="text" name="group" placeholder="группа">
<input type="number" name="variant" placeholder="вариант от 1 до 31" max="31" min="1">
<input type="submit" name="login">
</form>

</body>
</html>