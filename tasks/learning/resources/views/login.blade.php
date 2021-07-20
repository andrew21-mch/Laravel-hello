<h1>User Login</h1>
<form action="login" method="post">
@csrf
    <input type="text" placeholder = "user name" name="name"><br><br> 
    <input type="password" placeholder="user password" name="pass"><br><br>
    <button type="submit">Login</button>
</form>