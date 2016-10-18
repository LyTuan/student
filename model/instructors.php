<?php
require ('connect.php');
$DATABASE = 'tornado';
$TABLE = 'instructors';

//Model thao tác với bảng instructors (Bảng thông tin người hướng dẫn)
// Lấy thông tin của 1 Instructor có id là $InstructorId
function getInstructor($InstructorId){
	$array=getByValue($DATABASE,$TABLE,'InstructorID',$InstructorId);
	return $array;
}

//Lấy thông tin của tất cả người hướng dẫn
function getAllInstructor(){
	$array =getByID($DATABASE,$TABLE);
	return $array;
}


