<!DOCTYPE html>
<html>
<head>
	<title>Quản lí sinh viên</title>
	<meta charset="utf-8" lang="vi">
	<link rel="stylesheet" type="text/css" href="../../public/css/mystyle.css">
	

</head>
<body>
	<table>
		<caption>Bảng quản lí sinh viên</caption>
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên</th>
				<th>Thành Phố</th>
			</tr>
		</thead>
		<tbody>
		<?php require('../../controller/studentController.php');?>
			<?php 
				$array = getAllStudent();
				for($i=0; $i<sizeof($array); $i++){
					echo ('<tr><td>'.$array[$i]['StudentID'].'</td>'.'<td>'.$array[$i]['LastName'].'</td><td>'.$array[$i]['City'].'</td>');
				}
			?>
		</tbody>
	</table>
	
</body>
</html>