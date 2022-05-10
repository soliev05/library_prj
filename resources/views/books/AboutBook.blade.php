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

</style>


@extends('books.template')

@section('tittle')
    111111111
@endsection

@section('home')

<div class="contBook">
    <div class="aboutCont ">
      <div class="imgBook flex">
        <img  src="https://cv4.litres.ru/pub/c/elektronnaya-kniga/cover_415/67469040-mihail-fishman-preemnik-istoriya-borisa-nemcova-i-strany-v-kotoroy-on-ne-s.jpg" alt="">
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
                  <button name='AddToMyBook' value='Добавить в Мои книги'>Добавить в Мои книги</button>
              </div>
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

      <div id="comments">
        <ol id="singlecomments" class="commentlist">
          <li class= "clearfix">
            <div class="user"><img alt="" src="style/images/art/a1.jpg" height="60" width="60" class="avatar" /></div>
            <div class="message">
              <div class="info">
                <h3><a href="#">Jacqueline</a></h3>
                <span class="date">April 4, 2010</span> <a class="reply-link" href="#">Reply</a> </div>
              <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
            </div>
            <div class="clear"></div>

          </li>
          <li class= "clearfix">
            <div class="user"><img alt="" src="style/images/art/a4.jpg" height="60" width="60" class="avatar" /></div>
            <div class="message">
              <div class="info">
                <h3><a href="#">Isabel</a></h3>
                <span class="date">April 4, 2010</span> <a class="reply-link" href="#">Reply</a> </div>
              <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
            </div>
            <div class="clear"></div>
          </li>
          <li class= "clearfix">
            <div class="user"><img alt="" src="style/images/art/a5.jpg" height="60" width="60" class="avatar" /></div>
            <div class="message">
              <div class="info">
                <h3><a href="#">Isabel</a></h3>
                <span class="date">April 4, 2010</span> <a class="reply-link" href="#">Reply</a> </div>
              <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
            </div>
            <div class="clear"></div>
          </li>
        </ol>
      </div>
     </div>
      <!-- End Comments -->

      <!-- Begin Form -->
      <div class="comment-form">
        <h3>Leave a Reply</h3>
        <div class="form-container">
          <form class="forms" action="#" method="post">
            <fieldset>
              <ol>

                <li class="form-row text-area-row">

                  <textarea name="message" class="text-area required"></textarea>
                </li>
                <li class="form-row hidden-row">
                  <input type="hidden" name="hidden" value="" />
                </li>
                <li class="button-row">
                  <input type="submit" value="ОПУБЛИКОВАТЬ" name="submit" class="btn-submit" />
                </li>
              </ol>
              <input type="hidden" name="v_error" id="v-error" value="Required" />
              <input type="hidden" name="v_email" id="v-email" value="Enter a valid email" />
            </fieldset>
          </form>
          <div class="response"></div>
        </div>
      </div>
      <!-- End Form -->

      <!-- End Comments -->

    </div>
    <!-- End Full Width -->

@endsection
