<?php
      session_start();
      $ses_nick_name="";

      if(isset($_SESSION['ses_nick_name']))
      {
         $ses_nick_name=$_SESSION['ses_nick_name'];
      }

      $suggest_num=$_GET['suggest_num'];


      include "./lib/connect_db.php";        //DB접속 파일 호출


      // 후보자 덧글 불러오기
      $sql="select * from tbl_comment where parent_num=$suggest_num and level='candidate' order by num desc";
      $result=mysqli_query($connect, $sql);


          while ($rows=mysqli_fetch_array($result))     // 레코드의 개수만큼 반복
          {
            $num=$rows['num'];
            $nick_name=$rows['nick_name'];
            $content=nl2br($rows['content']);
            $regist_day=$rows['regist_day'];


            echo "<div class='list-group'>";
            echo  "<h4 style='color:#273c75'><strong>$nick_name 답변</strong>&nbsp;&nbsp;<img style='cursor:pointer' id='image_more' src='image/more.svg' width=30 onclick='candi_more($num)'></h4><br>";
            echo  "<p id='suggest_content'>$content</p>";
            echo	"<small>$regist_day </small>&nbsp;&nbsp;";
            if(($ses_nick_name==$nick_name) or ($ses_nick_name=='관리자') )
            {
                echo " <span style='cursor:pointer'  style='text-decoration:none' onclick='del_comment($num)' href='#'><img id='image_delete' src='image/delete_2.svg' width=15></span>";
            }


            echo  "<hr>";
            echo "<div>";
          }


          // 사용자 덧글 불러오기
          $sql="select * from tbl_comment where parent_num=$suggest_num and level!='candidate' order by num desc";
          $result=mysqli_query($connect, $sql);


              while ($rows=mysqli_fetch_array($result))     // 레코드의 개수만큼 반복
              {
                $num=$rows['num'];
                $nick_name=$rows['nick_name'];
                $content=nl2br($rows['content']);
                $regist_day=$rows['regist_day'];


                echo "<div class='list-group'>";
                echo  "<p id='suggest_content'>$content</p>";
                echo	"<span><img id='image_writer' src='image/writer.svg' width=15> $nick_name</span>&nbsp;&nbsp;&nbsp;&nbsp;";
                echo	"<small>$regist_day </small>&nbsp;&nbsp;";
                if(($ses_nick_name==$nick_name) or ($ses_nick_name=='관리자') )
                {
                    echo " <span style='cursor:pointer'  style='text-decoration:none' onclick='del_comment($num)' href='#'><img id='image_delete' src='image/delete_2.svg' width=15></span>";
                }


                echo  "<hr>";
                echo "<div>";
              }


      mysqli_close($connect);
 ?>
