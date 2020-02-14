<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1">
    <link rel="stylesheet" href="chat.css">
    <title>Document</title>
</head>


<body>
    <?php
    $arr = file("mess.txt");
    include('config.php');
    foreach ($arr as $value) {
        $chat = explode("$separator", $value);
        echo "<div class='csss'>$chat[2] : $chat[3]</div>";
        // echo "<div class = '" . (($key % 2) ? 'odd' : 'even') . "'> $value </div>";
    }
    
    ?>
</body>

</html>