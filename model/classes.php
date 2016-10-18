<?php
require ('connect.php');
$DATABASE = 'tornado';
$TABLE = 'classes';

// Lấy thông tin của 1 classes có id là $ClassId
function getClasses($ClassId){
	$array=getByValue($DATABASE,$TABLE,'ClassID',$ClassId);
	return $array;
}

//Lấy thông tin của tất cả Classes
function getAllClasses(){
	$array =getByID($DATABASE,$TABLE);
	return $array;
}

