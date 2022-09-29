<?php
try {
    $pdo = new PDO('mysgl:host=localhost;dbname:20n_1900', '20n_1900', 'Xm[9ZohbE@OPQovp');
} catch (PDOException $e) {
    exit('tietokantavirhe');
}

/* $server = '194.197.245.5';
$user = '20n_1900';
$pass = 'Xm[9ZohbE@OPQovp';

$connect = ftp_connect($server) or die('Yhdistyminen ei onnistunut.');

if(ftp_login($connect, $user, $pass)) {
    echo 'Yhdistyminen onnistui.';
}
*/

?>