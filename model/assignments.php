<?php
require ('connect.php');
$DATABASE = 'tornado';
$TABLE = 'assignments';

// Lấy thông tin của 1 AssignmentId có id là $AssignmentId
function getAssignments($AssignmentId){
	$array=getByValue($DATABASE,$TABLE,'AssignmentId',$AssignmentId);
	return $array;
}

//Lấy thông tin của tất cả student
function getAllAssignments(){
	$array =getByID($DATABASE,$TABLE);
	return $array;
}


