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

    <a id="myBtn" style="filter: drop-shadow(2px 2px 2px #8C0428); position: absolute; margin-bottom: 70px;">
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

    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 80%; /* Full width */
  height: 80%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body>

<!-- Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h1>New List</h1>
    <p>Number of meals</p>

<div>
  <input type="range" id="volume" name="volume"
         min="0" max="11">
  <label for="volume">10</label>
</div>
    <button class="button-listy" style="margin-top: 80px;">
                    {{ __('Generate') }}
    </button>
  </div>

</div>

<script>
var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>

</nav>