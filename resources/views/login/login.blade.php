
@extends('books.template')


@section('tittle')
    biznes
@endsection

@section('home')

<div class='flex'>
    <span>
        {!!$errors->first()!!}
    </span>
        <form action="" method = "post"><br>
        @csrf
        <p>Login<input type="text" name= "email"></p><br><br>
        <p>Password<input type="password" name = "password"></p>
        <p><input type="submit" name = "submit" value ="send"></p>
        </form>

</div> 

@endsection

