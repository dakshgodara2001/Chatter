<?php

require("DBInfo.inc");


$query ="select * from login  where email='" . $_GET['email'] ."' and password='" . $_GET['password'] ."'" ;
$result= mysqli_query($connect,$query);

if (!$result){
	die(' Error cannot run query');
}

$userInfo=array();
while ($row= mysqli_fetch_assoc($result)) {
	
	$userInfo[]= $row ;
	break; // to be save
}

if ($userInfo) {
print("{'msg':'pass login','info':'". json_encode($userInfo) ."'}");
}else{
print("{'msg':'cannot login' }");
}

 mysqli_free_result($result);
mysqli_close($connect);
?>