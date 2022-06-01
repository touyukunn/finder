<!DOCTYPE html>
<html lang="jn">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>



<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
<div class="jumbotron text-center bg-secondary ">
  <h1 class="display-4 text-white ">FINDER～趣味でつながろう～</h1>
  <p class="lead">This is an application to find hobby friends, We will provide such a place.Enjoy what you like with people you like</p>
  <hr class="my-4">
  <p>You need an Instagram account To use this app.</p>
  <a class="btn btn-primary btn-lg" href="/home" role="button">Start FINDER</a>
</div>

<br>


<div class="container-fluid border-bottom">
  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="10000">
        <img src="/storage/images/23778479_m.jpg" class="w-auto p-3 h-auto d-inline-block" alt="画像1">
      </div>
      <div class="carousel-item" data-interval="2000">
        <td><img src="/storage/images/IMG_2615.JPG"class="d-block h-100 " alt="画像2"></td>
      
      </div>
      <div class="carousel-item">
        <img src="/storage/images/portrayal-g2050d4ed1_1280.jpg" class="d-block w-100" alt="画像3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <h3><p class="text-center text-success">同じ趣味を持った人が集まればより楽しく盛り上がるとは思いませんか？</p></h3>
  <p class="text-center text-success">あなたが好きなことを同じく好きな人は他にもいるはずです</p>
  <p class="text-center text-success">そんな好きなことに熱中している人同士をつなげてたい</p>
  <p class="text-center text-success">そんな想いからこのアプリは生まれました</p>
  <p class="text-center text-success">さあ、あなたの好きを教えてください</p>
  <p class="text-center text-warning">★こちらのアプリはインスタグラムのアカウント名を名前にご登録いただき、趣味が同じ人同士がこのFINDERで出会い、インスタグラムで交流を広げてもらうことが目的です★~</p>
 



 

  </div>
  <div class = "footer row col-12 mt-3 pb-4 justify-content-center" style = "background-color:rgb(69,75,86);">
    <div class = "left-footer col-sm-3 p-2 m-1" style = "color:white;">
      <ol class = "company justify-content-right" style = "font-size: 25px;"><a href="#" class = "" style = "color:red">My portFolio</a></ol>
        <li class = "company_text"><a href="http://touyukun.php.xdomain.jp/board/"  style = "color:white">道路掲示板</a></li>
        <li class = "company_text"><a href="http://touyukun.php.xdomain.jp/todo/ " style = "color:white">Todoリスト</a></li>        
        <li class = "company_text"><a href="http://touyukun.php.xdomain.jp/tetoris/"  style = "color:white">テトリス</a></li>    
        <li class = "company_text"><a href="/home"  style = "color:white">FINDER</a></li>
        <li class = "company_text"><a href="https://github.com/touyukunn"  style = "color:white">GitHub</a></li>
    </div>
    <div class = "center-footer col-sm-3 p-2 m-1" style = "color:white;">
      <ol class = "work justify-content-left" style = "font-size: 25px;"><a href="#" class = "" style = "color:red">使用技術</a></ol>
        <li class = "work_text">PHP</li>
        <li class = "work_text">Laravel</li>        
        <li class = "work_text">HTML&CSS</li> 
        <li class = "work_text">JavaScript</li>    
    </div>
    <div class = "right-footer col-sm-3 p-2 m-1" style = "color:white;">
      <ol class = "service" style = "font-size: 25px;"><a href="#" class = "" style = "color:red">環境</a></ol>
        <li>AWS</li>
        <li>Heroku</li>
        <li>Xserver</li>
        
  </div>
  </div>
</div>




  
</body>
</html>

