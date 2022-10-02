<?php
include_once('yhteys.php');
include_once('uutinen.php');

//echo time();

$uutinen = new Uutinen;
$uutiset = $uutinen->fetch_all();

//print_r($uutiset);

?>

<html>
    <head>
        <title>Uutiset</title>
        <link rel="stylesheet" href="../tyylit/uutistentyyli.css" />
    </head>
    <body>
        <div class="container">
            <a href="index.php" id="logo">Uutis-sivu</a>
            <ol>
                <?php foreach ($uutiset as $uutinen) { ?>
                    <li>
                        <a href="uutinen.php?id=<?php echo $uutinen['uutisen_id']; ?>">
                            <?php echo $uutinen['uutisen_otsikko']; ?>
                        </a>
                        - <small>
                            julkaistu <?php echo date('l jS', $uutinen['uutisen_julkaisuaika']); ?>
                        </small>
                    </li>
                <?php } ?>
            </ol>
        </div>
    </body>
</html>