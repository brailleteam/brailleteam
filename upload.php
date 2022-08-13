<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="braille" />
    <title>رفع المحتوى</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css_files/style.css" />
    <?php
include('config.php');

$vid_name='';
$vid_desc='';
if(isset($_POST['vid_name'])){
$vid_name=$_POST['vid_name'];
}
if(isset($_POST['vid_desc'])){
  $vid_desc=$_POST['vid_desc'];
  }
  if(isset($_POST['up_btn'])){
    if(($_POST['vid_name']!=null)&($_POST['vid_desc']!=null)){
    $name=$_FILES['file'] ['name'];
    $location='./videos/';
    $target_file=$location . $_FILES['file']['name'];
$videoFileType=strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$location='videos/'.$name;
$extension_array=array('mp4','mpeg','avi','3gp','mov');
if((in_array($videoFileType,$extension_array)) ){

  if($_FILES['file'] ['size'] !=0){
    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
$query="INSERT INTO `videos` VALUES('','$name','$location','$vid_name','$vid_desc')";
mysqli_query($con,$query);
if($query){
echo('add to the table');

echo('<center><h3>تم رفع الفيديو</h3></center>');

echo($location);

}
else
echo('error123');
}
    else
    echo('error2');
  }
  else
  echo('الملف غير صالح');
}
  else
  echo('الرجاء إختيار فيديو');

  }
  else
  echo('لا يمكن ترك الحقول فارغة');
}
  
?>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="./index.php">
          <img src="./images/Asset 2.png" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i
            class="fa fa-align-right"
            aria-hidden="true"
            style="color: white; font-size: 32px"
          ></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php"
                >الصفحة الرئيسية</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./lirning.php">تدريبات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./aboute.php">حول</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="container">
  <div>
  <form method="POST" enctype="multipart/form-data">
<input type="file" title="اختيار فيديو" name="file">
<br>
<input type="text" placeholder="عنوان الفيديو" name="vid_name">
<br>
<input type="text" placeholder="وصف الفيديو" name="vid_desc">
<br>
<input type="submit" value="رفع الفيديو" name="up_btn">

  </form>
  </div>
<div>
  <br>
  <form method="POST">
إضافة خبر
<br><input type="text" name="news_title" placeholder="أكتب عنوان الخبر">
<br><textarea name="news_description" placeholder="أكتب الخبر بالتفصيل">

</textarea>
<br><input type="submit" name="btn_post" value="انشر الخبر">
  </form>
</div>
<?php
$news_title='';
$news_description='';
if(isset($_POST['news_title']))
$news_title=$_POST['news_title'];
if(isset($_POST['news_description']))
$news_description=$_POST['news_description'];
if(isset($_POST['btn_post'])){
  if($news_title!= null & $news_description!=null){
$insert="INSERT INTO `news` VALUES('','$news_title','$news_description')";
$query1=mysqli_query($con, $insert);
if($query1)
echo('تم اضافة الخبر');
else
echo('لم تتم اضافة الخبر');
}

else
echo('الرجاء ملء الحقول');}
?>
</div>


    <footer>
      <p>
        Copyright &copy; in 2022 by
        <span style="color: #245fbc"> braille teem </span>
      </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./javascript/javascript.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>