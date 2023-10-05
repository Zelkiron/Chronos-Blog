<x-template>
    <x-h1 text='Create an Account'></x-h1>
    <form method='post' action='{{route('user.store')}}'>
        @csrf
        @method('post')
        <x-input-text placeholder='test' name='test' />
        <input type='text' name='category_id' placeholder='Category ID' /> <br>
        <input type='text' name='author_id' placeholder='User ID' /> <br>
        <textarea cols='20' rows='10' name='content' placeholder='content'></textarea> <br>
        <input type='submit' name='submit' value='Make Blog' />
    </form>
</x-template>