@extends('books.template')


@section('tittle')
    biznes
@endsection

@section('home')

<div class='flex'>
    @foreach ($books_list as $i) 
     <a href="/book/{{ $i->id }} "  >
        <form method="get">
            <div class="temp1">
                 <div >
                      <img class="img1" src="{{$i->urlImage}}" alt="">
                 </div>

                 <div class="author">
                     {{$i->name}}
                 </div>
            </div>
        </form>
    </a>
   @endforeach


</div>

@endsection
