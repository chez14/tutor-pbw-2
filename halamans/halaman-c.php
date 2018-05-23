<?php
    include("session.php");
    $last = get_back();
    $halaman = "Halaman C";    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if($last): ?>
        <a href="?back">Go back to <?= $last['name']?></a>
    <?php endif;?>
    <h1>Halaman C</h1>
    
    <?php include("pagination.php"); ?>
</body>
</html>