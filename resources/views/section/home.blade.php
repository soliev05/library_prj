@extends('books.template')


@section('tittle')
    biznes
@endsection

@section('home')

<div class='flex'>
    @foreach ($books_list as $i)
   
      <div class="temp1">
          <div >
              <img class="img1" src="" alt="">
          </div>
        
          <div class="author">
             {{$i->name}}
          </div>  
          <input type="submit" name="read" value = "Читать">
      </div>
  
       @endforeach
   

</div> 

@endsection