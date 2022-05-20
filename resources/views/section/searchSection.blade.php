
@extends('books.template')



@section('search')

<form action='/search' method="get">
      <label for="search"></label>
      <input id="search" type="search" name="search" placeholder="Search..." autofocus required />
      <button type="submit">Go </button>    
</form>

@endsection
