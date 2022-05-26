@extends('books.template')


@section('tittle')
    elKitob
@endsection

@section('home')

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
@endsection