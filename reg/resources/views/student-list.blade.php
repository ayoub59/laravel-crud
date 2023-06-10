<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student-list</title>
</head>
<body>
    <h1>student-list</h1>
    {{-- creating the table --}}
    <a href="{{url("add-student")}}">add</a>
    <table>
        <tr>
            <th>*</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>adress</th>
            <th>actions</th>
        </tr>
        @foreach ($data as $stu)
        <tr>
            <td>{{$stu->id}}</td>
            <td>{{$stu->name}}</td>
            <td>{{$stu->email}}</td>
            <td>{{$stu->phone}}</td>
            <td>{{$stu->adress}}</td>
            <td>edit | delete</td>
        </tr>
        @endforeach

    </table>
</body>
</html>