<a href="halaman-a.php">Hal. A</a> 
<a href="halaman-b.php">Hal. B</a> 
<a href="halaman-c.php">Hal. C</a> 
<br>
<a href="?clear=true">Clear Session</a>

<?php 
    if(!isset($_SESSION['was_back']) || (isset($_SESSION['was_back']) && !$_SESSION['was_back'])) {
        push([
            "name"=> $halaman,
            "url" => $_SERVER['REQUEST_URI']
        ]);
    }
    unset($_SESSION['was_back']);
?>
<pre>
<?php var_dump($_SESSION['histori']); ?>
</pre>