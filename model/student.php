<?php
require ('connect.php');

$DATABASE = 'tornado';
	$TABLE = 'students';
// Lấy thông tin của 1 student có id là $studentID
function getStudent($studentId){
	
	global $DATABASE,$TABLE;
	$array=getByValue($DATABASE,$TABLE,'StudentID',1);
	return $array;
}

//Lấy thông tin của tất cả student
function getAllStudent(){
	global $DATABASE,$TABLE;
	
	$array =getTable($DATABASE,$TABLE);
	return $array;
}



