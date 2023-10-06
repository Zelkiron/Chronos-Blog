<x-template>
    <x-h1 text='Create Blog' />
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    @php
        $user_id = Auth::id();
    @endphp

    <form method='post' action='{{route('blog.store')}}'>
        @csrf
        @method('post')
        <x-input-text name='title' placeholder='Title' />
        <x-select name="category_id" :options="$categories"/>
        <x-textarea name="content" />
        <x-submit name='Submit' value='Submit'/>
    </form>
</x-template>
