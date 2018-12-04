<?php
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
    <link href="../css/style.css?ver=1.4" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Do+Hyeon|Jua|Nanum+Gothic" rel="stylesheet">


    <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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
       <h2><a id="brand_suggest" href="../index.php">ARAJUNG</a></h2>
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
                        <a class="nav-link" href="./candidate1.php">시행정</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./candidate2.php">복지문화</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./candidate5.php">보건교육</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">환경건설</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./qna.php">게시판</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>

        <!-- 컨테이너 시작-->
       <div class="container">
          <p id="suggest_text">남양주시의원</p>
          <table class="table">
            <tbody>
              <tr>
              <td>호평동, 평내동</td>
                <td>
                  <a href="https://www.evernote.com/l/Aalr48AGSXdEMZsh7Z5aXTrBWquPe4L2u5E/" target="_blank">박은경</a>
                  <a href="https://www.evernote.com/l/AalzfcU_iQxESbZjl3QQMZcIMomDI0znuok/" target="_blank">박성찬</a>
               </td>
              </tr>
              <tr>
                <td>화도읍, 수동면</td>
                <td>
                    <a href="https://www.evernote.com/l/Aak02bRNVZ5HcKP-n-0DNyq3dFVKWv_ObJs/" target="_blank">이영환</a>
                    <a href="https://www.evernote.com/l/Aak89386x89LSIJifCDeULLds7uU9hf3S-I/" target="_blank">신민철</a>
                    <a href="https://www.evernote.com/l/AannxtR53CxBmK2_HKVTHptPL4kWMEscbi4/" target="_blank">이상기</a>
                </td>
              </tr>
              <tr>
                <td>별내면, 별내동</td>
                <td>
                    <a href="https://www.evernote.com/l/AamYPT_gaydK96gZWj7gxGrf-TimUYC_6-o/" target="_blank">이창희</a>
                    <a href="https://www.evernote.com/l/Aam3WiI1CRlAGZXXji8QpchwNLTDmY6w9J8/" target="_blank">이도재</a>
                </td>
              </tr>
              <tr>
                <td>진접읍</td>
                <td>
                    <a href="https://www.evernote.com/l/Aanh-uTQBq9HprsB7l_V37E-RbigNOHOAdU/" target="_blank">장근환</a>
                    <a href="https://www.evernote.com/l/Aan1HgmV54BI96I-R8VSICsZX8f8-jUqtnw/" target="_blank">김지훈</a>
                </td>
              </tr>
              <tr>
                <td>오남읍</td>
                <td>
                    <a href="https://www.evernote.com/l/Aame_ljkyx9Coa39v8fYkXuw5nFfDinJCbU/" target="_blank">백선아</a>
                    <a href="https://www.evernote.com/l/AakQRUXLpdZL84j2SO8T7zP6r5Zy9RrFeNI/" target="_blank">이정애</a>
                </td>
              </tr>
              <tr>
                <td>진건읍, 퇴계원면, 다산1동, 다산2동</td>
                <td>
                    <a href="https://www.evernote.com/l/AamrMu2PpeBM07QCto20T2hui8vH0lDvGuk/" target="_blank">전용균</a>
                    <a href="https://www.evernote.com/l/AandKJqFce9Ku41TKf9GRhL8RGpugs7Z58A/" target="_blank">김진희</a>
                    <a href="https://www.evernote.com/l/AalM_Nd0pqhEPoF1zAH5AAALJtIYacUZqqM/" target="_blank">원병일</a>
                </td>
              </tr>
              <tr>
                <td>외부읍, 조인면, 금곡동, 양정동</td>
                <td>
                    <a href="https://www.evernote.com/l/AamUay0pvhpHK5NlbmifcyKs3Xo6SQqsrXQ/" target="_blank">이철영</a>
                    <a href="https://www.evernote.com/l/AanNFSWm60JPQaDj8MBf2JUXxSONnnV__iE/" target="_blank">김현택</a>
                </td>
              </tr>
              <tr>
                <td>비례대표</td>
                <td>
                    <a href="http://www.nyjc.go.kr/mobile/content/member/profile.html?daesu=8&m_code=8100" target="_blank">김영실</a>
                    <a href="http://www.nyjc.go.kr/mobile/content/member/profile.html?daesu=8&m_code=8090" target="_blank">최성임</a>
                </td>
              </tr>
            </tbody>
          </table>
          <?php
                if($ses_id=='admin')
                {
                  echo "<span style='cursor:pointer' data-toggle='modal' href='#add_Modal'><img src='../image/plus-circle.svg' width='40' height='40'></span>";
                }
           ?>
          <p id="suggest_text">환경건설</p>
          <!-- 모든 공약 불러오기 -->
          <div id="suggest_item_list"></div>

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
                                    <p><button type='submit' id='btn_login' class='btn btn-primary btn-block'>로그인</button>
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



      <!--  준비중 모달 -->
      <div class="modal fade" id="ready_Modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <div class="modal-body text-center">
              <h4><strong>준비중입니다.</strong></h4>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-block" data-dismiss="modal">확인</button>
            </div>
          </div>
        </div>
      </div>
      <!--  준비중 모달 끝 -->


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
                  <div class="form-group">
                    <label for="content">사진</label>
                    <input type="file" id="suggest_image" name="suggest_image">
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
                     url: '../login.php',
                     type: 'POST',
                     data: {'id':$('#id').val(), 'password':$('#password').val()},
                     dataType: 'html',
                     success: function(data){
                       if(data=="success")
                       {
                         $("#login_Modal").hide();
                        location.href="candidate6.php";
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
						 url: '../logout.php',
						 type: 'POST',
						 dataType: 'html',
						 success: function(data){
								location.href="candidate6.php";
						 }
					 });
				}
	 </script>


   <!-- 공약 추가하기 -->
   <script>
       $(document).ready(function()
        {
             $("#btn_suggest").click( function(event){
               var formData = new FormData();
               formData.append("title", $("#title").val());
               formData.append("content", $("#content").val());
               formData.append("image", $("#suggest_image")[0].files[0]);
               formData.append("nick_name", '<?=$ses_nick_name?>');
               formData.append("id", '<?=$ses_id?>');
               formData.append("candidate", '환경건설');

               $.ajax({
                  url: '../suggest_insert.php',
                  type: 'POST',
                  data:  formData,
                  dataType: 'html',
                  processData: false,  //파일 첨부시 필수
                  contentType: false,  //파일 첨부시 필수
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

    <!-- 모든 공약 불러오기 -->
   <script>
        // 시작 할 때 불러오기
       $(document).ready(function(){
         var url="../suggest_item_list.php";
         $.get(url, {candidate:'환경건설'}, function(args){
           $("#suggest_item_list").html(args);
         });
       });
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
                   url: '../register.php',
                   type: 'POST',
                   data: {'id':$('#regist_id').val(), 'password':$('#regist_password').val(), 'nick_name':$('#regist_nick_name').val()},
                   dataType: 'html',
                   success: function(data){
                     if(data=="success")
                     {
                       $("#register_Modal").hide();
                      location.href="candidate6.php";
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
