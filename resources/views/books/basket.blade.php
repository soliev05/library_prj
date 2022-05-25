<style>
    .bookN{
        color: #e2e2e2;
        font-size:30px;
        margin:15px 0px 30px 20px;
    }
    .butt{
        width:200px;
        height:40px;
        margin-left:20px;
        font-size:20px;
        background-color:#dedede;
        border: none;
        cursor: pointer;
       font-family: 'PTSansRegular';
      -webkit-border-radius: 3px;

       box-shadow: 0 0 5px 0px black;
    }
    .basket{
        margin:20px 0px 10px 0px;
        /* background: #1a1a1a70; */
        border-radius:5px;
        padding:10px;
        font-family: 'PTSansRegular';
        font-size:30px;
        color: #e2e2e2;
    }
    .line{
    border-top: 3px solid #454545;
    height: 8px;
    width:100%;
    border-bottom: 1px solid #454545;
    margin: 20px 0 36px 0;
    
  }
</style>


@extends('books.template')


@section('tittle')
    biznes
@endsection

@section('home')
<div>
    <div class="basket">
        Корзина
    </div>
    <div class="line"></div>
</div>
@if ( $length > 0 )
    @foreach ($book_list as $i) 
        <a href="/book/{{ $i['id'] }} "  >
                <div class="temp1 flex">
                    <div >
                        <img class="img1" src="{{ Storage::url($i['urlImage']) }}" alt="">
                    </div>
                    <div>
                        <div class="flex bookN">
                            {{$i['name']}}
                        </div>
                        <div >
                            <form action="/basket" method='post' >
                                    <input type="hidden" name='book_id' value='{{ $i["id"] }}'>
                                    <input type="hidden" name='redirect' value='{{ Request::url() }}'>
                                    @csrf
                                    <input class='butt' type='submit' name='removeFromBasket' value='Удалить из корзины'>

                            </form>
                        </div>
                    </div>
                </div>
        
        </a>
    @endforeach
@else 
    <div class="bookN" style='text-align: center;'>  В корзине нет книг</div>
@endif
@endsection
