<?php
  error_reporting(0);  //에러메시지 안보이게 하기
  include "./lib/connect_db.php";        //DB접속 파일 호출


  $suggest_num = $_POST['suggest_num'];
  $like_count=$_POST['like_count'];
  //$like_id=$_POST['like_id'];

  $sql2="select * from tbl_suggest where num=$suggest_num";
  $result2=mysqli_query($connect, $sql2);
  $rows2=mysqli_fetch_array($result2);
  $like_id=$rows2['like_id'];

  $id=$_POST['id'];
  //해당 id가 $like_id 변수에 존재하는지 확인
  //존재할 경우 id를 추가 및 카운팅을 하지 않는다.

  if(strpos($like_id, $id) !== false) {
      //포함하는 경우
  } else {
    $like_id=$like_id." ".$id;
    $like_count+=1;


    $sql="update tbl_suggest set like_count=$like_count, like_id='$like_id', hit=hit-1 where num=$suggest_num";
    $result=mysqli_query($connect, $sql);
  }

  mysqli_close($connect);
  echo $like_count;

?>
