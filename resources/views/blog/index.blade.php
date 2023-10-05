<x-template>
    <x-h1 text='Home'></x-h1>
    All the blogs will be shown here. 
    @foreach($blogs as $blog)
    <h1 className=''>{{$blog->title}}</h1>
    <div>
        <p>{{$blog->content}}</p>
    </div>
    @endforeach
</x-template>