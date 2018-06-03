<?php
      session_start();

      $ses_nick_name="";

      if(isset($_SESSION['ses_nick_name']))
      {
         $ses_nick_name=$_SESSION['ses_nick_name'];
      }


      $suggest_num=$_GET['suggest_num'];

      include "./lib/connect_db.php";        //DB접속 파일 호출

      // 조회수 1 증가
      $sql="update tbl_suggest set hit=hit+1  where num=$suggest_num";
      mysqli_query($connect, $sql);


      $sql="select * from tbl_suggest where num=$suggest_num order by num desc";
      $result=mysqli_query($connect, $sql);

      while ($rows=mysqli_fetch_array($result))     // 레코드의 개수만큼 반복
      {
        $num=$rows['num'];
        $nick_name=$rows['nick_name'];
        $title=$rows['title'];
        $content=nl2br($rows['content']);
        $regist_day=$rows['regist_day'];
        $hit=$rows['hit'];
        $comment_count=$rows['comment_count'];
        $like_count=$rows['like_count'];
        $image=$rows['image'];

        echo "<div class='list-group'>";
        echo  "<p id='suggest_title'><strong>$title</strong></p>";

        if($image != null)
        {
          echo  "<p id='suggest_title'><strong>$title</strong></p>";
        }

        echo  "<p id='suggest_content'>$content</p>";
        echo	"<p><img id='image_writer' src='image/writer.svg' width=15> $nick_name</p>";
        echo	"<span><img id='image_hit' src='image/hit.svg' width=15>&nbsp;  $hit</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo  "<span><img id='image_comment' src='image/comment.svg' width=15>&nbsp;  $comment_count</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

        if($ses_nick_name!="")
        {
          echo  "<span style='cursor:pointer'><img id='image_like' src='image/like_2.svg' width=15 onclick='like()'>&nbsp; <span id='count'> $like_count</span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        else {
          echo  "<span style='cursor:pointer' data-toggle='modal' href='#login_request_Modal'><img id='image_like' src='image/like_2.svg' width=15'>&nbsp; <span id='count'> $like_count</span></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }

        echo "<small>$regist_day </small>&nbsp;&nbsp;";
        if(($ses_nick_name==$nick_name) or ($ses_nick_name=='관리자') )
        {
            echo " <span style='cursor:pointer'  style='text-decoration:none' onclick='del_suggest($suggest_num)' href='#'><img id='image_delete' src='image/delete_2.svg' width=15></span>";
        }

        echo "<div>";
        echo "<hr>";
      }



      mysqli_close($connect);
 ?>
