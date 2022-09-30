<?php
include_once('yhteys.php');
include_once('uutinen.php');

$uutinen = new Uutinen;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $uutinen->fetch_data($id);

    print_r($data);
} else {
    header('Location: index.php');
    exit();
}

?>