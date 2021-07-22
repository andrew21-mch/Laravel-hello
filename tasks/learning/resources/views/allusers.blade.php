<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
    <style>
        table{
            width: 70%;
            background-color: aquamarine;
            border-style: solid;
        }
        td{
            width: 21%;
            height: 1.5rem;
            border-style: solid;
            background-color: rgb(96, 146, 92)
        }
        .w-5{
            display: none;
        }
    </style>
</head>
<body>
    <h1>All Users</h1>
<table border="1">
<tr>
    <th>Id</th>
    <th>Username</th>
    <th>Email</th>
</tr>

    @foreach ($users as $user)
    <tr>
    <td>{{$user['user_id']}}</td>
    <td>{{$user['username']}}</td>
    <td>{{$user['user_email']}}</td>
    @endforeach
</tr>
</table>

<span>
    {{$users->links()}}
</span>
</body>
</html>

