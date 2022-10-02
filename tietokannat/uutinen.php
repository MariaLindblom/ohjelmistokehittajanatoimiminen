<?php
include_once('yhteys.php');
include_once('sisaltaa/uutinen.php');

$uutinen = new Uutinen;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $uutinen->fetch_data($id);

    //print_r($data);
    ?>
    <html>
        <head>
            <title>Uutiset</title>
        </head>
        <body>
            <div class="container">
                <a href="index.php" id="logo">Uutis-sivu</a>
                <h4>
                    <?php echo $data['uutisen_otsikko']; ?> -
                    <small>
                        julkaistu <?php echo date('l jS', $data['uutisen_julkaisuaika']); ?>
                    </small>
                </h4>
                <p><?php echo $data['uutisen_sisalto']; ?></p>
            </div>
        </body>
    </html>

    <?php
} else {
    header('Location: index.php');
    exit();
}

?>