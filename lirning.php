<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="CBP_Media" />
    <title>تدريبات</title>
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
<?php

use function PHPSTORM_META\type;

include('config.php');
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
              <a class="nav-link" aria-current="page" href="./index.php"
                >الصفحة الرئيسية</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./lirning.php">تدريبات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./aboute.php">حول</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="braille-news">
      <div class="container-fluid">
        <div
          class="row news row align-items-center justify-content-center flex-row-reverse"
        >
        <?php
$selectNews='SELECT * FROM `news` ORDER BY `id` DESC';
$fetchAllNews= mysqli_query($con, $selectNews);
if(!$fetchAllNews)
echo('error fetch news');
  while($rows= mysqli_fetch_array($fetchAllNews)){
    if($rows){
      $newsTitle=$rows['news_title'];
      $newsDescription=$rows['news_description'];
      echo('

          <div class="col-lg-7 col-md-12 col-12">
            <h3>'.$newsTitle.'</h3>
            <p class="lead">
'.$newsDescription.'

            </p>
          </div>');
        }
      }
    ?>
        </div>
      </div>
    </section>

    <section class="videos">
      <div class="container-fluid">
        <h1 class="text-center">ماذا يقدم فريق braille teem</h1>
        <div class="row last-videos">
          <div class="col-lg-3 col-md-6 col-12 new">
            <
            
<?php
$select='SELECT * FROM `videos` ORDER BY `id` DESC';
$fetchAllVideos=mysqli_query($con,$select);
if($fetchAllVideos){
while($row= mysqli_fetch_assoc($fetchAllVideos)){
if(!$row){
$location=$row['location'];
echo($location);
  $title=$row['title'];
  $desc=$row['description'];
echo('<div>
<video controls>
<source src='."$location".' type="video/mp4"/>
</video>

<h4>'.$title.'</h4>
            <p>'.$desc.'</p>
          </div>');
}}}
?>          </div>
        </div>
      </div>
    </section>
    <div class="sociales">
      <ul class="">
        <li>
          <a href="https://www.facebook.com/BrailleTeam/" target="_blank">
            <i class="fa fa-facebook"></i>
            facebook
          </a>
        </li>
        <li>
          <a href="mailto: brailleteam55@gmail.com" target="_blank">
            <i class="fa fa-google"></i>
            email
          </a>
        </li>
        <li> <a href="#"> <i class="fa fa-instagram" target="_blank"></i> instagram</a> </li>
        <li>
          <a href="https://wa.me/message/DKJ77K6RKS4AB1"> <i class="fa fa-whatsapp" target="_blank"></i>WhatsApp</a>
        </li>
      </ul>
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