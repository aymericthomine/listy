<x-guest-layout>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <!-- Bootstrap --> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    
    <div style="margin-left: 50px; margin-right: 50px;">
    
    <div style="margin:50px; text-align:center;">

    <a class="flex; fixed-top" href="{{ route('dashboard') }}">
            <img width="30px;" style="margin-top: 50px; margin-left: 30px;" src="/images/header/back_black.png">
    </a>
    <h1 class="mt-10; fixed-top; font-listy" style="color: #020202; font-size:20px; font-weight:bold; margin-top: 50px;">Recipes</h1>



    </div>

            @include('navbar')

            <div >
            <div class="row">
                <div class="col-12 mobile-card-container">
                    <div class="row">
                    <a href="{{ route('recipe_details') }}">
                    <div class=" card-background simulacion mx-auto">
                    <h1 style="font-size: 19px;" class="botton-left">Crock Pot Roast</h1>
                    <h2 style="font-size: 19px; background-color: green; margin-left: 253px;" class="botton-left">Easy</h2>
                        <img src="http://img.sndimg.com/food/image/upload/w_266/v1/img/recipes/27/20/8/picVfzLZo.jpg" style="border-radius: 10px; width: 500px; height: 150px;">

                    </div>
                    </a>
                    <div class=" card-background simulacion mx-auto">
                    <h1 style="font-size: 19px;" class="botton-left">Roasted Asparagus</h1>
                    <h2 style="font-size: 19px; background-color: red; margin-left: 253px;" class="botton-left">Hard</h2>
                        <img src="http://dagzhsfg97k4.cloudfront.net/wp-content/uploads/2012/05/lentils3.jpg" style="border-radius: 10px; width: 500px; height: 150px;">  

                    </div>
                    <div class=" card-background simulacion mx-auto">
                    <h1 style="font-size: 19px;" class="botton-left">Curried Lentils</h1>
                    <h2 style="font-size: 19px; display: flex; justify-content: flex-end; background-color: #ef5b13; margin-left: 225px;" class="botton-left">Medium</h2>
                        <img src="http://img.sndimg.com/food/image/upload/w_266/v1/img/recipes/50/84/7/picMcSyVd.jpg" style="border-radius: 10px; width: 500px; height: 150px;">

                    </div>
                    <div class=" card-background simulacion mx-auto">
                    <h1 style="font-size: 19px;" class="botton-left">Big Night Pizza</h1>
                    <h2 style="font-size: 19px; display: flex; justify-content: flex-end; background-color: red; margin-left: 253px;" class="botton-left">Hard</h2>
                        <img src="http://upload.wikimedia.org/wikipedia/commons/c/c7/Spinach_pizza.jpg" style="border-radius: 10px; width: 500px; height: 150px;">

                    </div>
                    <div class=" card-background simulacion mx-auto">
                    <h1 style="font-size: 19px;" class="botton-left">Crock Pot Roast</h1>
                    <h2 style="font-size: 19px; display: flex; justify-content: flex-end; background-color: green; margin-left: 253px;" class="botton-left">Easy</h2>
                        <img src="http://img.sndimg.com/food/image/upload/w_266/v1/img/recipes/27/20/8/picVfzLZo.jpg" style="border-radius: 10px; width: 500px; height: 150px;">

                    </div>
                    <div class=" card-background simulacion mx-auto">
                    <h1 style="font-size: 19px;" class="botton-left">Crock Pot Roast</h1>
                    <h2 style="font-size: 19px; display: flex; justify-content: flex-end; background-color: green; margin-left: 225px;" class="botton-left">Medium</h2>
                        <img src="http://img.sndimg.com/food/image/upload/w_266/v1/img/recipes/27/20/8/picVfzLZo.jpg" style="border-radius: 10px; width: 500px; height: 150px;">

                    </div>
                    </div>
                </div>
                </div>
            
            </div>
    </div>

</x-guest-layout>



<style>
.mobile-card-container {
  display: block;
}

.card-background {
  background-color: #ffffff;
  border-radius: 6px;
  margin-top: 16px;
  height: 150px;
  -webkit-box-shadow: 0px 2px 4px 1px rgba(0, 51, 102, 0.1);
  -moz-box-shadow: 0px 2px 4px 1px rgba(0, 51, 102, 0.1);
  box-shadow: 0px 2px 4px 1px rgba(0, 51, 102, 0.1);
}
html, body { height : 100%; }

body {
    margin:0;
    padding:0;
    background-color: white;   
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

}

.button-listy {
    margin-top:20px;
    font-weight : bold;
    color: white;
    border-radius: 10px;
    width : 100%;
    background-color: #F25C05;
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
.font-listy{
    font-family: "Roboto";
}

.botton-left{
    position: absolute;
    color: white;
    background: #020202;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-radius: 10px;
    padding: 6px;
    
}
</style>