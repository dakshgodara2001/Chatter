
<?php

require("DBInfo.inc");


$query ="insert into login (first_name,email,password,picture_path) values ('" . $_GET['first_name'] . "','" . $_GET['email'] . "','" . $_GET['password'] . "','" . $_GET['picture_path'] . "')" ;
$result= mysqli_query($connect,$query);

if (!$result){
	$output ="{ 'msg':'fail'}" ;
}else{
	$output ="{ 'msg':'user is added'}" ;
}

print($output);

mysqli_close($connect);
?>