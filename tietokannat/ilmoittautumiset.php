<?php
$server = '194.197.245.5';
$user = '20n_1900';
$pass = 'Xm[9ZohbE@OPQovp';

$connect = ftp_connect($server) or die('Yhdistyminen ei onnistunut.');

if(ftp_login($connect, $user, $pass)) {
    echo 'Yhdistyminen onnistui.';
}

?>