<x-template>
    <x-h1 text='{{$category->name}}' />
    <p><b>Number of Blogs:</b> {{$category->number_of_blogs()}}</p>
    @foreach ($category->blogs as $blog)
        <p><b>Title</b> {{$blog->title}}</p>
        <p><b>Author ID:</b> {{$blog->author->username}}</p>
    @endforeach
</x-template>