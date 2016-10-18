<?php
require ('connect.php');
$DATABASE = 'tornado';
$TABLE = 'reports';


//Get all value in table reports
function getReport(){
	$array = getTable($DATABASE,$TABLE);
	return $array;
}


//Get a value by ReportID
function getRportById($reportsID){
	$array = getByValue($DATABASE,$TABLE,'ReportID',$reportsID);
	return $array;
}