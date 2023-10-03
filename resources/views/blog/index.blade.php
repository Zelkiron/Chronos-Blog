<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    All the blogs will be shown here. 
    @foreach($blogs as $blog)
    <h1>{{$blog->title}}</h1>
    <div>
        <p>{{$blog->content}}</p>
    </div>
    @endforeach
</body>
</html>