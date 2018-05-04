<?php

    //오늘 날짜
    $regist_day=date("Y-m-d H:i:s", strtotime("+9 hour"));  //한국시간으로 변경

    //POST방식으로 전송받음
    $title=$_POST['title'];
    $content = $_POST['content'];
    $id = $_POST['id'];
    $candidate = $_POST['candidate'];
    $nick_name=$_POST['nick_name'];


  include "./lib/connect_db.php";        //DB접속 파일 호출
  $sql="insert into tbl_suggest (title, content, regist_day, id, candidate, nick_name) values ('$title', '$content', '$regist_day', '$id', '$candidate', '$nick_name')";
  $result=mysqli_query($connect, $sql);
  mysqli_close($connect);


  if($result==1)  //1 반환 : 정상적으로 삽인된 경우
  {
      echo "success";
  }
  else {
      echo "fail";
  }

?>
