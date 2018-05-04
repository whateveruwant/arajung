<?php
	$host = "localhost";      //호스트 이름
	$user = "root";            //사용자 계정
	$passwd = "samuel!@1630";   //비밀번호
	$connect = mysqli_connect($host, $user, $passwd) or die("mysql서버 접속 에러");
	$db = mysqli_select_db($connect, 'arajung');
	mysqli_select_db($connect, 'arajung') or die("DB 접속 에러");      //my_db 선택

	/* ---------- 한글 깨짐 방지 코드 -----------------*/
	mysqli_query($connect, "set session character_set_connection=utf8;");
	mysqli_query($connect, "set session character_set_results=utf8;");
	mysqli_query($connect, "set session character_set_client=utf8;");

?>
