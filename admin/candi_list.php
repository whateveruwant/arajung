<table class="table table-striped custab" style="table-layout:fixed" >
  <thead>
    <tr>
      <td width="5%">번호</td>
      <td width="5%">ID</td>
      <td width="15%">사진</td>
      <td width="5%">이름</td>
      <td width="5%">나이</td>
      <td width="10%">학력</td>
      <td width="15%">경력</td>
      <td width="15%">한마디말</td>
      <td width="5%">지역</td>
      <td width="7%">목표</td>
      <td width="8%">가입일</td>
      <td width="5%">삭제</td>

    </tr>
  </thead>

  <tbody>
<?php
      include "../lib/connect_db.php";        //DB접속 파일 호출

      $sql="select * from member where level='candidate' order by num desc";
      $result=mysqli_query($connect, $sql);
      $num=mysqli_num_rows($result);

      // 테이블 처리
      while ($rows=mysqli_fetch_array($result))     // 레코드의 개수만큼 반복
      {
        $candi_num=$rows['num'];
        $id=$rows['id'];
        $nick_name=$rows['nick_name'];
        $age=$rows['age'];
        $education=$rows['education'];
        $carrer=nl2br($rows['carrer']);
        $one_word=nl2br($rows['one_word']);
        $location=$rows['location'];
        $goal=$rows['goal'];
        $regist_day=$rows['regist_day'];
        $image=$rows['image'];




        echo "<tr>";
        echo "<td>$num</td>";
        echo "<td>$id</td>";
        echo "<td><img src='$image' width=150></td>";
        echo "<td>$nick_name</td>";
        echo "<td>$age</td>";
        echo "<td>$education</td>";
        echo "<td>$carrer</td>";
        echo "<td>$one_word</td>";
        echo "<td>$location</td>";
        echo "<td>$goal</td>";
        echo "<td>$regist_day</td>";
        echo "<td><button onclick='delete_candi($candi_num)'>삭제</button></td>";
        echo "</tr>";

        $num--;
      }



      mysqli_close($connect);
 ?>
</tbody>
</table>
