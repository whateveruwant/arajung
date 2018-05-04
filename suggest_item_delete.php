<?php

    $suggest_num=$_POST['suggest_num'];

    include "./lib/connect_db.php";

    $sql="delete from tbl_suggest where num=$suggest_num";
    $result=mysqli_query($connect, $sql);

    if($result==1)
    {
      echo "success";
    }
    else {
      echo "fail";
    }

    mysqli_close($connect);
?>
