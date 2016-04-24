<?php

try
{
	// Database connection init.
	$db = new PDO("mysql:host=178.62.246.71;dbname=drugbank_01", "teamf", "SDIbasd/#bd4sd");	
	
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	// Sql statement what selects Brand, Substance, Form, Classification from table medicine.
	$statement = 'SELECT brand.Brand, active_substance.Substance, form.Form, classification.Classification FROM medicine
				INNER JOIN brand on brand.PrimaryKey = medicine.Brand
				INNER JOIN active_substance on active_substance.PrimaryKey = medicine.Brand
				INNER JOIN form on form.PrimaryKey = medicine.Form
				INNER JOIN classification on classification.PrimaryKey = medicine.Classification
				ORDER BY RAND() LIMIT 2';
				
	// Sql statement what selects Brand, Substance, Form, Classification from table medicine.
	//$statement = 'SELECT brand.Brand, active_substance.Substance, form.Form, classification.Classification FROM medicine
	//			INNER JOIN brand on brand.PrimaryKey = medicine.Brand
	//			INNER JOIN active_substance on active_substance.PrimaryKey = medicine.ActiveSubstance
	//			INNER JOIN form on form.PrimaryKey = medicine.Form
	//			INNER JOIN classification on classification.PrimaryKey = medicine.Classification
	//			ORDER BY RAND() LIMIT 2';
	
	// Executes an SQL statement, returning a result set as a PDOStatement object.
	$stmt = $db->query($statement);
	
	// Return all rows as an array.
	$results = $stmt->fetchAll(PDO::FETCH_NUM);
	
	// Concat info to results. (difficulty level 1)
	//$resultsInfo[0][0] = "Brand: " . $results[0][0];
	//$resultsInfo[0][1] = "Substance: " . $results[0][1];
	//$resultsInfo[1][0] = "Brand: " . $results[1][0];
	//$resultsInfo[1][1] = "Substance: " . $results[1][1];
	
	// Concat info to results. (difficulty level 2)
	//$resultsInfo[0][2] = "Form: " . $results[0][2];
	//$resultsInfo[1][2] = "Form: " . $results[1][2];
	
	// Concat info to results. (difficulty level 3)
	//$resultsInfo[0][3] = "Class: " . $results[0][3];
	//$resultsInfo[1][3] = "Class: " . $results[1][3];
	
	// Concat info to results. (difficulty level 1)
	$resultsInfo[0][0] = $results[0][0];
	$resultsInfo[0][1] = $results[0][1];
	$resultsInfo[1][0] = $results[1][0];
	$resultsInfo[1][1] = $results[1][1];
	
	// Concat info to results. (difficulty level 2)
	$resultsInfo[0][2] = $results[0][2];
	$resultsInfo[1][2] = $results[1][2];
	
	// Concat info to results. (difficulty level 3)
	$resultsInfo[0][3] = $results[0][3];
	$resultsInfo[1][3] = $results[1][3];
}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}

?>
	