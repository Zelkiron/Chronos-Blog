<x-template>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    <x-h1 text='{{$blog->title}}' />
    <p><b>Author ID:</b> {{$blog->author->username}}</p>
    <p><b>Category Name:</b> {{$blog->category->name}}</p>
    <p><b>Text:</b> {{$blog->content}}</p>
    @if (Auth::check())
        <form method='post'>
            @csrf
            @method('post')
            <x-textarea name='content' rows='2' cols='4'/>
            <x-submit name='create_comment' value='Create Comment' />
        </form>
    @endif
        <br>
    @if (!$blog->comments)
        <p>No comments! Strange</p>
    @else
        {{$blog->number_of_comments()}} comments<br>
        @foreach ($blog->comments as $comment)
        <p><b>Author ID:</b> {{$comment->author->username}}</p>
        <p><b>Text:</b> {{$comment->content}}</p>
        @endforeach
    @endif
</x-template>