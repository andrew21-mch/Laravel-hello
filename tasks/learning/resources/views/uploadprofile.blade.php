<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>upload profile photo</title>
</head>
<body>
    <form action="uploadprofile" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Upload profile</h1>
        <input type="file" name="file"><br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>