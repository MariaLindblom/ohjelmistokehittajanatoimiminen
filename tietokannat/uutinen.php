<?php
class Uutinen {
    public function fetch_all() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM 20n_1900.uutiset");
        $query->execute();

        return $query->fetchAll();
    }

    public function fetch_data($uutisen_id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM uutiset WHERE uutisen_id = ?");
        $query->bindValue(1, $uutisen_id);
        $query->execute();

        return $query->fetch();
    }
}

?>