<x-template>
    <h1 class='text-3xl font-semibold'>Create Blog</h1>
    @if ($errors->any())
    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach
        
    @endif
    <form method='post' action='{{route('blog.store')}}'>
        @csrf
        @method('post')
        <x-input-text name='title' placeholder='title' />
        <input type='text' name='category_id' placeholder='Category ID' /> <br>
        <input type='text' name='author_id' placeholder='User ID' /> <br>
        <textarea cols='20' rows='10' name='content' placeholder='content'></textarea> <br>
        <input type='submit' name='submit' value='Make Blog' />
    </form>
</x-template>