<x-template>
    <x-h1 text='Login' />
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif 
    <form method='post'>
        @csrf
        @method('post')
        <x-input-text placeholder='Username' name='username' />
        <x-input-password placeholder='Password' name='password' />
        <x-submit name='login' value='Login' />
    </form>
</x-template>