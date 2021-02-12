<x-guest-layout>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <!-- Bootstrap --> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    
    <div style="margin-left: 50px; margin-right: 50px;">
    
    <div style="margin:50px; text-align:center;">

    <a class="flex; fixed-top" href="{{ route('recipes') }}">
            <img width="30px;" style="margin-top: 50px; margin-left: 30px;" src="/images/header/back_black.png">
    </a>
    <h1 class="mt-10; fixed-top; font-listy" style="color: #020202; font-size:20px; font-weight:bold; margin-top: 50px;">Crock Pot Roast</h1>



    </div>

        @include('navbar')

        <div >
            <div class="row">
                <div class="col-12 mobile-card-container">
                    <img src="http://img.sndimg.com/food/image/upload/w_266/v1/img/recipes/27/20/8/picVfzLZo.jpg" style="border-radius: 10px; width: 500px; height: 150px;">
                    <h2 style="font-size: 19px; background-color: green; margin-top: 20px;" class="botton">Easy</h2>

                    <h4 style="margin-top: 350x;">Incredients :</h4>
                    <ol>
                        <li>• beef roast (130 grams)<li>
                        <li>• brown gravy mix (1 package)</li>
                        <li>• dried Italian salad dressing mix (1 package)</li>
                        <li>• dry ranch dressing mix (1 package)</li>
                        <li>• water (1/2 cup)</li>
                    </ol>
                    <h4>Step by step :</h4>
                    <ul>
                        <li>1. Place beef roast in crock pot.<li>
                        <li>2. Mix the dried mixes together in a bowl and sprinkle over the roast.,</li>
                        <li>3. Pour the water around the roast.,</li>
                        <li>4. Cook on low for 7-9 hours.</li>
                    </ul>
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
  height: 100px;
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
    padding: 15px;
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
.botton{
    color: white;
    background: #020202;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-radius: 10px;
    padding: 6px;
    display: flex;
    justify-content: center;

    
}
</style>