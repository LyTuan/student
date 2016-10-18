<?php
require ('connect.php');
$DATABASE = 'tornado';
$TABLE = 'results';

//Model thao tác với bảng results(Bảng thông tin kết quả, bảng điểm)
// Lấy thông tin của 1 Results có id là $ResultsId
function getResult($ResultsId){
	$array=getByValue($DATABASE,$TABLE,'ResultsID',$ResultsId);
	return $array;
}

//Lấy thông tin của tất cả kết quả
function getAllResults(){
	$array =getByID($DATABASE,$TABLE);
	return $array;
}


