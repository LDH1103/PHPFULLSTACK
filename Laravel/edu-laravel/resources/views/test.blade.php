<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <h1>Tests.index!!!</h1>
    <h5>{{$name}}</h5>
    <hr>
    <a href="{{route('tasks.index');}}">Tasks.index</a>
    <br>
    <a href="{{route('tasks.show', ['task' => '13']);}}">Tasks.show</a>
    <br>
    <form action="{{route('tasks.update', ['task' => '1']);}}" method="post">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="php506">
        <input type="hidden" name="pw" value="506">
        <input type="hidden" name="name" value="admin">
        <button type="submit">Tasks.update</button>
    </form>
    <br>
    <br>
    <a href="{{route('tasks.edit', ['task' => '999']);}}">Tasks.edit</a>
    <br>
    <br>
    <form action="{{route('tasks.store');}}" method="post">
        @csrf
        <label for="id">ID</label>
        <input type="text" name="id" id= "id">
        <br>
        <label for="pw">PW</label>
        <input type="text" name="pw" id="pw">
        <br>
        <button type="submit">Tasks.store</button>
    </form>
</body>
</html>
