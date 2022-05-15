@extends('books.template')


@section('tittle')
    biznes
@endsection

@section('home')

<h1>Корзина</h1>

@foreach ($book_list as $i) 
     <a href="/book/{{ $i['id'] }} "  >
            <div class="temp1">
                 <div >
                      <img class="img1" src="" alt="">
                 </div>

                 <div class="author">
                     {{$i['name']}}
                 </div>

                 <form action="/basket" method='post' >
                          <input type="hidden" name='book_id' value='{{ $i["id"] }}'>
                          <input type="hidden" name='redirect' value='{{ Request::url() }}'>
                          @csrf
                          <input type='submit' name='removeFromBasket' value='Удалить из корзины'>

                  </form>
            </div>
      
    </a>
   @endforeach


@endsection
