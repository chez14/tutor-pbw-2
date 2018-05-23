<?php
session_start();

if(isset($_GET['clear'])){
    session_destroy();
}

function get_back() {
    return end(array_values($_SESSION['histori']));
}

function go_back() {
    $asal = array_pop($_SESSION['histori']);
    $_SESSION['was_back'] = true;
    header("Location: " . $asal['url']);
}

function push($data) {
    $_SESSION['histori'][] = $data;
}

if(isset($_GET['back'])) {
    go_back();
    die();
}