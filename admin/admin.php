<?php
      session_start();
      $ses_level="";

      if(isset($_SESSION['ses_level']))
      {
         $ses_level=$_SESSION['ses_level'];
      }

      if($ses_level!="admin")
      {
        echo "<script>alert('접근 권한이 없습니다.');</script>";
        echo  "<script>location.href='../index.php'</script>";
      }
?>

 <!doctype html>
 <html>
 	<head>
 		<meta charset="utf-8">
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-2.2.4.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body>
    <span><strong>관리자 페이지</strong> <button onclick="logout()">로그아웃</button>&nbsp;&nbsp;<button onclick="back()">뒤로 가기</button></span>
    <br>
    <hr>

    <form action="" method="post" enctype="multipart/form-data">
          <span><strong>후보자 등록</strong></span> <button type="submit" onclick="candi_regist()">후보자 등록</button></span>

          <br><br>
          <span>아이디 : </span>
          <input type="text" id="candi_id" />
          <br><br>


          <span>패스워드 : </span>
          <input type="password" id="candi_password" />
          <br><br>

          <span>지역 : </span>
          <input type="text" id="candi_location" placeholder="예) 서울" />
          <br><br>

          <span>목표 : </span>
          <input type="text" id="candi_goal" placeholder="예) 서울시장"/>
          <br><br>

          <span>이름 : </span>
          <input type="text" id="candi_nick_name" />
          <br><br>

          <span>나이 : </span>
          <input type="text" id="candi_age" />
          <br><br>

          <span>학력 : </span>
          <input type="text" id="candi_education" />
          <br><br>

          <span>사진 : </span>
          <input type="file"  id="candi_image" name="image">
          <br>



          <p>주요 경력 : </p>
          <textarea id="candi_carrer" rows=5 cols=50></textarea>
          <br>

          <p>한마디 말 : </p>
          <textarea  id="candi_one_word" rows=5 cols=50></textarea>
          <br><br>
  </form>
    <hr>

    <span><strong>후보자 목록</strong></span>
    <div id="candi_list"></div>


    <!-- 로그아웃 -->
    <script>
        function logout()
        {
          // alert('test');
          $.ajax({
             url: '../logout.php',
             type: 'POST',
             dataType: 'html',
             success: function(data){
                location.href="../index.php";
             }
           });
        }
   </script>
   <!-- 뒤로가기 -->
   <script>
        function back()
        {
          location.href="../index.php";
        }
   </script>

   <!-- 후보자 등록 -->
   <script>
        function candi_regist()
        {
          var formData = new FormData();
               formData.append("id", $("#candi_id").val());
               formData.append("password", $("#candi_password").val());
               formData.append("location", $("#candi_location").val());
               formData.append("goal", $("#candi_goal").val());
               formData.append("nick_name", $("#candi_nick_name").val());
               formData.append("age", $("#candi_age").val());
               formData.append("education", $("#candi_education").val());
               formData.append("carrer", $("#candi_carrer").val());
               formData.append("one_word", $("#candi_one_word").val());
               formData.append("image", $("#candi_image")[0].files[0]);

               $.ajax({
                  url: './candi_regist.php',
                  type: 'POST',
                  data: formData,
                  dataType: 'html',
                  processData: false,  //파일 첨부시 필수
                  contentType: false,  //파일 첨부시 필수
                  success: function(data){
                    if(data=="success")
                    {
                      alert('등록 성공');

                      $("#candi_id").val('');
                      $("#candi_password").val('');
                      $("#candi_location").val('');
                      $("#candi_goal").val('');
                      $("#candi_nick_name").val('');
                      $("#candi_age").val('');
                      $("#candi_education").val('');
                      $("#candi_carrer").val('');
                      $("#candi_one_word").val('');

                      $( "#candi_list" ).load( "candi_list.php" );

                    }
                    else {  //data 값 fail를 반환

                      alert('등록 실패');

                    }
                  }
               });
        }
   </script>


   <!-- 모든 후보자 불러오기 -->
  <script>
       // 시작 할 때 불러오기
      $(document).ready(function(){
        var url="./candi_list.php";
        $.get(url, function(args){
          $("#candi_list").html(args);
        });
      });
  </script>

  <!-- 후보자 삭제 -->
  <script>
      function delete_candi(num)
      {
        $.ajax({
               url: './candi_delete.php',
               type: 'POST',
               data: {'candi_num':num},
               dataType: 'html',
               success: function(data){
                 if(data=="success")
                 {
                      $( "#candi_list" ).load( "candi_list.php" );
                 }
                 else {  //data 값 fail를 반환
                   alert('후보자 삭제 실패');
                 }
               }
            });
      }

  </script>
  </body>
</html>
