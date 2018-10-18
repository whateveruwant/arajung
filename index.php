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
    
    <!-- PYM ADDING. START -->
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/pe-icon/pe-icon.css">
    <!-- Vendors-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/grid.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/swiper/swiper.css">
    <!-- App & fonts-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- PYM ADDING. END -->


    <link href="css/style.css?ver=1.3" rel="stylesheet">
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
      .nav_item{
           font-family: 'Jua', sans-serif;
           font-size:1.2em;
      }
      #suggest_title{
            font-family: 'Nanum Gothic', sans-serif;
            font-size:1.5em;
            color: #000000;
      }
    </style>
    <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
    <script type="text/javascript">
        if(!wcs_add) var wcs_add = {};
        wcs_add["wa"] = "8be1de322203b8";
        wcs_do();
    </script>
	</head>
    <body>
    	 <div class="header">
          <h2><a id="brand_suggest" href="#">ARAJUNG</a></h2>
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
        <hr>

        <div class="nav">
          <span class="nav_item"><a id="nav_item_home" href="#">홈</a></span>
          <span class="nav_item"><a id="nav_item_home3" href="./candidate/candidate1.php">시행정</a></span>
          <span class="nav_item"><a id="nav_item_home3" href="./candidate/candidate2.php">복지문화</a></span>
          <span class="nav_item"><a id="nav_item_home3" href="./candidate/candidate3.php">산업</a></span>
          <span class="nav_item"><a id="nav_item_home3" href="./candidate/candidate4.php">행정</a></span>
          <span class="nav_item"><a id="nav_item_home3" href="./candidate/candidate5.php">보건교육</a></span>
          <span class="nav_item"><a id="nav_item_home3" href="./candidate/candidate6.php">환경건설</a></span>
          <!-- <span class="nav_item"><a id="nav_item_home3" href="./candidate/candidate2.php">마포구</a></span>-->
          <?php
                if($ses_id=='admin')
                {
                  echo "<span class='nav_item'><span style='cursor:pointer' id='nav_item_admin' onclick='admin()'>관리자</span></span>";
                }
           ?>

        </div>
        <br/>

        <div id="md-content">
        <div class="hero" id="id-1" style="background-image: url('assets/img/bg/8.jpg');">
            <div class="hero__wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 ">
                            <h1 class="hero__title" style="font-size:50px">지역사회를 발전시키는</h1>
                            <h1 class="hero__title" style="font-size:50px">
                                <span>더 </span><span>THE </span><span>MORE</span>
                            </h1>
                            <h1 class="hero__title" style="font-size:50px">현명한 방법</h1>


                            <p class="hero__text">우리생활과 밀접한 것은 지방선거입니다.</p>
                            <p class="hero__text">저희 웹에 지역안건을 남겨주세요!</p>
                            <p class="hero__text">적어도 멀쩡한 보도블럭을 갈아 엎진 않습니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End / hero -->
        <!-- Section -->
        <section class="md-section" id="id-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 ">
                        <h1 class="hero__title" style="font-size:50px; color:#000;">선거는 다음과 같습니다.</h1>
						<img src='image/vote.jpg')>
                        <br/>
                        <p class="hero__text; color:#000;">송파구민은 지방선거에서 서울시장, 서울시의원, 송파구청장, 송파구의원, 서울시교육감 5자리를 뽑습니다.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End / Section -->
        <!-- Section -->
        <section class="md-section bg-gray" id="id-2">
            <div class="container">
                <!-- swiper__module swiper-container -->
                <div class="swiper__module swiper-container mt-50" data-options='{"slidesPerView":3,"spaceBetween":30,"autoplay":2000,"breakpoints":{"640":{"slidesPerView":1},"991":{"slidesPerView":2}}}'>
                    <div class="swiper-wrapper">

                        <!-- service -->
                        <div class="service mb-0">
                            <div class="service__icon"><i class="pe-7s-users"></i></div>
                            <h3 class="service__title">Proposal</h3>
                            <p class="service__text">의원에게 바라는 정책과 공약을 직접 제안합니다.</p>
                            <p class="service__text">후보자가 일방적으로 제안하는 공약이 아니라</p>
                            <p class="service__text">유권자와 함께 만들어가는 공약입니다.</p>
                        </div><!-- End / service -->
                        <!-- service -->
                        <div class="service mb-0">
                            <div class="service__icon"><i class="pe-7s-refresh-2"></i></div>
                            <h3 class="service__title">FeedBack</h3>
                            <p class="service__text">의원은 즉각적인 답변을 합니다. 공약이 이행 가능 한지 여부를 말해줍니다.</p>
                            <p class="service__text">그에 따른 정책이 실행되는 과정을 보여줍니다.</p>
                            <p class="service__text">당선 후 에도 지속적으로 의정활동을 추적합니다.</p>
                        </div><!-- End / service -->
                        <!-- service -->
                        <div class="service mb-0">
                            <div class="service__icon"><i class="pe-7s-news-paper"></i></div>
                            <h3 class="service__title">Decide</h3>
                            <p class="service__text">후보자 개인의 자질과 능력을 보고 뽑습니다.</p>
                            <p class="service__text">유권자 분들의 선택을 돕습니다.</p>
                        </div><!-- End / service -->
                    </div>
                </div><!-- End / swiper__module swiper-container -->

            </div>
        </section>
        <!-- End / Section -->
        <!-- Section -->
        <section class="md-section" id="id-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ">

                        <!-- title -->
                        <div class="title">
                            <h2 class="title__title">문의하기</h2>
                        </div><!-- End / title -->

                        <div class="mb-40">
                            <!-- contact -->
                            <div class="contact">
                                <h3 class="contact__title">이메일</h3>
                                <div>helpara@naver.com</a></div>
                            </div><!-- End / contact -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End / Section -->
    </div>
    <!-- 컨테이너 끝-->



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
    <!-- PYM ADDING. START -->
    <!-- Vendors-->
    <script type="text/javascript" src="assets/vendors/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="assets/vendors/isotope-layout/isotope.pkgd.js"></script>
    <script type="text/javascript" src="assets/vendors/jquery-one-page/jquery.nav.min.js"></script>
    <script type="text/javascript" src="assets/vendors/jquery.easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
    <script type="text/javascript" src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="assets/vendors/masonry-layout/masonry.pkgd.js"></script>
    <script type="text/javascript" src="assets/vendors/swiper/swiper.jquery.js"></script>
    <script type="text/javascript" src="assets/vendors/menu/menu.js"></script>
    <script type="text/javascript" src="assets/vendors/typed/typed.min.js"></script>
    <!-- App-->
    <script type="text/javascript" src="assets/js/main.js"></script>
    <!-- PYM ADDING. END -->


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
                        location.href="index.php";
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

   <!-- 관리자 페이지 이동 -->
   <script>
    function admin()
    {
      location.href="./admin/admin.php";
    }
   </script>
  </body>
</html>
