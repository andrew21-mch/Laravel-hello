
<h2>Register</h2>

@if(session('username'))
    <h4 style="color:green">{{session('username')}} has been added successfully</h4>
@endif
   
<form action="register" method="post">
    @csrf
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username"><br>
    <span >
        @error('username') {{$message}}
    @enderror</span><br>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email"><br>
    <span>
        @error('email') {{$message}}
    @enderror</span><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password"><br>
    <span>
        @error('password') {{$message}}
    @enderror</span><br>

    <button type="submit" class="btn-success">Register</button>
    <button type="reset" class="btn-danger">Reset</button>

</form>
<style>
    button{
        border-style: none;
    }
    .btn-success{
        background-color: green;
        width: 6rem;
        height: 2rem;
        border-radius: 3px;
    }
    .btn-danger{
        background-color: red;
        width: 6rem;
        height: 2rem;
        border-radius: 3px;
    }
    btn:hover{
        background-color: chocolate;
    }
    span{
        color:red;
    }
</style>