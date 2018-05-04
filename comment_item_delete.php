<?php
    $num=$_POST['num'];
    $suggest_num=$_POST['suggest_num'];

    include "./lib/connect_db.php";

    $sql = "delete from tbl_comment where num=$num"; // 테이블 검색 질의
    $result = mysqli_query ($connect, $sql);          // 질의 수행

    $sql="update tbl_suggest set comment_count=comment_count-1, hit=hit-1 where num=$suggest_num";
    mysqli_query($connect, $sql);

    if($result==1)
    {
      echo "success";
    }
    else {
      echo "fail";
    }

    mysqli_close($connect);
?>
