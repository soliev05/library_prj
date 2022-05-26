

<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" initial-scale='1' content="width=device-width">

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
  #butGenre{
    border:none;
    background-color:white;
    font-size:14px;
    margin-bottom:5px;
    padding:10px;
    width:150px;
    text-align: inherit;
    box-shadow: 0px 1px 0px 0 #0000006b;
  }
  #butGenre:hover{
    cursor:pointer;
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
.imgAdminMedia{
  display:none;
  width:25px;
  height:25px;
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
          
            <li style="margin-right:35px;">  
                <div>
                    <a  href="/profile">
                      <img class="imgAdminMedia" alt="" style='border-radius:50%;' src="https://avatars.mds.yandex.net/i?id=4b8d5006cc828cbe5c0d475e6ea7c7ab-5877601-images-thumbs&n=13&exp=1" height="60" width="60" class="avatar" />
                    </a>
                  </div>
                    
                <div style='text-align: center;' >
                    <a class='logRegistrText fontText' href="/profile">
                      {{ (Session::get('CurrentUser'))->first()->name }} 
                    </a>
                </div>  
            </li>

            <li><a class='logRegistrText fontText' href="/basket"><img class="imgAdminMedia" src="/style/images/basket2.png" alt="">Корзина</a></li>
          
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
          <li> 
              <form action="/genre/" method='get'>
                <input class='fontText' id='butGenre' type="submit" value='Спорт'> 
                <input type="hidden" name='genre' value='sport'>
              </form>
              
          </li>
           <li>
              <form action="/genre/" >
                <input class='fontText' id='butGenre' type="submit" value='Хобби' ></a>
                <input type="hidden" name='genre' value='hobbi'>
              </form>
            </li>
          <form action="/genre/" >
      	    <li> <input class='fontText' id='butGenre' type="submit" value='Родителям' ></a></li>
            <input type="hidden" name='genre' value='roditelyam'>
          </form>

          <form action="/genre/" >
      	    <li> <input class='fontText' id='butGenre' type="submit" value='История' ></a></li>
            <input type="hidden" name='genre' value='istoriya'>
          </form>

          <form action="/genre/" >
      	    <li> <input class='fontText' id='butGenre' type="submit" value='Детские книги' ></a></li>
            <input type="hidden" name='genre' value='detskie-knigi'>
          </form>

          <form action="/genre/" >
      	    <li> <input class='fontText' id='butGenre' type="submit" value='Бизнес книги' ></a></li>
            <input type="hidden" name='genre' value='biznes-knigi'>
          </form>

          <form action="/genre/" >
      	    <li> <input class='fontText' id='butGenre' type="submit" value='Биографии' ></a></li>
            <input type="hidden" name='genre' value='bografiya'>
          </form>


          <form action="/genre/" >
      	    <li> <input class='fontText' id='butGenre' type="submit" value='Научная литература' ></a></li>
            <input type="hidden" name='genre' value='nauchnaya-literatura'>
          </form>
        

      
        

        
      	</ul>
      </li>
      <li><a class='fontText' href="/popular">Популярное</a>
        
      </li>

      <li><a href="">Аудиокниги</a>
        
      </li>
      <li><a href="/novinki">Новинки</a>
       
      </li>
      <li><a href="/library">О библиотеке</a>
      
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
  <div id="footer">
      <div class="footer-top"></div>
      <!-- Divider -->
      
      
      
      <div class="one-fourth flex fontText" style='margin-left:30px;'>

        <div style='width:250px' class=" last">
              <h3    >Email</h3>
              <span style='color:#e9e4e4;'>elkitob@yandex.ru</span>
        </div>
        <div>
          <h4>Мы в соц. сетях</h4>
            <div style='width:250px' id="twitter-wrapper" class='flex'>
            
                <div><a href="#"><img src="/style/images/icon-rss.png" alt="RSS" /></a></div>
                <div><a href="#"><img src="/style/images/icon-facebook.png" alt="Facebook" /></a></div>
                <div><a href="#"><img src="/style/images/icon-twitter.png" alt="Twitter" /></a></div>
                <div><a href="#"><img src="/style/images/icon-googleplus.png" alt="Google+" /></a></div>
          
            </div>
        </div>
        <div style='width:250px'>
              <h3>Наши контакты</h3>
              <span style='color:#e9e4e4;'>+7123456789</span>
              <span style='color:#e9e4e4;' >+7123456789</span>
        </div>
            
            <div class="clear"></div>
      </div>
  </div>
  <!-- End Container -->
<!--   
  <div id="copyright" class="opacity">
   
  </div> -->

<!-- End Wrapper --> 

<script type="text/javascript" src="/style/js/scripts.js"></script>
</body>
</html>
<!--   
    @yield('footer')
    <script type="text/javascript" src="/style/js/scripts.js"></script> -->