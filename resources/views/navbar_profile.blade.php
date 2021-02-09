<nav class="navbar fixed-bottom navbar-expand-sm" style="height: 80px; background-color: grey; border-top-left-radius:25px; border-top-right-radius:25px;">

    <a class="ml-2" href="{{ route('dashboard') }}">
        <img width="30px;" src="/images/home.png">
    </a>

    <a class="mr-20" href="{{ route('profile') }}">
        <img width="30px;" src="/images/user.png">
    </a>

    <a style="position: absolute; margin-bottom: 80px; margin-left: 125px;" href="{{ route('profile') }}">
        <img width="90px;" src="/images/check.png" style="margin:auto;">
    </a>

    <a href="{{ route('profile') }}">
        <img width="30px;" src="/images/map.png">
    </a>

    <a class="mr-2" href="{{ route('profile') }}">
        <img width="30px;" src="/images/user_hover.png">
    </a>

</nav>
