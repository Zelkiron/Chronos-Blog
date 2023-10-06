<x-template>
    @foreach ($categories as $category)
        <x-h1 text='{{$category->name}}' />
        <p><b>Number of Blogs:</b> {{$category->number_of_blogs()}}</p>
    @endforeach
</x-template>