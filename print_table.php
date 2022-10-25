<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Users</title>

	<link rel="stylesheet" href="./style.css" type="text/css">
</head>

<body>
<?php 
	echo "<h1> Project: FourB</h1>";
	echo "<h2>FourB All Users</h2>";
	
	echo "<h3>■ guest 테이블에 존재하는 레코드의 개수 구하기</h3>";
	echo "<hr>";

	$conn = mysqli_connect ('localhost', 'root', '');   
	mysqli_select_db ($conn, 'teamP');      // 질의 수행

	$sql = "select *from Users";                       // 테이블 검색 질의
	$result = mysqli_query ($conn, $sql);       // 질의 수행
	$countr= mysqli_num_rows ($result);           // 레코드의 개수 구하기
	$countf = mysqli_num_fields ($result);             // 필드의 개수 구하기
	
	echo "<B> ● 테이블 이름 : guest </B><br><br>";
	
?>

<table width='600' border='2' bordercolor='blue' cellpadding='10'>
	<tr>
		<td bgcolor='#FFFF00' align='center'><B> 아이디 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 성명 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 성별 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 나이 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 포인트 </B></td> 
		<td bgcolor='#FFFF00' align='center'><B> 이메일 </B></td>
	</tr>	

<?php

	while ($rows=mysqli_fetch_row($result))     // 레코드의 개수만큼 반복
	{
		echo "<tr>";
		for ($a = 0; $a < $countf; $a++)          // 필드의 수만큼 반복
		{
			echo "<td> $rows[$a] </td>";
		}
		echo "</tr>";
	}

	?>

</table><br>

<?php

	$row_count = mysqli_num_rows($resultr);    // 레코드 개수 구하기
	echo "● 전체 레코드의 수 : <B>[ {$row_count} 개 ] </B>";
	mysqli_close($conn);   
	echo " <hr> >> mysql 접속이 종료되었습니다  !!! ";

?>

	
</body>
</html>



