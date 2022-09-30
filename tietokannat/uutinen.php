<?php
class Uutinen {
    public function fetch_all() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM 20n_1900.uutiset");
        $query->execute();

        return $query->fetchAll();
    }
}

?>