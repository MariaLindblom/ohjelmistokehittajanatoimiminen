<?php
// Alla olevat testejä varten, lopullisesta pois tietoturvan takia
@ini_set("display_errors", 1);
@ini_set("error_reporting", E_ALL);
// Otetaan yhteys tietokantapalvelimeen
include("yhteys.php");
// versio 1: haetaan tekstilaatikoiden sisällöt muuttujiin
$etunimi = $_POST["enimi"];
$sukunimi = $_POST["snimi"];
$sahkoposti = $_POST["sposti"];
$koulutalo = $_POST["koulu"];
$valinta = $_POST["kurssit"];
$viesti = $_POST["viesti"];
echo "$etunimi .. $sukunimi .. $sahkoposti .. $koulutalo .. $valinta .. $viesti <br>";
// Versio 2: muodostetaan SQL-lause ja echotetaan se, jotta voidaan tarkistaa onko ok
$sql = "INSERT INTO taulukko (Etunimi, Sukunimi, Sahkoposti, Koulutalo, Kurssivalinta, Viesti) 
VALUES ('$etunimi', '$sukunimi', '$sahkoposti', '$koulutalo', '$valinta', '$viesti')";
// echo $sql;
try { 
		$tiedot = $yhteys->prepare($sql); 
		$tiedot->execute(); 
	} catch (PDOException $e) { 
	die("VIRHE NRO 2: " . $e->getMessage()); 
}

?>