<?php
function runQuery ($query, $values = array()){
	$iterator1 = 1;
	$iterator = 0;
	include './pdo.php';
	try{
		$stmt = $pdo->prepare($query);
		foreach ($values as $bind) {		
			$stmt->bindValue($iterator1, $bind, PDO::PARAM_STR);
			$iterator1++;
			$iterator++;
		}
	$stmt->execute();
	}
	catch (PDOException $e) {
		echo $e->getMessage();
	}
	$result = $stmt->fetchAll();
	return $result;
}


?>