<nav class="navbar fixed-bottom navbar-expand-sm" style="box-shadow: 0 0 5px 0 grey; display: flex; justify-content: space-around; height: 80px; background-color: white; border-top-left-radius:25px; border-top-right-radius:25px;">
    @if(Route::is('dashboard'))  
    <a class="ml-2" href="{{ route('dashboard') }}">
        <img width="30px;" src="/images/navbar/home_hover.png">
    </a> 
    @else
    <a class="ml-2" href="{{ route('dashboard') }}">
        <img width="30px;" src="/images/navbar/home.png">
    </a>
    @endif

    @if(Route::is('recipes'))  
    <a class="ml-2 mr-24" href="{{ route('recipes') }}">
        <img width="30px;" src="/images/navbar/recipes_hover.png">
    </a> 
    @else
    <a class="ml-2 mr-24" href="{{ route('recipes') }}">
        <img width="30px;" src="/images/navbar/recipes.png">
    </a>
    @endif

    <a style="filter: drop-shadow(2px 2px 2px #8C0428); position: absolute; margin-bottom: 70px;" href="{{ route('profile') }}">
        <img width="80px;" src="/images/navbar/check.png" style="margin:auto;">
    </a>

    @if(Route::is('map'))
    <a class="mr-2" href="{{ route('map') }}">
        <img width="30px;" src="/images/navbar/map_hover.png">
    </a> 
    @else
    <a class="mr-2" href="{{ route('map') }}">
        <img width="30px;" src="/images/navbar/map.png">
    </a>
    @endif

    @if(Route::is('profile'))
    <a class="mr-2" href="{{ route('profile') }}">
        <img width="30px;" src="/images/navbar/user_hover.png">
    </a> @else
    <a class="mr-2" href="{{ route('profile') }}">
        <img width="30px;" src="/images/navbar/user.png">
    </a>
    @endif

</nav>