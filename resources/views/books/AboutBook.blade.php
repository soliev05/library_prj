<style>
  .aboutCont{
    width:100%;
    min-height: 600px;
    height:auto;

    display:flex;

  }
  .imgBook{
    width:400px;
    height:auto;
    justify-content: center;
    /* border:1px solid blue; */
    padding:30px 0px 30px 30px;
  }
  .permission{
    padding:50px 15px 15px 25px;
    width:auto;
    height:auto;
    /* border:1px solid blue; */
  }
  .nameBook{
    font-size: xxx-large;
    margin-bottom:20px;
    width:470px
  }
  .inform{
    margin-top:35px
  }
  div.inform > div{
    margin-bottom:25px;
    font-size: x-large;
    font-weight:500;
  }

  .line{
    border-top: 3px solid #454545;
    height: 10px;
    width:100%;
    border-bottom: 1px solid #454545;
    margin: 30px 0 36px 0;
    /* padding:100px; */
  }
  div.headerComm{
    color: #e2e2e2;
    font-family: 'PTSansRegular';
    font-size: 30px;
    margin-left:50px;

  }
  .contBook{
    background-color: #c4c4c438;
    /* margin:25px 0px 50px 0px; */
    margin:20px;
    font-family: 'PTSansRegular';
    padding-bottom:15px;
  }
 div.imgBook > img{
    max-width:380px;
    height: fit-content;
  }
  .contAboutBook{
    /* font-family: 'PTSansRegular'; */
    font-size:20px;
    margin:20px 30px 20px 30px;

  }

  div.contAboutBook > span{
    font-weight: bolder;
    font-size:25px;
  }
  div.inform > div > span{
    font-weight: bold;
  }
  .comment {
     background-color: #fff;
     border: 1px solid #dedede;
     width: 580px;
     height: 140px;
     resize: none;
     color: #4d4d4d;
     font-family: 'PTSansRegular';
     font-size: 13px;
     padding: 5px 10px;
     -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
     border-radius: 5px;
  }
 .commentButton {
   
     color: #fff;
     -webkit-transition: all 200ms ease-in;
     font-family: 'PTSansRegular';
     background:  url(style/images/button.png) repeat-x;
     border: none;
     width: 150px;
     height: 35px;
     font-family: 'PTSansRegular';
     -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
     border-radius: 3px;
     color: #e2e2e2;
     font-size: 14px;
     padding: 4px 20px 1px 20px;
     cursor: pointer;
     margin-left: 70px;
     background-color: #ab4d63;
     margin-top:10px;
}
.user > img{
  border-radius:50%;
}

/* media 300px */
@media  (max-width: 400px){
  .aboutCont{
    flex-direction: column;
  }
  div.imgBook > img {
    /* margin-left: -200px; */

}
.nameBook {

font-size: x-large;
margin-bottom: 20px;
width: 470px;

}
div.inform > div {

margin-bottom: 25px;
font-size: initial;
font-weight: 500;

}
.form-container {

position: relative;
width: 200px;
margin-left:1px;

}
.imgBook {

width: 195px;
height: auto;
justify-content: center;

padding: 30px 0px 30px 30px;

}
#formPadding{
  margin-left:0px;
  width:200px;
}
.comment{
  width:300px;
}
#avatar{
  width: 25px;
 height: 25px;
}
}
</style>


@extends('books.template')

@section('tittle')
    111111111
@endsection

@section('home')
<div class="line"></div>
<div class="contBook">
    <div class="aboutCont ">
      <div class="imgBook flex">
        <img  src="{{ Storage::url($books_id->urlImage) }}" alt="">
        <!-- <img  src="https://cv8.litres.ru/pub/c/audiokniga/cover_330/67644287-ekaterina-vasina-tebe-povezlo-detka-67644287.jpg" alt=""> -->
      </div>
      <div class="permission">
        <div>
          <div><span class='nameBook'>{{ $books_id->name }}</span></div>
          <div class="inform">
              <div> <span>Автор:&nbsp;</span>{{ $books_id->author }}</div>
              <div> <span>Жанр:&nbsp;</span>{{ $books_id->genre }}</div>
              <div><span>Дата выхода на сайт:&nbsp;</span>{{ $books_id->year_publish}}</div>
              <div> <span>Дата написания:&nbsp;</span>{{ $books_id->year_write }}</div>
              <div><span>Объем:&nbsp;</span>{{ $books_id->count_page }}&nbsp;стр.</div>

              <div class="option">
                @if ( Session::has('CurrentUser') )
                    @if ( $basket )
                      <form action="/basket" method='post' >
                          <input type="hidden" name='book_id' value='{{ $books_id->id }}'>
                          <input type="hidden" name='redirect' value='{{ Request::url() }}'>
                          @csrf
                          <input type='submit' name='removeFromBasket' value='Удалить из корзины'>

                        </form>
                    @else
      
                      <form action="/basket" method='post' >
                        <input type="hidden" name='book_id' value='{{ $books_id->id }}'>
                        <input type="hidden" name='redirect' value='{{ Request::url() }}'>
                        @csrf
                        <input type='submit' name='AddToBasket' value='Добавить в Корзину'>

                      </form>
                  @endif

                @else 
                    <form action="/login" method='get' >
                   
                      <input type="hidden" name='book_id' value='{{ $books_id->id }}'>
                      <input type="hidden" name='redirect' value='{{ Request::url() }}'> 
                      <input type="submit" value='Добавить в Корзину'>
                    </form>
                @endif
              </div>

              @if ( Session::has('CurrentUser') )
                 
              @else
                   <form action="/login" method='get' >
                      <div>
                        <a href="{{ Storage::url($books_id->urlFileBook) }}"> <button>Читать</button></a>
                      </div>
                      <input type="hidden" name='read' value='read'>
                      <input type="hidden" name='redirect' value='{{ Request::url() }}'> 
                   
                  </form>
              @endif
             

              <form action="/book/{id}/download" method='get'>
                <a download="{{ $books_id->name }}" href="{{ Storage::url($books_id->urlFileBook) }}" title="Сачать">
                      <button>Сачать</button>
                  </a>
                  <input type="hidden" name='book_id' value='{{ $books_id->id }}'>
                  <input type="hidden" name='redirect' value='{{ Request::url() }}'>
                  
              </form>
              <a download="{{ $books_id->name }}" href="{{ Storage::url($books_id->urlFileBook) }}" title="321">
                      <button>Сачать</button>
                  </a>
              
          </div>
        </div>
      </div>

    </div>
    <div class="contAboutBook"><span>О книге:&nbsp;</span>{{ $books_id->discription }} </div>
</div>


<div class="contComment">
   <div class="line"></div>



      <!-- Begin Comments -->
    <div class='headerComm'>Отзывы</div>
    
    @foreach ($comment as $i)
    
      <div id="comments">
        <ol id="singlecomments" class="commentlist">
          <li class= "clearfix">
            <div class="user"><img alt="" src="https://avatars.mds.yandex.net/i?id=4b8d5006cc828cbe5c0d475e6ea7c7ab-5877601-images-thumbs&n=13&exp=1" height="60" width="60" class="avatar" /></div>
            <div class="message">
              <div class="info">
                <h3><a href="">{{ $i['user_name'] }}</a></h3>
                <span class="date"> {{ $i['created_at'] }}  </span> <a class="reply-link" href="">Ответить</a> </div>
              <p>{{ $i['comment'] }}</p>
            </div>
            <div class="clear"></div>
          </li>
        </ol>
      </div>
    @endforeach 
    {{ $comment->onEachSide(2)->links() }}
    </div>
      <!-- End Comments -->

      <!-- Begin Form -->
      <div class="comment-form">
        <h3>Оставьте отзыв</h3>
        <div class="form-container" id='formPadding'>
        @if ( Session::has('CurrentUser') )
          <form  action="/book/{id}/comment" method="post">
            @csrf
            
            <div class="user"><img alt="" src="https://avatars.mds.yandex.net/i?id=4b8d5006cc828cbe5c0d475e6ea7c7ab-5877601-images-thumbs&n=13&exp=1" height="60" width="60" class="avatar" style='margin-right:10px;' /> </div>
              <ol>
                <li class="form-row text-area-row">
                  <textarea name="message" class="comment"></textarea>
                </li>
                <li class="button-row">
                  <input type="hidden" name='user_name' value='{{ (Session::get("CurrentUser"))->first()->name }}'>
                  <input type="hidden" name='book_id' value='{{ $books_id->id }}'>
                  <input type="hidden" name='redirect' value='{{ Request::url() }}'> 
                  <input type="submit" value="ОПУБЛИКОВАТЬ" name="submit" class="commentButton" />             
                </li>
              </ol>            
           
          </form>
        @else
        <form  action="/login" method="get">
            @csrf
            
            <div class="user"><img alt="" src="https://avatars.mds.yandex.net/i?id=4b8d5006cc828cbe5c0d475e6ea7c7ab-5877601-images-thumbs&n=13&exp=1" height="60" width="60" class="avatar" /></div>
              <ol>
                <li class="form-row text-area-row">
                  <textarea name="message" class="comment"></textarea>
                </li>
                <li class="button-row">
                  <input type="hidden" name='book_id' value='{{ $books_id->id }}'>
                  <input type="hidden" name='redirect' value='{{ Request::url() }}'> 
                  <input type="submit" value="ОПУБЛИКОВАТЬ" name="submit" class="commentButton" />             
                </li>
              </ol>            
            
          </form>
        @endif
          
        </div>
      </div>
      <!-- End Form -->

      <!-- End Comments -->

    </div>
    <!-- End Full Width -->

@endsection


