@extends('books.template')


@section('tittle')
    О библиотеке
@endsection

@section('home')



<script type="text/javascript">
jQuery(document).ready(function($){
	$('.forms').dcSlickForms();
});
</script>
<script type="text/javascript">
$(document).ready(function() {

      var
        speed = 1000,   // animation speed
        $wall = $('#portfolio .items'),

        masonryOptions = {         // initial masonry options

          itemSelector: '.box:not(.invis)',
          animate: true,
          animationOptions: {
            duration: speed,
            queue: false
          }
        };

		$wall.imagesLoaded(function(){

			$wall.masonry(masonryOptions);

			// Create array of filters from link href
			var arrFilter = [];
			$('#filtering-nav a').each(function(){
				fhash = $(this).attr('href').replace('#','');
				if(fhash != 'all'){
					arrFilter.push(fhash);
				}
			});

			//  Get the parameter value after the # symbol
			var url=document.URL.split('#')[1];
			if(url == undefined){
				url = 'all';
			}
			$('#filtering-nav a.'+url).parent().addClass('active');

			if(jQuery.inArray(url, arrFilter) > '-1'){
				// set masonry options animate to false
				masonryOptions.animate = false;
				// hide boxes that don't match the filter class
				$wall.children().not('.'+url).toggleClass('invis').hide();
			}
		//	imageSetCss($(".box"));
			// run masonry again
			$wall.masonry(masonryOptions);
		//	imageFadeIn($(".box"));
		$wall.animate({opacity: 1},1000);

		});

		$('#filtering-nav a').click(function(e){
			var color = $(this).attr('class');
			filterClass = '.' + color;
			$('#filtering-nav li').removeClass('active');
			$(this).parent().addClass('active');

			if(filterClass=='.all') {
			  // show all hidden boxes
			  $wall.children('.invis').toggleClass('invis').fadeIn(speed);
			} else {
			  // hide visible boxes
			  $wall.children().not(filterClass).not('.invis').toggleClass('invis').fadeOut(speed);
			  // show hidden boxes
			  $wall.children(filterClass+'.invis').toggleClass('invis').fadeIn(speed);
			}
			$wall.masonry({animate: true});
			// set hash in URL
			location.hash = color;
			e.preventDefault();
		});
});
$.fn.imagesLoaded = function(a) {
	var
	b=this.find("img"),
	c=[],
	d=this,
	e=b.length;

	if(!b.length){
		a.call(this);
		return this
	}
	b.one("load error",function(){
		--e===0&&(e=b.length,b.one("load error",function(){
			--e===0&&a.call(d)}).each(function(){
				this.src=c.shift()
			})
		)}
	).each(function(){
		c.push(this.src),this.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="
	});
	return this
};
  </script>


  <!-- Begin Container -->
  <div id="container" class="opacity">
    <h2>Our Portfolio</h2>
    <p>Pellentesque congue, lorem sed pulvinar faucibus, neque elit ullamcorper mi, in pretium odio dolor et ligula. Nullam ultricies ullamcorper turpis id semper. Vestibulum vel turpis sit amet lectus tincidunt euismod. Vestibulum suscipit neque bibendum sapien auctor luctus.</p>

    <!-- Begin Portfolio -->
      <div id="portfolio">
        <ul id="filtering-nav">
          <li>Filter:</li>
          <li><a class="all" href="#all">All</a></li>
          <li><a class="cat1" href="#cat1">Category I</a></li>
          <li><a class="cat2" href="#cat2">Category II</a></li>
          <li><a class="cat3" href="#cat3">Video</a></li>
        </ul>
        <div class="clear"></div>
        <div class="items">
          <div class="box col5 cat1"><a href="style/images/art/p1.jpg" rel="prettyPhoto" title="this is title"><span class="overlay zoom"></span><img src="style/images/art/p1.jpg" alt="" /></a></div>
          <div class="box col5 cat2"><a href="AboutBook.blade.php"><span class="overlay details"></span><img src="style/images/art/p2.jpg" alt="" /></a></div>
          <div class="box col5 cat1"><a href="style/images/art/p3.jpg" rel="prettyPhoto" title="this is title"><span class="overlay zoom"></span><img src="style/images/art/p3.jpg" alt="" /></a></div>
          <div class="box col5 cat2"><a href="style/images/art/p4.jpg" rel="prettyPhoto" title="this is title"><span class="overlay zoom"></span><img src="style/images/art/p4.jpg" alt="" /></a></div>
          <div class="box col5 cat1"><a href="AboutBook.blade.php"><span class="overlay details"></span><img src="style/images/art/p5.jpg" alt="" /></a></div>
          <div class="box col5 cat2"><a href="style/images/art/p6.jpg" rel="prettyPhoto" title="this is title"><span class="overlay zoom"></span><img src="style/images/art/p6.jpg" alt="" /></a></div>
          <div class="box col5 cat1"><a href="style/images/art/p7.jpg" rel="prettyPhoto" title="this is title"><span class="overlay zoom"></span><img src="style/images/art/p7.jpg" alt="" /></a></div>
          <div class="box col5 cat2"><a href="AboutBook.blade.php"><span class="overlay details"></span><img src="style/images/art/p8.jpg" alt="" /></a></div>
          <div class="box col5 cat2"><a href="style/images/art/p9.jpg" rel="prettyPhoto" title="this is title"><span class="overlay zoom"></span><img src="style/images/art/p9.jpg" alt="" /></a></div>
          <div class="box col5 cat1"><a href="style/images/art/p10.jpg" rel="prettyPhoto" title="this is title"><span class="overlay zoom"></span><img src="style/images/art/p10.jpg" alt="" /></a></div>
          <div class="box col5 cat2"><a href="AboutBook.blade.php"><span class="overlay details"></span><img src="style/images/art/p11.jpg" alt="" /></a></div>
          <div class="box col5 cat1"><a href="style/images/art/p12.jpg" rel="prettyPhoto" title="this is title"><span class="overlay zoom"></span><img src="style/images/art/p12.jpg" alt="" /></a></div>
		  <div class="box col5 cat3"><a href="http://vimeo.com/25518056" rel="prettyPhoto" title="this is title"><span class="overlay play"></span><img src="style/images/art/p13.jpg" alt="" /></a></div>
		  <div class="box col5 cat3"><a href="http://vimeo.com/6757600" rel="prettyPhoto" title="this is title"><span class="overlay play"></span><img src="style/images/art/p14.jpg" alt="" /></a></div>
        </div>
        <!-- .wrap -->
    </div>
    <!-- End Portfolio -->

    <div class="clear"></div>
    @endsection