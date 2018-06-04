<?php

    //오늘 날짜
    $regist_day=date("Y-m-d H:i:s", strtotime("+9 hour"));  //한국시간으로 변경

    //POST방식으로 전송받음
    $title=$_POST['title'];
    $content = $_POST['content'];
    $id = $_POST['id'];
    $candidate = $_POST['candidate'];
    $nick_name=$_POST['nick_name'];

    //이미지 저장
    $uploaded_file="";
    if(isset($_FILES["image"]))
    {
        $upfile_name=$_FILES["image"]["name"];
        $upfile_tmp_name=$_FILES["image"]["tmp_name"];
        $upfile_size=$_FILES["image"]["size"];
        $upfile_error=$_FILES["image"]["error"];


        $upload_dir='suggest_image/';
        
        if(!$upfile_error)  //1 반환, 업로드 크기 제한
        {
          $new_file_name=date("Y_m_d_H_i_s");
          $copied_file_name=$new_file_name.".jpg";
          $uploaded_file=$upload_dir.$copied_file_name;

          if(!move_uploaded_file($upfile_tmp_name, $uploaded_file))
          {
            echo("
              <script>
                alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
                histroy.go(-1)
              </script>
            ");
            exit;
          }
        }
       
    }

  include "./lib/connect_db.php";        //DB접속 파일 호출
  $sql="insert into tbl_suggest (title, content, regist_day, id, candidate, nick_name, image) values ('$title', '$content', '$regist_day', '$id', '$candidate', '$nick_name', '$uploaded_file')";
  $result=mysqli_query($connect, $sql);
  mysqli_close($connect);


  if($result==1)  //1 반환 : 정상적으로 삽인된 경우
  {
      echo "success";
  }
  else {
      echo "fail";
  }

?>
