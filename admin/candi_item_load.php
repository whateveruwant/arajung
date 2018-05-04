<?php
    $comment_num=$_POST['comment_num'];

    include "../lib/connect_db.php";        //DB접속 파일 호출

    $sql="select * from tbl_comment where num=$comment_num";
    $result=mysqli_query($connect, $sql);
    $rows=mysqli_fetch_array($result);     // 레코드의 개수만큼 반복
    $nick_name=$rows['nick_name'];

    //후보자 이름으로 정보가져오기
    $sql="select * from member where nick_name='$nick_name'";
    $result=mysqli_query($connect, $sql);
    $rows=mysqli_fetch_array($result);     // 레코드의 개수만큼 반복
    mysqli_close($connect);


    $age=$rows['age'];
    $education=$rows['education'];
    $carrer=nl2br($rows['carrer']);
    $one_word=nl2br($rows['one_word']);
    $image=$rows['image'];

    $arr = Array($nick_name, $age, $education, $carrer, $one_word, $image);
    echo json_encode($arr);

 ?>
