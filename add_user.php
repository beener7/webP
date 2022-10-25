<?php
	
	$number = $_POST['number'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$site = $_POST['site'];
	$field = $_POST['field'];
    $introduce = $_POST['introduce'];
	

	echo "<h3>■ mysqli_connect 함수 사용</h3>";
	echo "<hr>";

	$db_host = "localhost";
	$db_user = "root";
	$db_passwd = "";
	
	$conn = mysqli_connect($db_host, $db_user, $db_passwd);   // mysql 관리자 계정으로 접속
	$db = mysqli_select_db($conn, 'test_db');

	if($conn)
	{
		echo "> mysql 서버에 성공적으로 연결되었습니다. <br><br>";
		echo " o 호스트 : ".$db_host."<br>";
		echo " o 사용자 : ".$db_user."<br>";
		echo " o 패스워드 : ".$db_passwd."<br><br>";		
		echo "> 성공적인 APM의 고수가 되십시오. <br>";
		echo "<hr>";
	} else {
		echo "<hr>";
		echo "..... 접속이 안 됩니다..... <br>";
		echo "계정 또는 비밀번호를 확인 하십시요 !!! <br>";
	}
	

	if($db)
	{
		echo " ★ 데이터베이스 선택 성공 ..... <br><br>";
		echo " ..... 선택한 데이터베이스는 <B> 'test_db' </B>입니다.<br><br>";
		echo "<hr>";
	} 
	else 
	{
		echo "<hr>";
		echo "▲ 데이터베이스 선택에 실패했습니다 .....  <br><br>";
		echo "...... 함수 또는 문장, 데이터베이스 명의 오류를 검토하십시요  !!! <br>";
	}

 /*  --------    PHP와 MySQL 한글 깨짐 방지  --------   */

	mysqli_query($conn, "set session character_set_connection=utf8;");		 
	mysqli_query($conn, "set session character_set_results=utf8;");		 
	mysqli_query($conn, "set session character_set_client=utf8;");	

	$sql = "INSERT INTO Users(id,username,password,email,avatar,introduction,site,field)
						VALUES('$number','$username','$password','$email',NULL,'$introduce','$site','$field')";
	mysqli_query($conn, $sql);



		mysqli_close($conn);   
		echo " ▣ mysql 접속이 종료되었습니다  !!!";

?>
