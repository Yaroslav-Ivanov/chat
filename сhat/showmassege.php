<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="?" method="POST">
    <input type="text"  name="name" value="<?=$_POST['name']?>" >
    <input type="text" name="chat">  
    <input type="submit" value="ok">
    </form>
    
<?php
     if (!empty($_POST["name"])) {
        file_put_contents("mess.txt",$_POST["name"].":". $_POST["chat"] ."\n", FILE_APPEND );
    }
 
?>
</body>
</html>