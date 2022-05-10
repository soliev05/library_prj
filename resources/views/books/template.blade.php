

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
	border: 1px solid blue;

}

.flex{
  display:flex;
  flex-wrap: wrap;

}
#menu1{
  width:1020px
}

#wrappe {
	width: 1020px;#e2e2e2;
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
</style>
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
	<div class="scanlines"></div>
</div>
<!-- End Fullscreen backgrounds -->
<!-- Begin Wrapper -->
<div id="wrappe">
  <div id="header">
    <div class="logo opacity"><a href="index.html"><img src="/style/images/logo.png" alt="" /></a></div>
    <div class="social">
      @if (Session::has('CurrentUser'))
      <li><a style="font-size:30px;font-family: 'PTSansRegular';" href="/login">{{!! (Session::get('CurrentUser'))[0]->name !!}} </a>
      @else
      <ul>
        <li><a style="font-size:30px;font-family: 'PTSansRegular';" href="/login"><img src="" alt="" />Войти </a>
        </li>
        <!-- <li><a href="/registrate"><img src="" alt="" />Регистрация</a></li> -->
      </ul>
    @endif
    </div>
  </div>
  <div class="clear"></div>
  <!-- Begin Menu -->
  <div id="menu" class="menu opacity">
    <ul>
      <li><a href="/" class="active">Книги</a></li>

      <li><a >Жанры</a>
      	<ul>
      	<li><a href="/sport-zdorove">Спорт, здоровье, красота</a></li>
      	<li><a href="/hobbi">Хобби, досуг</a></li>
      	<li><a href="/roditelyam">Родителям</a></li>
        <li><a href="/istoriya">История</a></li>
        <li><a href="/detskie-knigi">Детские книги</a></li>
        <li><a href="/biznes-knigi">Бизнес-книги</a></li>
        <li><a href="/bografiya">Биографии и мемуары</a></li>
        <li><a href="/uchebnaya-i-nauchnaya-literatura">Учебная и научная литература</a></li>
        
      	</ul>
      </li>
      <li><a href="portfolio.html">Популярное</a>
        
      </li>

      <li><a href="blog.html">Аудиокниги</a>
        
      </li>
      <li><a href="fullwidth.html">Новинки</a>
       
      </li>
      <li><a href="button-boxes-images.html">О библиотеке</a>
      
      </li>
      <li><a href="contact.html">Контакты</a></li>
    </ul>
    <br style="clear: left" />
  </div>
  <!-- End Menu --> 
  

  <div >
   @yield('home')
  <div>  


    
    <div id="footer">
      <div class="footer-top"></div>
      <!-- Divider -->
      <div class="one-fourth">
        <h3>Latest Posts</h3>
        <ul class="latest-posts">
          <li><span class="date"><em class="day">22</em><em class="month">Jun</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
          <li><span class="date"><em class="day">14</em><em class="month">May</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
          <li><span class="date"><em class="day">11</em><em class="month">May</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
          <li><span class="date"><em class="day">08</em><em class="month">Apr</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
        </ul>
      </div>
      <div class="one-fourth">
        <h3>Flickr</h3>
        <ul class="flickr">
          <li><a href="#"><img src="/style/images/art/f1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="/style/images/art/f2.jpg" alt="" /></a></li>
          <li><a href="#"><img src="/style/images/art/f3.jpg" alt="" /></a></li>
          <li><a href="#"><img src="/style/images/art/f4.jpg" alt="" /></a></li>
          <li><a href="#"><img src="/style/images/art/f5.jpg" alt="" /></a></li>
          <li><a href="#"><img src="/style/images/art/f6.jpg" alt="" /></a></li>
          <li><a href="#"><img src="/style/images/art/f7.jpg" alt="" /></a></li>
          <li><a href="#"><img src="/style/images/art/f8.jpg" alt="" /></a></li>
          <li><a href="#"><img src="/style/images/art/f9.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div class="one-fourth">
        <h3>Twitter</h3>
        <div id="twitter-wrapper">
          <div id="twitter"></div>
          <span class="username"><a href="http://twitter.com/elemisdesign">→ Follow @elemisdesign</a></span> </div>
      </div>
      <div class="one-fourth last">
        <h3>Get in Touch</h3>
        <!-- Form -->
        <div class="form-container">
          <form class="forms" action="contact/form-handler.php" method="post">
            <fieldset>
              <ol>
                <li class="form-row text-input-row">
                  <label>Name*</label>
                  <input type="text" name="name" value="" class="text-input required" title="" />
                </li>
                <li class="form-row text-input-row">
                  <label>Email*</label>
                  <input type="text" name="email" value="" class="text-input required email" title="" />
                </li>
                <li class="form-row text-area-row">
                  <textarea name="message" class="text-area required"></textarea>
                </li>
                <li class="form-row hidden-row">
                  <input type="hidden" name="hidden" value="" />
                </li>
                <li class="button-row">
                  <input type="submit" value="Submit" name="submit" class="btn-submit" />
                </li>
              </ol>
              <input type="hidden" name="v_error" id="v-error" value="Required" />
              <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
            </fieldset>
          </form>
          <div class="response"></div>
        </div>
        <!-- End Form --> 
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <!-- End Container -->
  
  <div id="copyright" class="opacity">
   
  </div>
</div>
<!-- End Wrapper --> 

<script type="text/javascript" src="/style/js/scripts.js"></script>
</body>
</html>