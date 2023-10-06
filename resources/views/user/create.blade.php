<x-template>
    <x-h1 text='Create an Account'></x-h1>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif 

    <form method='post'>
        @csrf
        @method('post')
        <x-input-text placeholder='Email' name='email' />
        <x-input-text placeholder='Username' name='username' />
        <x-input-password placeholder='password' name='password' />
        <x-submit value='Create Account' name='create_account' />
    </form>
</x-template>