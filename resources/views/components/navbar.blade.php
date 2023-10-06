<div class='bg-cyan-900 p-5 bg-gradient-to-r mb-5'>
    <span class='font-kdam-thmor-pro text-white text-4xl'>CHRONOS</span>
    <x-navbar-links link='/blogs' title='Home' />
    @if(Auth::check())
        <x-navbar-links link='/new' title='Create New Blog' />
        <x-navbar-links link='/logout' title='Logout' />
        <x-navbar-links link='#' title='{{Auth::user()->username}}' />
    @else()
        <x-navbar-links link='/register' title='Register' />
        <x-navbar-links link='/login' title='Login' />
    @endif
</div>