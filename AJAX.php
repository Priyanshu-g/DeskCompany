<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$TotalCost = $_REQUEST['Final'];
$height = $_REQUEST['height'];
$length = $_REQUEST['length'];
$width = $_REQUEST['width'];
$wood = $_REQUEST['wood'];

$link = mysqli_connect('localhost', 'root', '');
if (!$link){
	$output = 'Unable to connect to the database server ';
	echo $output;
}


if (!mysqli_set_charset($link, 'utf8')){
	$output = 'Unable to set database connection encoding ';
	echo $output;
}


if (!mysqli_select_db($link, 'deskassignment')){
	$output = 'Unable to locate the deskassignment database ';
	echo $output;
}

$sql = "INSERT INTO orders (ClientName, ClientEmail, TotalCost, Height, Length, Width, WoodType)
	VALUES ('$name', '$email', '$TotalCost', '$height', '$length', '$width', '$wood')";
	
if ($link->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}


$res = "$name $email";
echo $res;
?>