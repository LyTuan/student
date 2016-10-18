<?php 
require ('../model/student.php');
function getAll(){
	$array = getAllStudent();
	return $array;

}
