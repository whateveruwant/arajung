<?php
    //오늘 날짜
    $regist_day=date("Y-m-d H:i:s", strtotime("+9 hour"));  //한국시간으로 변경

    //POST방식으로 전송받음
    $id = $_POST['id'];
    $password = $_POST['password'];
    $nick_name = $_POST['nick_name'];



  include "./lib/connect_db.php";        //DB접속 파일 호출

  $sql="select * from member where id='$id'";
  $result=mysqli_query($connect, $sql);
  $list = mysqli_num_rows($result);

  if($list)
  {
    echo "duplicate";  //중복 id 가 있는 경우
  }
  else {
    $sql="insert into member (id, password, nick_name, level, regist_day) values ('$id', '$password', '$nick_name', 'user', '$regist_day')";
    $result=mysqli_query($connect, $sql);

    if($result==1)  //1 반환 : 정상적으로 삽인된 경우
    {
        echo "success";
    }
    else {
        echo "fail";
    }
  }

  mysqli_close($connect);
?>
