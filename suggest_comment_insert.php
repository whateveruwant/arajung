<?php
    session_start();
    $level=$_SESSION['ses_level'];

    //오늘 날짜
    $regist_day=date("Y-m-d H:i:s", strtotime("+9 hour"));  //한국시간으로 변경

    //POST방식으로 전송받음
    $suggest_num = $_POST['suggest_num'];
    $content = $_POST['content'];
    $nick_name = $_POST['nick_name'];

  include "./lib/connect_db.php";        //DB접속 파일 호출
  $sql="insert into tbl_comment (parent_num, content, regist_day, nick_name, level) values ('$suggest_num', '$content', '$regist_day', '$nick_name', '$level')";
  $result=mysqli_query($connect, $sql);

  $sql="update tbl_suggest set comment_count=comment_count+1, hit=hit-1 where num=$suggest_num";
  mysqli_query($connect, $sql);


  mysqli_close($connect);


  if($result==1)  //1 반환 : 정상적으로 삽인된 경우
  {
      echo "success";
  }
  else {
      echo "fail";
  }

?>
