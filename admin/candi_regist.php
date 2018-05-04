<?php
    //오늘 날짜
    $regist_day=date("Y-m-d H:i:s", strtotime("+9 hour"));  //한국시간으로 변경

    //POST방식으로 전송받음
    $id = $_POST['id'];
    $password = $_POST['password'];
    $nick_name = $_POST['nick_name'];

    $location = $_POST['location'];
    $goal = $_POST['goal'];
    $age = $_POST['age'];
    $education = $_POST['education'];
    $carrer = $_POST['carrer'];
    $one_word = $_POST['one_word'];

    //이미지 저장
    $uploaded_file="";
    if(isset($_FILES["image"]))
    {
        $upfile_name=$_FILES["image"]["name"];
        $upfile_tmp_name=$_FILES["image"]["tmp_name"];
        $upfile_size=$_FILES["image"]["size"];
        $upfile_error=$_FILES["image"]["error"];


        $upload_dir='candi_image/';

        $file=explode(".", $upfile_name);
        $file_name=$file[0];
        //  $file_ext=$file[1];

        if(!$upfile_error)  //1 반환, 업로드 크기 제한
        {
         $new_file_name=date("Y_m_d_H_i_s");
        //  $copied_file_name=$new_file_name.".".$file_ext;
         $copied_file_name=$new_file_name.".jpg";
         // $uploaded_file=$upload_dir.$copied_file_name;
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

  include "../lib/connect_db.php";        //DB접속 파일 호출

    $sql="insert into member (id, password, nick_name, level, regist_day, location, goal, age, education, carrer, one_word, image) values ('$id', '$password', '$nick_name', 'candidate', '$regist_day', '$location', '$goal', '$age', '$education', '$carrer', '$one_word', '$uploaded_file')";


    $result=mysqli_query($connect, $sql);

    if($result==1)  //1 반환 : 정상적으로 삽인된 경우
    {
        echo "success";
    }
    else {
        echo "fail";
    }

  mysqli_close($connect);
?>
