<?php

try
{
$db = new PDO("mysql:host=mysql.labranet.jamk.fi;dbname=H9575_2", "H9575", "7ahaqDkFKfb2Oljcrm4J9avJBY0b5SR8");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$statement = 'INSERT INTO `pelaajat` (`etunimi`,`sukunimi`,`pisteet`) VALUES ("'.$_GET['fname'].'","'.$_GET['lname'].'","'.$_GET['score'].'");';

$db->exec("$statement");

}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

?>