<?php
    $candi_num=$_POST['candi_num'];


    include "../lib/connect_db.php";

    $sql = "select * from member where num=$candi_num";
    $result=mysqli_query($connect, $sql);
    $row=mysqli_fetch_array($result);
    $image=$row['image'];
    if($image!=NULL)
    {
      unlink($image);  //이미지 파일 삭제
    }

    $sql = "delete from member where num=$candi_num"; // 테이블 검색 질의
    $result = mysqli_query ($connect, $sql);          // 질의 수행


    if($result==1)
    {
      echo "success";
    }
    else {
      echo "fail";
    }

    mysqli_close($connect);
?>
