<?php
    $sql = new mysqli("localhost", "latihan_pbw", "", "latihan_pbw");
    if($sql->errno) {
        die("SQL not correctly configured.");
    }
    $results = [];
    if(isset($_GET['q'])){
        $prepared = $sql->prepare("SELECT * FROM name_meaning where `name` like ?");
        $_GET['q'] = "%" . $_GET['q'] . "%";
        $prepared->bind_param("s", $_GET['q']);
        $prepared->execute();
        $results = $prepared->get_result()->fetch_all(MYSQLI_ASSOC);
    }
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
<?php if(isset($_GET['q'])): ?>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Arti</th>
    </tr>
    <?php foreach($results as $res): ?>
    <tr style="color: <?= ($res['gender']==0)?"#000":"#f00"?>">
        <td><?= $res['name'] ?></td>
        <td><?= $res['meaning'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <form action="cari.php" method="get">
        Cari nama: <input type="text" name="q"><br/>
        <input type="submit">
    </form>
<?php endif;?>
</body>
</html>