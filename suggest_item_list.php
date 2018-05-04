<?php
      include "./lib/connect_db.php";        //DB접속 파일 호출

      $candidate=$_GET['candidate'];

      $sql="select * from tbl_suggest where candidate='$candidate' order by num desc";
      $result=mysqli_query($connect, $sql);

      while ($rows=mysqli_fetch_array($result))     // 레코드의 개수만큼 반복
      {
        $num=$rows['num'];
        $id=$rows['id'];
        $nick_name=$rows['nick_name'];
        $title=$rows['title'];
        $content=nl2br($rows['content']);
        $regist_day=$rows['regist_day'];
        $hit=$rows['hit'];
        $comment_count=$rows['comment_count'];
        $like_count=$rows['like_count'];

        echo "<div class='list-group'>";
        echo "<a href='../suggest_item_detail.php?num=$num&candidate=$candidate' class='list-group-item list-group-item-action flex-column align-items-start'>";
        echo  "<p id='suggest_title'><strong>$title</strong></p>";
        echo  "<p id='suggest_content'>$content</p>";
        echo	"<p><img id='image_writer' src='../image/writer.svg' width=15> $nick_name</p>";
        echo	"<span><img id='image_hit' src='../image/hit.svg' width=15>&nbsp;  $hit</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><img id='image_comment' src='../image/comment.svg' width=15>&nbsp;  $comment_count</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><img id='image_like' src='../image/like_2.svg' width=15>&nbsp;  $like_count</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small>$regist_day </small>&nbsp;&nbsp;";
        echo "</a>";
        echo "<div>";
      }



      mysqli_close($connect);
 ?>
