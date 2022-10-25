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
	
	echo "<h3>■ Users 테이블에 존재하는 레코드의 개수 구하기</h3>";
	echo "<hr>";

	$conn = mysqli_connect ('localhost', 'root', '');   
	mysqli_select_db ($conn, 'test_db');      // 질의 수행

	$sql = "select *from Users";                       // 테이블 검색 질의
	$result = mysqli_query ($conn, $sql);       // 질의 수행
	$countr= mysqli_num_rows ($result);           // 레코드의 개수 구하기
	$countf = mysqli_num_fields ($result);             // 필드의 개수 구하기
	
	echo "<B> ● 테이블 이름 : Users </B><br><br>";
	
?>

<table width='800' height = '100' border='3' bordercolor='black' cellpadding='15'>
	<tr>
		<td bgcolor='gray' align='center'><B> 번호 </B></td> 
		<td bgcolor='gray' align='center'><B> 아이디 </B></td> 
		<td bgcolor='gray' align='center'><B> 비밀번호 </B></td> 
		<td bgcolor='gray' align='center'><B> 이메일 </B></td> 
		<td bgcolor='gray' align='center'><B> 아바타 </B></td> 
		<td bgcolor='gray' align='center'><B> 소개말 </B></td>
		<td bgcolor='gray' align='center'><B> 생성시간 </B></td>
		<td bgcolor='gray' align='center'><B> 사이트 </B></td>
		<td bgcolor='gray' align='center'><B> 친구 </B></td>
		<td bgcolor='gray' align='center'><B> 직업 </B></td>
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

	echo "● 전체 레코드의 수 : <B>[ {$countr} 개 ] </B>";
	mysqli_close($conn);   
	echo " <hr> >> mysql 접속이 종료되었습니다  !!! <br><br>";
	echo " <h>20193205 조상연</h> ";
?>

	
</body>
</html>


