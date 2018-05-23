<?php 
    $error = null;
    function proses() {
        global $error;

        if(strlen($_GET['teks']) >= 10) {
            $error = "Teks tidak boleh lebih dari 10 huruf!";
            return false;
        }

        $angka = intval($_GET['angka']);
        if($angka < 1 || $angka > 10) {
            $error = "Angka harus antara 1-10!";
            return false;
        }

        return true;
    }
    $oke = false;

    if(isset($_GET['teks']) && isset($_GET['angka'])) {
        $oke = proses();
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
<?php if($oke): ?>
    <?php for($i=0; $i<$_GET['angka']; $i++): ?>
        <p><?= $_GET['teks'] ?></p>
    <?php endfor; ?>
<?php else: ?>
    <form action="form.php">
        <p><?= $error ?></p>
        <label for="">
            Massukan sebuah teks maksimum 10 huruf.
            <input type="text" name="teks">
        </label><br/>
        <label for="">
            Massukan angka antara 1-10.
            <input type="text" name="angka">
        </label>
        <input type="submit">
    </form>
<?php endif; ?>
</body>
</html>