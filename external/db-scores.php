<?php

try
{
$db = new PDO("mysql:host=mysql.labranet.jamk.fi;dbname=H9575_2", "H9575", "7ahaqDkFKfb2Oljcrm4J9avJBY0b5SR8");

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$statement = 'SELECT * FROM pelaajat ORDER BY pisteet DESC LIMIT 5';

// Executes an SQL statement, returning a result set as a PDOStatement object.
$stmt = $db->query($statement);
	
// Return all rows as an array.
$results = $stmt->fetchAll(PDO::FETCH_NUM);

echo $results[0][1] . " " . $results[0][2] . " " . $results[0][3] . "<br>";
echo $results[1][1] . " " . $results[1][2] . " " . $results[1][3] . "<br>";
echo $results[2][1] . " " . $results[2][2] . " " . $results[2][3] . "<br>";
echo $results[3][1] . " " . $results[3][2] . " " . $results[3][3] . "<br>";
echo $results[4][1] . " " . $results[4][2] . " " . $results[4][3] . "<br>";
echo "<br>";

}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

?>
