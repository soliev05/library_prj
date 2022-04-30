registrate form

<!-- <form  method = "post">
@csrf
<p><input type="text" name= "email"></p>
<p><input type="password" name = "passworsd"></p>
<p><input type="text" name="name"></p>
<p><input type="submit" name = "submit" value ="send"></p>
</form> -->


<form method="post">
  @csrf
  <p><label for="email">Email</label><input type="text" name="email" id="email"></p>
  <p><label for="password">Password</label><input type="password" name="password" id="password"></p>
  <p><label for="name">Name</label><input type="text" name="name" id="name"></p>
  <p><input type="submit" value="send"></p>
</form>