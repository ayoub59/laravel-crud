<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add student</title>
</head>
<body>
    <h1>add the student</h1>
    <form method="POST" action="{{url("save-student")}}" >
        @csrf
        <label for="name">name</label>
        <input type="text" placeholder="name" name="name" value="someone"> <br>
        <label for="email">email</label>
        <input type="email" placeholder="email" name="email" value="someone@gmail.com"><br>
        <label for="phone">phone</label>
        <input type="text" placeholder="phone" name="phone" value="08099709"><br>
        <label for="adress">adress</label>
        <input type="text" placeholder="adress" name="adress" value="diha fkrk"><br>
        <button type="submit">save</button>
        <a href="{{url("student-list")}}">back</a>
    </form>
</body>
</html>