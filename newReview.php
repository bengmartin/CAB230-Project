<?php	
	function addReview($parkID, $parkName, $User, $Review, $Description){
		include "pdo.php";
		try{			
			$stmt = $pdo->prepare('INSERT INTO reviews (parkID, parkName, User, Review, Description )
										VALUES (:parkID, :parkName, :User , :Review, :Description)');
			$stmt->bindValue(':parkID', $parkID);
			$stmt->bindValue(':parkName', $parkName);
			$stmt->bindValue(':User', $User);
			$stmt->bindValue(':Review', $Review);
			$stmt->bindValue(':Description', $Description);
			$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
		
?>