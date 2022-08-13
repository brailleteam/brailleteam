<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="braille" />
    <title>الصفحة الرئيسية</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css_files/style.css" />
    <?php include('config.php')
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

    <section class="our-servises">
      <div class="container">
        <h2>ما الذي يقدمه فريق braille teem</h2>
        <p>
          فريق braille teem من ذوي الاعاقة البصرية يقوم بتدريب على الامور
          التالية
        </p>
        <div class="boxes">
          <div class="servise">
            <h3>التصوير</h3>
            <img src="images/تصوير.png" alt="" style="width: 40%" />
            <p>
              يقدم فريق braille teem دورات تدريبية في مجال التصوير ويشمل التصوير
              الفوتوغرافي والتصوير السينمائي
            </p>
          </div>

          <div class="servise">
            <h3>المونتاج</h3>
            <img src="images/مونتاج.png" alt="" style="width: 40%" />
            <p>
              كما يقدم فريقنا دورة تدريبية تشمل أساسيات المونتاج وتطبيقات adobe
            </p>
          </div>

          <div class="servise">
            <h3>البرمجة</h3>
            <img src="images/برمجة.png" alt="" style="width: 38%" />
            <p>
              يقدم فريق Braille تدريب شامل على اساسيات لغات البرمجة وعلى تصميم
              مواقع الويب وانشاء تطبيقات صطح المكتب وتطبيقات الهواتف الذكية
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="news py-5" id="faq">
      <div class="container">
        <h2 class="text-center mb-3">أخر الأخبار</h2>

        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
          <?php
$selectNews='SELECT * FROM `news` ORDER BY `id` DESC';
$fetchAllNews= mysqli_query($con, $selectNews);
if(!$fetchAllNews)
echo('error fetch news');
  while($rows= mysqli_fetch_array($fetchAllNews)){
    if($rows){
      $newsTitle=$rows['news_title'];
      $newsDescription=$rows['news_description'];
      echo('<h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne"
                aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne"
              >
                '.$newsTitle.'
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="panelsStayOpen-headingOne"
            >
              <div class="accordion-body">
                <p class="lead">
'.$newsDescription.'
                </p>
              </div>
            </div>
          </div>');}}
          ?>

        </div>
      </div>
    </section>

    <section class="connection">
      <div class="container">
        <h3>اتصل بنا الان</h3>
        <form method="post" >

          <div>
            <label for="email">
             بريدك الاكتروني
              <span style="margin-right: 10px"
                ><i class="fa fa-envelope"></i> </span
            ></label>
            <input type="text" placeholder="email..." id="email" required name="email"/>
          </div>
          <div>
            <label for="email">
              رسالة
              <span style="margin-right: 10px"
                ><i class="fa fa-commenting"> </i
              ></span>
            </label>
            <textarea name="message" id="" cols="30" rows="3"></textarea>
          </div>
          <button name="send">ارسال</button>
        </form>
        <?php
        $to='omaaromar804@gmail.com';
        $message='';
$from='';
if(isset($_POST['email']))
$from=$_POST['email'];
          $subject='';
          if(isset($_POST['message']))
$message=$_POST['message'];
if(isset($_POST['send'])){
  if($_POST['email']!=null &$_POST['message']!= null){
   $send=mail($to,$subject,$message);
if(!$send)
echo('message not send');
else
echo('message send ');
  }
}
          ?>
      </div>
      <p class="or">أو</p>
      <div class="connect">
        <ul class="social d-block">
          <li>
            <a href="https://www.facebook.com/BrailleTeam/" target="_blank">
              <i class="fa fa-facebook"></i> facebook</a
            >
          </li>
          <!-- <li> <a href="#"> <i class="fa fa-youtube"></i> YouTupe</a> </li> -->
          <li>
            <a href="mailto: brailleteam55@gmail.com" target="_blank">
              <i class="fa fa-google"></i> Email</a
            >
          </li>
          <li> <a href="#"> <i class="fa fa-instagram" target="_blank"></i> instagram</a> </li>
          <li>
            <a href="https://wa.me/message/DKJ77K6RKS4AB1">
              <i class="fa fa-whatsapp" target="_blank"></i> whatsapp</a>
          </li>
        </ul>
      </div>
    </section>

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