<h2>User Login</h2>
    <form action="users" method="POST">
    @csrf
        <input type="text" name="user" id="" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <button type="submit">Submit</button>
    </form>