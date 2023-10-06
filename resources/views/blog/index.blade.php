<x-template>
    <x-h1 text='Home'></x-h1>
    All the blogs will be shown here. 
    @foreach($blogs as $blog)
    <a href='{{route('blog.show', ['blog' => $blog])}}'><x-h1 text='{{$blog->title}}' /></a>
    <div className='m-5'>
        <p>{{$blog->content}}</p>
    </div>
    @endforeach
</x-template>