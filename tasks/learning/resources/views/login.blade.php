<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <center>
      <form action="login" method="post">
      @csrf
      <h2>User Login</h2>
      <input type="text" name="username" value="" placeholder="Username"><br>
      <span>@error('username')
        {{$message}}  
      @enderror</span>
      <br>
      <input type="password" name="password" value="" placeholder="Passwrod"><br>
      <span>@error('password')
        {{$message}}  
      @enderror</span>
      <br>
      <button type="submit" name="button">Login</button>
    </form> </center>

   </body>
</html>
