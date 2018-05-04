<?php
    include "./lib/connect_db.php";        //DB접속 파일 호출

    $fid = $_POST['id'];               //POST방식으로 전송받음(로그인 폼의 id)
    $fpasswd = $_POST['password'];     //POST방식으로 전송받음(로그인 폼의 비밀번호)


    $sql="select * from member where id='$fid' and password='$fpasswd'";
    $res=mysqli_query($connect, $sql);
    $list = mysqli_num_rows($res);


    if($list)        //일치하는 사용자 레코드 수가 1건 이상이면
    {
      session_start();
      $row=mysqli_fetch_array($res);
      $_SESSION['ses_id']=$fid;
      $_SESSION['ses_level']=$row['level'];
      $_SESSION['ses_nick_name']=$row['nick_name'];
        echo "success";
    }
    else {
        echo "fail";
    }

    mysqli_close($connect);
?>
