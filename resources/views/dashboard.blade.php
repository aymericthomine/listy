<x-guest-layout>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <!-- Bootstrap --> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    
    <div style="margin-left: 50px; margin-right: 50px;">
    
        @include('header')

        @include('navbar')

        <div class="inflow" style="margin-top: 150px;">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <div class="flex">
    <h6 class="mt-10; mb-6" style="color: #020202; font-size:20px; font-weight:bold;">Popular Recipes</h6>
    <a class="mt-4; ml-12" href="{{ route('recipes') }}">
    <h6 class="font-listy;" style="color: #020202; font-size:15px; color: #8C0428; text-align: right; margin-top: 4px;">See all (45)</h6>
    </a>
    </div>
        <div class="d-flex flex-row flex-nowrap overflow-auto">
            <div class="card card-block mx-2" style="min-width: 150px; min-height: 150px; border-radius: 10px;">
            <img src="http://img.sndimg.com/food/image/upload/w_266/v1/img/recipes/27/20/8/picVfzLZo.jpg" style="border-radius: 10px; height: 150px;">
            </div>

            <div class="card card-block mx-2" style="min-width: 150px; min-height: 150px; border-radius: 10px;">
            <img src="http://dagzhsfg97k4.cloudfront.net/wp-content/uploads/2012/05/lentils3.jpg" style="border-radius: 10px; height: 150px;">
            </div>

            <div class="card card-block mx-2" style="min-width: 150px; min-height: 150px; border-radius: 10px;">
            <img src="http://img.sndimg.com/food/image/upload/w_266/v1/img/recipes/50/84/7/picMcSyVd.jpg" style="border-radius: 10px; height: 150px;">
            </div>

            <div class="card card-block mx-2" style="min-width: 150px; min-height: 150px; border-radius: 10px;">
            <img src="http://upload.wikimedia.org/wikipedia/commons/c/c7/Spinach_pizza.jpg" style="border-radius: 10px; height: 150px;">
            </div>

        </div>        
    </div>

    <div class="flex">
    <h6 class="mt-10; mb-6" style="color: #020202; font-size:20px; font-weight:bold; margin-top:30px;">Categories</h6>
    <a class="mt-4; ml-12" href="{{ route('recipes') }}">
    </a>
    </div>
    <div class="d-flex flex-row flex-nowrap overflow-auto" style>
            <div class="card card-block mx-2" style="min-width: 75px; min-height: 75px; border-radius: 10px;">
            <a href="{{ route('recipes') }}"><img src="/images/vegan.png" style="border-radius: 10px;"></a>
            </div>
            <div class="card card-block mx-2" style="min-width: 75px; min-height: 75px; border-radius: 10px;">
            <a href="{{ route('recipes') }}"><img src="/images/free_gluten.png" style="border-radius: 10px;"></a>
            </div>
            <div class="card card-block mx-2" style="min-width: 75px; min-height: 75px; border-radius: 10px;">
            <a href="{{ route('recipes') }}"><img src="/images/diet.png" style="border-radius: 10px;"></a>
            </div>        </div>        
    </div>

<a href="{{ route('preferences') }}">
<button class="button-listy" style="width:280px;display: block;margin-left: auto;margin-right: auto; margin-top: 70px;">Preferences</button>
</a>

</x-guest-layout>

<style>
html, body { height : 100%; }

body {
    margin:0;
    padding:0;
    background-color: white;   
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    overflow: hidden;
}

.button-listy {
    margin-top:20px;
    font-weight : bold;
    color: white;
    border-radius: 10px;
    width : 100%;
    padding: 15px;
    background-color: #9D9743;
    cursor : pointer;
}
.button-listy:hover {
    
}
.button-listy:active {
}
.center {
    display: flex;
    justify-content: center;
    text-decoration: underline;
}
.text-right {
    display: flex;
    justify-content: flex-end;
}
</style>