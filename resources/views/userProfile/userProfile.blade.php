<style>
  *{
    font-family: 'PTSansRegular';
  }
  .aboutCont{
    width:100%;
    min-height: 600px;
    height:auto;

    display:flex;

  }
  .imgAva{
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
    font-size: 30px;
    margin-left:50px;

  }
  .contBook{
    background-color: #c4c4c438;
    /* margin:25px 0px 50px 0px; */
    margin:20px;
    padding-bottom:15px;
  }

  .contAboutBook{
    font-size:20px;
    margin:20px 30px 20px 30px;

  }
  div.imgAva > div > img{
    width:300px;
    height:300px;
    border-radius:50%;
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
     margin-left: auto;
     background-color: #ab4d63;
     margin-top:10px;
}
.optionList > li {
  font-size:20px;
  margin:15px 0px 15px 0px;
}
#aColor{
  color: #4d4d4d;
}
.mb-20{
  margin-bottom:30px;
}
</style>


@extends('books.template')

@section('tittle')
    111111111
@endsection

@section('home')


<div class="contBook">
    <div class="aboutCont ">

      <div class="imgAva ">
        <div class='mb-20'>
          <img  src="https://avatars.mds.yandex.net/i?id=4b8d5006cc828cbe5c0d475e6ea7c7ab-5877601-images-thumbs&n=13&exp=1" alt="">
        </div>
        <div class="">
          <ul class="optionList">
            <li><a id='aColor' href="/basket">Корзина</a></li>
            <li><a id='aColor' href="">Прочитанные книги</a></li>
            <li><a id='aColor' href="">История</a></li>
            <li><a id='aColor' href="/exit">Выход</a></li>
          </ul>
        </div>
        <!-- <img  src="https://cv8.litres.ru/pub/c/audiokniga/cover_330/67644287-ekaterina-vasina-tebe-povezlo-detka-67644287.jpg" alt=""> -->
        
      </div>
      <div class="permission">
        <div>
          <div><span class='nameBook'>{{ (Session::get('CurrentUser'))->first()->name }}</span></div>
          <div class="inform">
              <div> <span>Имя:&nbsp;</span></div>
              <div> <span>Email&nbsp;</span>{{ (Session::get('CurrentUser'))->first()->name }}</div>
              <div><span>Дата рождения:&nbsp;</span>{{ (Session::get('CurrentUser'))->first()->name }}</div>
              <div> <span>Телефон:&nbsp;</span>{{ (Session::get('CurrentUser'))->first()->name }}</div>
              <div><span>Пол:&nbsp;</span>{{ (Session::get('CurrentUser'))->first()->name }}&nbsp;стр.</div>

             

            
          </div>
        </div>
      </div>

    </div>
</div>

  
@endsection


