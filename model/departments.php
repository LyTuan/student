<?php
require ('connect.php');
$DATABASE = 'tornado';
$TABLE = 'departments';

// Lấy thông tin của 1 departmentsId có id là $DepartmentsId
function getClasses($DepartmentsId){
	$array=getByValue($DATABASE,$TABLE,'DepartmentsID',$DepartmentsId);
	return $array;
}

//Lấy thông tin của tất cả Classes
function getAllDepartments(){
	$array =getByID($DATABASE,$TABLE);
	return $array;
}

