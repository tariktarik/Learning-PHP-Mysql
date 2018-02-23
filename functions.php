<?php

function dd($data){
	die(var_dump($data));
}


function verify_age($age){
	if($age >= 21) {		
		echo 'welcome';
	} else {
		echo 'out';
	}

}

function connectToDb() 
{

	try {

	return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');

} catch (PDOException $e) {

	die($e->getMessage());
}

}


function fetchAllTasks($pdo)
{

	$statement = $pdo->prepare('select * from todos');

$statement->execute();

return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}