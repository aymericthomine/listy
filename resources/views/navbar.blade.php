<nav class="navbar fixed-bottom navbar-expand-sm" style="height: 80px; background-color: grey; border-top-left-radius:25px; border-top-right-radius:25px;">

    <a class="ml-2" href="{{ route('dashboard') }}">
        <img width="30px;" src="/images/home_hover.png">
    </a>

    <a class="mr-20" href="{{ route('profile') }}">
        <img width="30px;" src="/images/user.png">
    </a>

    @if(Route::has('profile'))
    <a style="position: absolute; margin-bottom: 80px; display: flex; justify-content: space-around;" href="{{ route('profile') }}">
        <img width="90px;" src="/images/check.png" style="margin:auto;">
    </a> 
    @endif

    <a href="{{ route('profile') }}">
        <img width="30px;" src="/images/map.png">
    </a>

    <a class="mr-2" href="{{ route('profile') }}">
        <img width="30px;" src="/images/user.png">
    </a>

</nav>