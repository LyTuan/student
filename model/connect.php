<?php
// Lấy ra một mảng 2 chiều chứa 1 bảng. Của bảng $table từ $database
// Param : $database và $table
function getTable($database, $table){
	$conn = mysql_connect("localhost","root","") or die("Không thể kết nối");
	mysql_select_db($database,$conn);
	$query = mysql_query("select * from ".$table);
	if($query==false){
		echo mysql_error();
	}
	if(mysql_num_rows($query)==0){
		echo "Không có dữ liệu";
	}else{

		while ($array = mysql_fetch_array($query)) {
			$json[]= $array;
		}
		return $json;

	}
	mysql_close($conn);
}


//Lấy ra một bảng gồm các giá trị có đối số là $paramSelect và tham số là $valueSelect
function getByValue($database,$table, $paramSlect, $valueSelect){
	$conn = mysql_connect("localhost","root","") or die("Không thể kết nối");
	mysql_select_db($database,$conn);
	$query = mysql_query("select * from ".$table." where ".$paramSlect."=".$valueSelect);
	if(mysql_num_rows($query)==0){
		echo "Không có dữ liệu";
	}else{

		while ($array = mysql_fetch_array($query)) {
			$json[]= $array;
		}
		return $json;

	}
	mysql_close($conn);
}


