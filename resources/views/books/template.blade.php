

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title> @yield('tittle')</title>
<style>
@font-face {
	font-family: 'Andika'; 
	src: url(/style/font/Andika/Andika-Regular.ttf); 
}

  .temp1{
	 height:300px;
   padding:10px;
   margin :15px;
	 /* border: 1px solid blue; */
   background:#2f2f2f33;
   border-radius:5px;
}

.flex{
  display:flex;
  flex-wrap: wrap;

}
#menu1{
  width:1020px
}

#wrappe {
	width: 1020px;
	margin: 0 auto;
}
.img1{
  width:150px;
  height:230px;
  border: 1px solid blue;
  margin-bottom:20px;

}
h1, h2, h3, h4, h5, h6 {
	color: #e2e2e2;
	font-weight: normal;
	padding-bottom: 12px;
}
li {
    list-style-type: none; /* Убираем маркеры */
   }

.imgLogo{
    width:400px;
   
  }
  .fontText{
    font-family: 'PTSansRegular';
  }
  .logRegistrText{
    font-size:20px;
    color:#0f2645;
    margin-right:10px;
  }
  ul > li{
    font-family: 'PTSansRegular';
    font-size:15px;
  }
  /* #backgColor{
    background-color: #bad8e35e;
  } */
  .temp1:hover{
    box-shadow: 0 0 8px 0px #1b1b2f;
  }
  .bookName{
    color:#e2e2e2;
    width:140px;
    height:40px;
        font-size: 18px;
        line-height: 20px;
    font-weight: 500;
    font-style: normal;
    height: 20px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    margin-bottom: 0;
    -webkit-transition-property: color;
    -o-transition-property: color;
    transition-property: color;
}
.line{
    border-top: 3px solid #454545;
    height: 8px;
    width:100%;
    border-bottom: 1px solid #454545;
    margin: 20px 0 36px 0;
    
  }
  

/* media */
@media  (max-width: 400px)  {
 
  #wrappe{
    width:300px;
  }
  .temp1{
    width:280px;
    height:500px;

  }
  .img1{
    width: 260px;
    height: 400px;

  }
  
  .ulList{
    display: inline-grid;
  }
  #menu{
      width:300px; 
      text-align: center;
  }
  .imgLogo {
  width: 190px;
}
.slesh{
  display:none;
}
.logRegistrText{
  font-size:14px;
}
}


</style> 

@yield('searchCss')
<!-- <link rel="stylesheet" type="text/css" href="/temp.css" media="all" /> -->
<link rel="shortcut icon" type="image/x-icon" href="/style/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="/style/color/red.css" media="all" />
<link rel="stylesheet" type="text/css" media="screen" href="/style/css/prettyPhoto.css"  />
<link rel="stylesheet" type="text/css" href="/style/css/jquery.slider.css" />
<link rel="stylesheet" type="text/css" href="/style/type/museo.css" media="all" />
<link rel="stylesheet" type="text/css" href="/style/type/ptsans.css" media="all" />
<link rel="stylesheet" type="text/css" href="/style/type/charis.css" media="all" />

<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="/style/css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="/style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="/style/css/ie9.css" media="all" />
<![endif]-->
<script type="text/javascript" src="/style/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="/style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="/style/js/transify.js"></script>
<script type="text/javascript" src="/style/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="/style/js/carousel.js"></script>
<script type="text/javascript" src="/style/js/twitter.min.js"></script>
<script type="text/javascript" src="/style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/style/js/jquery.superbgimage.min.js"></script>
<script type="text/javascript" src="/style/js/jquery.slickforms.js"></script>
<script type="text/javascript" src="/style/js/jquery.slider.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	$('.forms').dcSlickForms();
});
</script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".slider").slideshow({
        width      : 900,
        height     : 400,
        transition : 'ExplodeRandom'
      });
    });
  </script>

</head>
<body>
<!-- Fullscreen backgrounds -->
<div id="thumbs">
<a href="/style/images/book1.jpg">1</a>

</div>
<div id="superbgimage">

</div>
<!-- End Fullscreen backgrounds -->
<!-- Begin Wrapper -->
<div id="wrappe">
  <div id="header">
    <div class="logo opacity"><a  href="/"> <img class="imgLogo" src="/style/images/elKitob.png" alt=""> </a></div>
    <div class="social">
      <ul class='ulList'>
      @if (Session::has('CurrentUser'))
          
            <li><img alt="" src="https://avatars.mds.yandex.net/i?id=4b8d5006cc828cbe5c0d475e6ea7c7ab-5877601-images-thumbs&n=13&exp=1" height="60" width="60" class="avatar" />
            </li> 
            <li><a class='logRegistrText fontText' href="/profile">{{ (Session::get('CurrentUser'))->first()->name }} </a>
            </li>

            <li><a class='logRegistrText fontText' href="/basket">Корзина</a></li>
          
      @else
         
            <li class='textSize'><a  class='logRegistrText fontText's href="/login">Войти </a></li>
            <li class='slesh'>|&nbsp;&nbsp;</li>
            <li class='textSize'  ><a class='logRegistrText fontText' href="/registrate">Регистрация</a></li> 
          
      @endif

    </div>
  </div>
  <div class="clear"></div>
  <!-- Begin Menu -->
  <div id="menu" class="menu opacity">
    <ul class='ulList'>
      <li><a href="/" class="active" style=' background: white;'>Книги</a></li>

      <li><a >Жанры</a>
      	<ul class='fontText'>
      	<li><a  href="/sport-zdorove">Спорт, здоровье, красота</a></li>
      	<li><a href="/hobbi">Хобби, досуг</a></li>
      	<li><a href="/roditelyam">Родителям</a></li>
        <li><a href="/istoriya">История</a></li>
        <li><a href="/detskie-knigi">Детские книги</a></li>
        <li><a href="/biznes-knigi">Бизнес-книги</a></li>
        <li><a href="/bografiya">Биографии и мемуары</a></li>
        <li><a href="/uchebnaya-i-nauchnaya-literatura">Учебная и научная литература</a></li>
        
      	</ul>
      </li>
      <li><a class='fontText' href="portfolio.html">Популярное</a>
        
      </li>

      <li><a href="blog.html">Аудиокниги</a>
        
      </li>
      <li><a href="fullwidth.html">Новинки</a>
       
      </li>
      <li><a href="button-boxes-images.html">О библиотеке</a>
      
      </li>
      <li><a href="/contact">Контакты</a></li>
    </ul>
    <br style="clear: left" />
  </div>
  <!-- End Menu --> 

  
 
  <div > 
   @yield('search')
   @yield('line')
   @yield('home')
  <div>  


    @yield('footer')