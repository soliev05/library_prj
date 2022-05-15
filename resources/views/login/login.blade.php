<style>

html {
  height: 100%;
}
body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

.login-box {
  margin:80px 0px 100px 0px;
  width: 400px;
  padding: 40px;
  background: rgb(0 0 0 / 38%);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: 0.5s;
  margin-top: 40px;
  letter-spacing: 4px;
}
/*
.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #b3e5fc, 0 0 25px #03e9f4, 0 0 50px #03e9f4,
    0 0 100px #b3e5fc;
} */

.login-box a span {
  position: absolute;
  display: block;
}




.formLogin{
    justify-content:center;
    align-items:center;
}
.submit{
    background: #F6F9FE;
    box-shadow: rgb(60 64 67 / 30%) 0 2px 3px 0, rgb(60 64 67 / 15%) 0 6px 10px 4px;
    align-items: center;
  appearance: none;
  background-color: #fff;
  border-radius: 15px;
  border-style: none;
 box-shadow: rgb(0 0 0 / 20%) 0 3px 5px -1px, rgb(0 0 0 / 14%) 0 6px 10px 0, rgb(0 0 0 / 12%) 0 1px 18px 0;
box-sizing: border-box;
   color: #3c4043;
   cursor: pointer;
  display: inline-flex;￼   fill: currentcolor;
     font-family: "Google Sans",Roboto,Arial,sans-serif;
     font-size: 14px;
    font-weight: 500;
     height: 45px;
     justify-content: center;
     letter-spacing: .25px;
     line-height: normal;
      max-width: 100%;
     overflow: visible;
 padding: 2px 24px;
     position: relative;
     text-align: center;
  text-transform: none;
   transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1),opacity 15ms linear 30ms,transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
    user-select: none;
 -webkit-user-select: none;
   touch-action: manipulation;   width: auto;
   will-change: transform,opacity;
   z-index: 0;
}

</style>


@extends('books.template')


@section('tittle')
    Login
@endsection

@section('home')

<div class='formLogin flex '>
    <span>
        {!!$errors->first()!!}
    </span>

<div class="login-box">
  <h2>Login</h2>
    <form method = "post" >
    @csrf
      <div class="user-box">
          <!-- <div>{{ $book_id->get('redirect') }}</div> -->
          <input type="email" name="email" required="">
          <label>Email</label>
      </div>
      <div class="user-box">
          <input type="password" name="password" required="">
          <label>Пароль</label>
      </div>
        @if ($book_id)
            <input type="hidden" name='book_id' value='{{ $book_id->get("book_id") }}'>
            <input type="hidden" name='redirect' value='{{ $book_id->get('redirect') }}'>
        @endif
      <div ><input class='submit' type="submit" name='submit'></div>
      <a href="/registrate">
        Регистрация
      </a>
    </form>
</div>


<!--
        <form action="" method = "post"><br>
        @csrf
        <p>Login<input type="text" name= "email" class="text-input required"></p><br><br>
        <p>Password<input type="password" name = "password" class="text-input required"></p>
        <p><input type="submit" name = "submit" value ="send"></p>
        </form>


        <div class="login-box">  -->

@endsection
