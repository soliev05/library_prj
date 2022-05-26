@extends('books.template')


@section('tittle')
    elKitob
@endsection


@section('home')

  <!-- Begin Container -->
  <div id="container" class="opacity">

    <!-- Begin Blog -->
    <div class="blog">

      <!-- Begin Posts -->
      <div class="content">

        <!-- Begin Post -->
        


<div class='flex ' id='backgColor'>
    @foreach ($books_list as $i) 
     <a href="/book/{{ $i->id }} "  >
        
            <div class="temp1">
                 <div >
                      <img class="img1" src="{{ Storage::url($i->urlImage) }}" alt="">
                 </div>

                 <div class="author bookName">
                     {{$i->name}}
                 </div>
            </div>
       
    </a>
   @endforeach

</div>
{{ $books_list->onEachSide(2)->links() }}

@section('line')
<div class="line"></div>

@endsection

        <!-- End Post -->

        <!-- Begin Post -->
        <div class="post">

          <!-- Begin Post Info -->
          <div class="post-info">
            <!-- Begin Date -->
            <div class="post-date"> <span class="day">15</span> <span class="month">FEB</span> <span class="year">2011</span> </div>
            <!-- End Date -->
            <!-- Begin Title -->
            <div class="post-title">
              <h1><a href="post.html">Proin euismod dui rutrum risus</a></h1>
              <div class="post-meta"> <span class="comments"><a href="#">13 Comments</a></span> <span class="categories"><a href="#">Web Design</a>, <a href="#">Photography</a></span> </div>
            </div>
            <!-- End Title -->
          </div>
          <!-- End Post Info -->

          <div class="post-text"> <iframe src="http://player.vimeo.com/video/24573328?title=0&amp;byline=0&amp;portrait=0" width="595" height="335" frameborder="0"></iframe> <br />
            <p>Cras vehicula, enim ac rutrum imperdiet, tellus nibh sodales magna, at mollis odio mi a urna. Aliquam augue augue, sodales eu condimentum a, scelerisque eget purus. Sed suscipit mattis molestie. Proin risus justo, ornare quis euismod quis, cursus nec eros. Ut egestas faucibus metus, non malesuada justo ornare in. Nunc aliquet risus sed orci vehicula sed varius tellus egestas. Curabitur cursus rutrum interdum. Praesent in nisl lorem, vel viverra lectus. Nullam euismod auctor odio sed sagittis… <a class="more">Continue Reading →</a></p>
          </div>
          <!-- End Text -->
          <span class="tags"><a href="#">Black & White</a>, <a href="#">Color</a>, <a href="#">Portfolio</a></span>
        </div>
        <!-- End Post -->



        <!-- Begin Post -->
        <div class="post">

          <!-- Begin Post Info -->
          <div class="post-info">
            <!-- Begin Date -->
            <div class="post-date"> <span class="day">15</span> <span class="month">FEB</span> <span class="year">2011</span> </div>
            <!-- End Date -->
            <!-- Begin Title -->
            <div class="post-title">
              <h1><a href="post.html">Proin euismod dui rutrum risus</a></h1>
              <div class="post-meta"> <span class="comments"><a href="#">13 Comments</a></span> <span class="categories"><a href="#">Web Design</a>, <a href="#">Photography</a></span> </div>
            </div>
            <!-- End Title -->
          </div>
          <!-- End Post Info -->

          <div class="post-text"> <a href="post.html"><img src="style/images/art/post3.jpg" alt="" /></a> <br />
            <p>Cras vehicula, enim ac rutrum imperdiet, tellus nibh sodales magna, at mollis odio mi a urna. Aliquam augue augue, sodales eu condimentum a, scelerisque eget purus. Sed suscipit mattis molestie. Proin risus justo, ornare quis euismod quis, cursus nec eros. Ut egestas faucibus metus, non malesuada justo ornare in. Nunc aliquet risus sed orci vehicula sed varius tellus egestas. Curabitur cursus rutrum interdum. Praesent in nisl lorem, vel viverra lectus. Nullam euismod auctor odio sed sagittis… <a class="more">Continue Reading →</a></p>
          </div>
          <!-- End Text -->
          <span class="tags"><a href="#">Black & White</a>, <a href="#">Color</a>, <a href="#">Portfolio</a></span>
        </div>
        <!-- End Post -->

        <!-- Begin Page Navi -->
    			<div class="page-navi">
    				<p>Page 1 of 3</p>
    				<ul>
    					<li><a href="#" class="current">1</a></li>
    					<li><a href="#">2</a></li>
    					<li><a href="#">3</a></li>
    				</ul>
    			</div>
    			<!-- End Page Navi -->

      </div>
      <!-- End Posts -->

      <!-- Begin Sidebar -->
      <div class="sidebar">
      <div class="sidebar-box">
      <h4>Latest Posts</h4>
      <ul class="latest-posts">
          <li><span class="date"><em class="day">22</em><em class="month">Jun</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
          <li><span class="date"><em class="day">14</em><em class="month">May</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
          <li><span class="date"><em class="day">11</em><em class="month">May</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
          <li><span class="date"><em class="day">08</em><em class="month">Apr</em></span> <a href="#">Vivamus soder pharetra libero atincidunt</a> </li>
        </ul>

      </div>
       <div class="sidebar-box">
      <h4>Custom Text</h4>
      <p>Cras vehicula, enim ac rutrum imperdiet, tellus nibh sodales magna, at mollis odio mi a urna. Aliquam augue augue, sodales eu condimentum a, scelerisque eget purus. Sed suscipit mattis molestie.</p>
      </div>

      <div class="sidebar-box">
      <h4>Search</h4>
      <form class="searchform" method="get">
      	<input type="text" id="s" name="s" value="type and hit enter" onfocus="this.value=''" onblur="this.value='type and hit enter'"/>
      </form>
      </div>

      <div class="sidebar-box">
      <h4>Categories</h4>
      <div class="cat-list">
      <ul>
      	<li><a href="#">journal <span>24</span></a></li>
      	<li><a href="#">photography <span>12</span></a></li>
      	<li><a href="#">design <span>5</span></a></li>
      	<li><a href="#">inspiration <span>3</span></a></li>
      	<li><a href="#">fun <span>16</span></a></li>
      	<li><a href="#">casual <span>5</span></a></li>
      	<li><a href="#">business <span>9</span></a></li>
      	<li><a href="#">web <span>2</span></a></li>
      	<li><a href="#">color <span>1</span></a></li>
      	<li><a href="#">portfolio <span>7</span></a></li>
      </ul>
      </div>
      </div>

      <div class="sidebar-box">
      <h4>Tags</h4>
      <div class="tag-list">
      <ul>
      	<li><a href="#">journal</a></li>
      	<li><a href="#">photography</a></li>
      	<li><a href="#">design</a></li>
      	<li><a href="#">inspiration</a></li>
      	<li><a href="#">fun</a></li>
      	<li><a href="#">casual</a></li>
      	<li><a href="#">business</a></li>
      	<li><a href="#">web</a></li>
      	<li><a href="#">color</a></li>
      	<li><a href="#">portfolio</a></li>
      </ul>
      </div>
      </div>

      <div class="sidebar-box">
      <h4>Sponsors</h4>
      <ul class="ads">
		<li><a href="#"><img src="style/images/art/ad1.jpg" alt="" /></a></li>
		<li><a href="#"><img src="style/images/art/ad2.jpg" alt="" /></a></li>
		<li><a href="#"><img src="style/images/art/ad3.jpg" alt="" /></a></li>
		<li><a href="#"><img src="style/images/art/ad4.jpg" alt="" /></a></li>
      </ul>
      </div>


      </div>
      <!-- End Sidebar -->
    </div>
    <!-- End Blog -->

    <div class="clear"></div>
   @endsection