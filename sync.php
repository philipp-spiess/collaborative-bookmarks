<?php

header("Access-Control-Allow-Origin: *");

// setting the awesome password
$password = "240992"; 

if(empty($_GET['password']) || $_GET['password'] != $password) {
	echo json_encode(array(
		"error" => "Wrong Password"
	));
	die();
}

/**
 * This function is for inserting a value 
 */

function array_insert($src,$ins,$pos,$rep=0) { 
  array_splice($src,$pos,$rep,$ins); 
  return($src); 
} 


$list = json_decode(file_get_contents("sync.json"));

echo json_encode($list);


