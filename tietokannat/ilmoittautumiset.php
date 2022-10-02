<?php
$etunimi = $_POST["enimi"];
$sukunimi = $_POST["snimi"];
$sahkoposti = $_POST["sposti"];
$koulutalo = $_POST["koulu"];
$valinta = $_POST["kurssit"];
$viesti = $_POST["viesti"];

$conn = new mysqli('localhost','20n_1900','Xm[9ZohbE@OPQovp','20n_1900');
if($conn->connect_error){
	die('Yhdistyminen ei onnistunut : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("INSERT INTO 20n_1900.ilmoittumiset(etunimi, sukunimi, sahkoposti, koulutalo, valinta, viesti)
	VALUES(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssss",$etunimi, $sukunimi, $sahkoposti, $koulutalo, $valinta, $viesti);
	$stmt->execute();
	echo "Ilmoittuminen onnistui...";
	$stmt->close();
	$conn->close();
}

?>