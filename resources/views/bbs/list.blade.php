<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        @foreach ($list as $item)
            <p>{{$item->fileName}}</p>
            <p>{{$item->name}}</p>
            <p>{{$item->title}}</p>
            <p>{{$item->content}}</p>
            <hr>
        @endforeach
        <p>----------------------------------------</p><br/>

</body>
</html>