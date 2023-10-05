<x-template>
    <x-h1 text='{{$blog->title}}' />
    <p><b>Author ID:</b> {{$blog->author_id}}</p>
    <p><b>Category Name:</b> {{$blog->category_name}}</p>
    <p><b>Text:</b> {{$blog->content}}</p>

    @foreach ($comments as $comment)
    <p><b>Blog ID:</b> {{$comment->blog_id}}</p>
    <p><b>Author ID:</b> {{$comment->author_id}}</p>
    <p><b>Text:</b> {{$comment->content}}</p>
    @endforeach
</x-template>