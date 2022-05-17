<!DOCTYPE html>
<html lang="jn">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <title>Finder</title>
</head>
<body>
<style>
    .container{
      padding-right: 0px;
      padding-left:0px;
      margin: 0px;
    }
    .row{
      margin-right: 0px;
      margin-left: 0px;
    }
    .fa-bitcoin{
      font-size: xx-large;
    }
    .d-block{
      height: 50vh;
    }
    li{
      list-style: none;
    }
    ol{
      padding: 0;
    }
    a:hover
    {text-decoration:none;}
  </style>

</head>
<body>
<div class="container-fluid border-bottom">
  <div class = "row p-4 text-center border-bottom" style = "background-color:#800080;">
    <div class = "row col-12">
      <div class = "col-1-md offset-1 justify-content-center d-flex align-items-center text-nowrap">
        </div>
      <div class = "col-5 offset-1 justify-content-center d-flex align-items-center"  style = "color:white;font-size: 1.85rem;">
        FINDER～趣味でつながろう～</div>
     
    </div>

   
  </div>

  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <img src="/storage/images/IMG_0426.jpg" class="d-block w-100" alt="花の画像1">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="/storage/images/IMG_0426.jpg" class="d-block w-100" alt="花の画像2">
      </div>
      <div class="carousel-item">
        <img src="/storage/images/道路掲示板.png" class="d-block w-100" alt="花の画像3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
  <div class="row">
    <div class="col-xl-3">
    <blockquote class="blockquote">
    <p class="mb-0">好きなことをとことん楽しむ</p>
    <footer class="blockquote-footer">その楽しさを
      <cite title="Source Title">同じ愛好者と分かち合いませんか？</cite>
      </footer>
    </blockquote>
    </div>
    <div class="col-xl-2">
      test
    </div>
    <div class="col-xl-8">
      st
    </div>
  </div>
</div>

  

  </div>
  <div class = "footer row col-12 mt-3 pb-4 justify-content-center" style = "background-color:rgb(69,75,86);">
    <div class = "left-footer col-sm-3 p-2 m-1" style = "color:white;">
      <ol class = "company justify-content-right" style = "font-size: 25px;color:red;">MyPortFolio</ol>
        <li class = "company_text"><a href="http://touyukun.php.xdomain.jp/board/"  style = "color:white">道路掲示板</li></a>
        <li class = "company_text"><a href="http://touyukun.php.xdomain.jp/todo/ " style = "color:white">Todoリスト</li>        
        <li class = "company_text"><a href="http://touyukun.php.xdomain.jp/tetoris/"  style = "color:white">テトリス</li>    
        <li class = "company_text"><a href="/"  style = "color:white">Finder</li>
        <li class = "company_text"><a href="https://github.com/touyukunn"  style = "color:white">Github</li>
    </div>
    <div class = "center-footer col-sm-3 p-2 m-1" style = "color:white;">
      <ol class = "service" style = "font-size: 25px;"><a href="#" class = "" style = "color:white">使用技術</a></ol>
      <li class = "work_text">JavaScript</li>
      <li class = "work_text">PHP</li>
      <li class = "work_text">Laravel</li>
      <li class = "work_text">HTML&CSS</li>
  </div>
  <div class = "right-footer col-sm-3 p-2 m-1" style = "color:white;">
      <ol class = "service" style = "font-size: 25px;"><a href="#" class = "" style = "color:white">環境</a></ol>
        <li>AWS</li>
        <li>Heroku</li>
        <li>Xserver</li>
  </div>
  </div>
</div>



<img src="http://touyukun.php.xdomain.jp/img/portrayal-g2050d4ed1_1280.jpg" class="img-fluid" alt="Responsive image">
  
</body>
</html>

