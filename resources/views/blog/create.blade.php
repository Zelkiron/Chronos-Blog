<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Blog</h1>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
        
    @endif
    <form method='post' action='{{route('blog.store')}}'>
        @csrf
        @method('post')
        <input type='text' name='title' placeholder='title' /> <br>
        <input type='text' name='category_id' placeholder='Category ID' /> <br>
        <input type='text' name='author_id' placeholder='User ID' /> <br>
        <textarea cols='20' rows='10' name='content' placeholder='content'></textarea> <br>
        <input type='submit' name='submit' value='Make Blog' />
    </form>
</body>
</html>