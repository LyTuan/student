<?php
require ('connect.php');
$DATABASE = 'tornado';
$TABLE = 'students_and_classes';

// Lấy thông tin của 1  có id là $StudentClassID
function getStudentClass($StudentClassID){
	$array=getByValue($DATABASE,$TABLE,'StudentClassID',$StudentClassID);
	return $array;
}

//Lấy thông tin của tất cả các dòng trong bảng students_and_classes
function getAllStudentClass(){
	$array =getByID($DATABASE,$TABLE);
	return $array;
}


