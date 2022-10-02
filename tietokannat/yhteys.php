<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=20n_1900', '20n_1900', 'Xm[9ZohbE@OPQovp');
} catch (PDOException $e) {
    exit('tietokantavirhe');
}
?>