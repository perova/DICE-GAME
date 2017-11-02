<?php
header("Content-type:application/json");
session_start();




try {
	$conn = new PDO("mysql:host=localhost;dbname=dice_game;charset=utf8", "root", "");
        // set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



	if(isset($_POST["result"]) && $_POST["result"]>0 && $_SESSION["username"])
	{

		$statement = $conn->prepare("INSERT INTO game (username, result)
			VALUES (:username, :result)");
		$statement->bindParam(':username', $_SESSION['username']);
		$statement->bindParam(':result', $_POST['result']);
		$statement->execute();


	} elseif(isset($_GET['me']) ){
		$statement = $conn->prepare("SELECT * FROM  game WHERE username= :username
		");
		$statement->bindParam(':username', $_SESSION['username']);
		$statement->execute();

			// gaunam is db 

		 $response = $statement->fetchAll(PDO::FETCH_ASSOC);

	// } elseif() {


	// 		// gaunam is db 

	// 	// $response = ...

	 }






} catch (PDOException $e) {
	$response['message'] = ['type' => 'danger', 'body' => $e->getMessage()];
}

//}    
// } else {
//     $response['message'] = ['type' => 'warning', 'body' => 'No data to submit'];
// }
echo json_encode($response);
//echo json encode;

//responce game, 

//select from games

// usename is sesijos atkeliauja o result is post




// , jei tik to vartotojo, tia yra kuri sprisijunges, tai su get(me)

// ir imame tik is sesijos i su get, tai select game where username = username) nereikia values,


// su chart , $.getJason('game.php');
// { me}