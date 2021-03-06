<?php
      $suggest_num=$_GET['num'];

      $candidate="";
      if(isset($_GET['candidate']))
      {
          $candidate=$_GET['candidate'];
      }

      session_start();
      $ses_id="";
      $ses_nick_name="";
      if(isset($_SESSION['ses_id']))
      {
         $ses_id=$_SESSION['ses_id'];
      }

      if(isset($_SESSION['ses_nick_name']))
      {
         $ses_nick_name=$_SESSION['ses_nick_name'];
      }


 ?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css?ver=1.4" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Do+Hyeon|Jua|Nanum+Gothic" rel="stylesheet">

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="shorcut icon" href="http://www.arajung.com/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="http://www.arajung.com/favicon.ico" type="image/x-icon" />
    <title>ARAJUNG</title>
    <style>
      h2{
           font-family: 'Ubuntu', sans-serif;
           color: #666666;
      }
      .nav-item{
           font-family: 'Jua', sans-serif;
           font-size:1.2em;
      }
      #suggest_title{
            font-family: 'Nanum Gothic', sans-serif;
            font-size:1.5em;
            color: #000000;
      }
    </style>

	</head>
  <body>
    <div class="header">
      <h2><a id="brand_suggest" href="index.php">ARAJUNG</a></h2>
       <span id="btn_login_group">
         <?php
             if($ses_id=="")
             {
               echo " <span style='cursor:pointer' class='ghost-button'  style='text-decoration:none' data-toggle='modal' href='#register_Modal'>회원가입</span>";
               echo " <span style='cursor:pointer' class='ghost-button'  style='text-decoration:none' data-toggle='modal' href='#login_Modal'>로그인</span>";
             }
             else {
                 echo "<span>$ses_nick_name 님</span>&nbsp;&nbsp;&nbsp;";
                 echo " <span style='cursor:pointer' class='ghost-button'  style='text-decoration:none' data-toggle='modal' onclick='logout()' href='#'>로그아웃</span>";
             }
          ?>
      </span>
    </div>  <!-- 헤더 끝-->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#pym-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    남양주시 예산
                </button>
            </div>
            <div class="collapse navbar-collapse" id="pym-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./candidate/candidate1.php">시행정</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./candidate/candidate2.php">복지문화</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./candidate/candidate5.php">보건교육</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./candidate/candidate6.php">환경건설</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./candidate/qna.php">게시판</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>


        <!-- 컨테이너 시작-->
       <div class="container">
         <p id="suggest_text"><?=$candidate?>   </p>
         <hr>
          <!-- 특정 공약 불러오기 -->
          <div id="suggest_item"></div>

          <!-- 댓글 입력 폼 -->
          <div id="comment_group">
            <div class="form-group">
              <textarea class="form-control" id="content" rows=5 placeholder="덧글을 입력해 주세요."></textarea>


            <?php
               if($ses_id=="")
               {
                 echo "<span style='cursor:pointer' id='btn_comment_no_login' type='button' class='btn btn-default btn-block' data-toggle='modal' href='#login_request_Modal'> <strong> 작 성 하 기</strong></span>";
               }
               else {
                  echo "<span style='cursor:pointer' id='btn_comment' type='button' class='btn btn-default btn-block'><strong> 작 성 하 기</strong></span>";
               }
            ?>
            </div>
          </div>

          <hr>

          <!-- 댓글 불러오기  -->
          <div id="comment_item_list"></div>


       </div>  <!-- 컨테이너 끝-->



       <!--------------------------------------------------------------------------------------------->

      <!-- 로그인 모달 -->
      <div class="modal fade" id="login_Modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" >
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">로그인</h3>
          </div>

            <div class="modal-body" style="text-align:center;">
              <div class="row-fluid">
                <div class="span10 offset1">
                    <div id="modalTab">
                        <div class="tab-content">
                            <div class="tab-pane active" id="login">
                                <form method="post" action='' name="login_form">
                                    <p><input type="text" class="form-control" name="id" id="id" placeholder="아이디" required></p>
                                    <p><input type="password" class="form-control" name="password" id="password" placeholder="패스워드" required></p>
                                    <div class="error" id="err_msg_login"></div>
                                    <p><button type='submit' id="btn_login"  class='btn btn-primary btn-block'>로그인</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>  <!--  modal body -->
        </div>
        </div>
      </div>
      <!-- 로그인 모달 -->


      <!-- 로그인 요청 modal -->
      <div class="modal fade" id="login_request_Modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-body">
              <h4><strong>로그인이 필요합니다.</strong></h4>
            </div>
            <div class="modal-footer" style="text-align:center;">
              <button type="button" class="btn btn-default btn-block " data-dismiss="modal">확인</button>
            </div>
          </div>
        </div>
      </div>



      <!-- 공약 제안  모달 -->
      <div class="modal fade" id="add_Modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">공약 제시하기</h3>
          </div>

          <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                  <div class="form-group">
                    <label for="title">제목</label>
                    <input class="form-control" id="title"></input>
                  </div>


                  <div class="form-group">
                    <label for="content">내용</label>
                    <textarea class="form-control" id="content" rows=5></textarea>
                  </div>
                </div>

                <div class="modal-footer">
                  <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                    <div class="btn-group" role="group">
                      <button type="button" class="btn btn-default" data-dismiss="modal"  role="button"><strong>취소</strong></button>
                    </div>

                    <div class="btn-group" role="group">
                      <button type="submit" id="btn_suggest" class="btn btn-default btn-hover-green" data-action="save" role="button"><strong>작성하기</strong></button>
                    </div>
                  </div>
                </div>
          </form>
        </div>
        </div>
      </div>   <!-- 공약 제안  모달 -->


      <!-- 후보자 자세히 보기 모달 -->
      <div class="modal fade" id="candi_Modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">프로필</h3>
          </div>


                <div class="modal-body">
                  <div class="form-group">
                    <img id="output" src="#" width=550/>
                  </div>

                  <!-- 
                  <div class="form-group">
                    이름 : <strong><span id="candi_nick_name"> </span></strong>
                  </div>


                  <div class="form-group">
                    나이 : <strong><span id="candi_age"> </span></strong>
                  </div>

                  <div class="form-group">
                    출마직 : <strong><span id="candi_goal"> </span></strong>
                  </div>

                  <div class="form-group">
                    학력 : <strong><span id="candi_education"> </span></strong>
                  </div>


                  <div class="form-group">
                    경력 : <strong><p id="candi_carrer"> </p></strong>
                  </div>

                  <div class="form-group">
                    한 마디 : <strong><p id="candi_one_word"> </p></strong>
                  </div>
                </div> -->

                <div class="modal-footer">
                  <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                    <div class="btn-group" role="group">
                      <button type="button" class="btn btn-default btn-block" data-dismiss="modal"  role="button"><strong>닫기</strong></button>
                    </div>
                  </div>
                </div>

        </div>
        </div>
      </div>
        <!-- 후보자 자세히 보기 모달 -->

        <!-- 회원가입 모달 -->
        <div class="modal fade" id="register_Modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" >
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h3 class="modal-title" id="lineModalLabel">회원가입</h3>
            </div>

              <div class="modal-body" style="text-align:center;">
                <div class="row-fluid">
                  <div class="span10 offset1">
                      <div id="modalTab">
                          <div class="tab-content">
                              <div class="tab-pane active" id="login">
                                  <form method="post" action='' name="register_form">
                                      <p><input type="email" class="form-control" name="id" id="regist_id" placeholder="이메일"></p>
                                      <p><input type="password" class="form-control" name="password" id="regist_password" placeholder="비밀번호"></p>
                                      <p><input type="password" class="form-control" name="re_password" id="regist_re_password" placeholder="비밀번호 재입력"></p>
                                      <p><input type="text" class="form-control" name="nick_name" id="regist_nick_name" placeholder="별명"></p>
                                      <div class="error" id="err_msg_register"></div>
                                      <p><button type='submit' id='btn_register' class='btn btn-primary btn-block'>회원가입</button>
                                      </p>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
          </div>
        </div>
          <!-- 회원가입 모달 -->




    <!-- 로그인 유효성 검사 및 로그인 -->
    <script>
      $(document).ready(function()
      {
            $("#btn_login").click( function(event){
              /** 사용자 아이디 체크 **/
              var userId   = $("#id").val();
              var idLen    = userId.length;


              /** 사용자 패스워드 체크 **/
              var userPW   = $("#password").val();
              var pwLen    = userPW.length;


              if(idLen >= 1 && pwLen >=1)
              {
                  $.ajax({
                     url: './login.php',
                     type: 'POST',
                     data: {'id':$('#id').val(), 'password':$('#password').val()},
                     dataType: 'html',
                     success: function(data){
                       if(data=="success")
                       {
                         $("#login_Modal").hide();
                         location.href="suggest_item_detail.php?num=<?=$suggest_num?>&candidate=<?=$candidate?>";

                       }
                       else {  //data 값 fail를 반환
                         //로그인 실패
                         $("#err_msg_login").show();
                         $("#err_msg_login").text("잘못된 아이디 또는 비밀번호입니다.");
                         $("#err_msg_login").css("color","red");
                       }
                     }
                  });
                  event.preventDefault();
              }
            });
      });
    </script>


		<!-- 로그아웃 -->
		<script>
				function logout()
				{
					$.ajax({
						 url: './logout.php',
						 type: 'POST',
						 dataType: 'html',
						 success: function(data){
								location.href="index.php";
						 }
					 });
				}
	 </script>


   <!-- 공약 추가하기 -->
   <script>
       $(document).ready(function()
        {
             $("#btn_suggest").click( function(event){

               $.ajax({
                  url: './suggest_insert.php',
                  type: 'POST',
                  data:  {'title':$('#title').val()  ,'content':$('#content').val(), 'name':'<?=$ses_name?>'},
                  dataType: 'html',
                  success: function(data){

                        if(data=="success")
                        {
                          alert('등록 성공');
                        }
                        else {
                          alert('등록 실패');
                        }
                  }

               });
            });
        });
   </script>

    <!-- 특정 공약 불러오기 -->
   <script>
        // 시작 할 때 불러오기
       $(document).ready(function(){
         var url="suggest_item.php";
         $.get(url, {suggest_num : <?=$suggest_num?>},function(args){
           $("#suggest_item").html(args);
         });
       });
   </script>


   <!-- 댓글 추가하기 -->
   <script>
       $(document).ready(function()
        {
             $("#btn_comment").click( function(event){
                   $.ajax({
                      url: './suggest_comment_insert.php',
                      type: 'POST',
                      data:  {'suggest_num':'<?=$suggest_num?>', 'content':$('#content').val(), 'nick_name':'<?=$ses_nick_name?>'},
                      dataType: 'html',
                      success: function(data){

                            if(data=="success")
                            {
                              $('#content').val('');
                              $('#comment_item_list').load('comment_item_list.php?suggest_num=<?=$suggest_num?>');
                              $('#suggest_item').load('suggest_item.php?suggest_num=<?=$suggest_num?>');
                            }
                            else {
                              alert('등록 실패');
                            }
                      }

                   });
            });
        });
   </script>

   <!-- 댓글 불러오기 -->
  <script>
       // 시작 할 때 불러오기
      $(document).ready(function(){
        var url="comment_item_list.php";
        $.get(url, {'suggest_num':'<?=$suggest_num?>'}, function(args){
          $("#comment_item_list").html(args);
        });
      });
  </script>


  <!-- 댓글 삭제 -->
  <script>
      function del_comment(num)
      {
        $.ajax({
               url: './comment_item_delete.php',
               type: 'POST',
               data: {'num': num, 'suggest_num':<?=$suggest_num?>},
               dataType: 'html',
               success: function(data){
                 if(data=="success")
                 {
                    $( "#comment_item_list" ).load( "comment_item_list.php?suggest_num=<?=$suggest_num?>" );
                    $( "#suggest_item" ).load( "suggest_item.php?suggest_num=<?=$suggest_num?>" );

                 }
                 else {  //data 값 fail를 반환
                   alert('댓글 삭제 실패');
                 }
               }
            });
      }

  </script>

  <!-- 공약 삭제 -->
  <script>
      function del_suggest(suggest_num)
      {
        $.ajax({
               url: './suggest_item_delete.php',
               type: 'POST',
               data: {'suggest_num':suggest_num},
               dataType: 'html',
               success: function(data){
                 if(data=="success")
                 {
                    location.href="index.php";
                 }
                 else {  //data 값 fail를 반환
                   alert('공약글 삭제 실패');
                 }
               }
            });
      }
  </script>

  <!-- 추천 -->
  <script>
    function like()
    {
      $.ajax({
           url: './count_like.php',
           type: 'POST',
           data: {'suggest_num':<?=$suggest_num?>,  'like_count':$('#count').text(),  'id':'<?=$ses_id?>'},
           dataType: 'html',
           success: function(data){
             //count 값을 가져와서 data 값과 비교
             //같은 경우 이미 추천하였다는 메시지 출력

             if($("#count").text()==data)
             {
               alert('이미 추천한 공약입니다.');

             }
             else {
               $( "#suggest_item" ).load( "suggest_item.php?suggest_num=<?=$suggest_num?>" );
             }
          }
        });
  }
  </script>

  <!-- 후보자 더보기 -->
  <script>
    function candi_more(comment_num)
    {
        //댓글 num 에서 nick_name을 가져온다.

       $.ajax({
       		 url: './admin/candi_item_load.php',
       		 type: 'POST',
       		 data: {'comment_num': comment_num},
       		 dataType: 'json',
       		 success: function(data){
                $("#candi_Modal").modal('show');
                $('#candi_nick_name').text(data[0]);  //이름
                $('#candi_age').text(data[1]);        //나이
                $('#candi_goal').text(data[2]);       //출마직
                $('#candi_education').text(data[3]);  //학력
                $('#candi_carrer').html(data[4]);     //경력
                $('#candi_one_word').html(data[5]);   //한 마디


                if(data[6]!=null)  //후보자 사진이 있는 경우
                {
                  var image_path="./admin/" + data[6];
                  $("#output").attr("src", image_path);
                }
                else {    //후보자 사진이 없는 경우 디폴트 이미지
                  var default_image_path="./image/default_image.svg";
                  $("#output").attr("src", default_image_path);    
                }
       		 }
       	});
    }
</script>

<!-- 회원 가입 -->
<script>
    $(document).ready(function()
     {
          $("#btn_register").click( function(event){
            /** 사용자 아이디 체크 **/
            var userId   = $("#regist_id").val();
            var idLen    = userId.length;


            /** 사용자 패스워드 체크 **/
            var userPW   = $("#regist_password").val();
            var pwLen    = userPW.length;

           /** 사용자 패스워드 재 체크 **/
            var userPW_re   = $("#regist_re_password").val();
            var pwLen_re    = userPW_re.length;

            /** 사용자 닉네임 체크 **/
            var userNickname   = $("#regist_nick_name").val();
            var nicknameLen    = userNickname.length;



            if(idLen<1)
            {
              alert('아이디를 입력해주세요.');
                event.preventDefault();
            }
            else if(idLen>=1 && pwLen<1)
            {
              alert('패스워드를 입력해주세요.');
                event.preventDefault();
            }
           else if(idLen>=1 && pwLen>=1 && userPW!=userPW_re)
           {
             alert('두 패스워드가 일치하지 않습니다. ');
               event.preventDefault();
           }
           else if(idLen>=1 && pwLen>=1 && userPW==userPW_re && nicknameLen<1)
           {
                alert('별명을 입력해주세요.');
                  event.preventDefault();
           }
           else {
             $.ajax({
                url: './register.php',
                type: 'POST',
                data: {'id':$('#regist_id').val(), 'password':$('#regist_password').val(), 'nick_name':$('#regist_nick_name').val()},
                dataType: 'html',
                success: function(data){
                  if(data=="success")
                  {
                    $("#register_Modal").hide();
                   location.href="index.php";
                  }
                  else if(data=="duplicate"){  //data 값 fail를 반환
                    //로그인 실패
                    $("#err_msg_register").show();
                    $("#err_msg_register").text("이미 등록된 이메일입니다.");
                    $("#err_msg_register").css("color","red");
                  }
                }
             });
             event.preventDefault();
           }

          });
     });
</script>

  </body>
</html>
