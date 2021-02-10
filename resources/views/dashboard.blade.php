<x-guest-layout>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <!-- Bootstrap --> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    
    <div style="margin-left: 50px; margin-right: 50px;">
    
        @include('header')

        @include('navbar')

        <div style="margin-top: 150px;">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <div class="flex">
    <h6 class="font-listy; mt-6; mb-6" style="color: #020202; font-size:20px; font-weight:bold;">Popular Recipes</h6>
    <a class="mt-4; ml-12" href="{{ route('recipes') }}">
    <h6 class="font-listy;" style="color: #020202; font-size:15px; color: #8C0428; text-align: right;">See all (45)</h6>
    </a>
    </div>
        <div class="d-flex flex-row flex-nowrap overflow-auto">
            <div class="card card-block mx-2" style="min-width: 150px; min-height: 150px; border-radius: 10px;">Card</div>
            <div class="card card-block mx-2" style="min-width: 150px; min-height: 150px; border-radius: 10px;">Card</div>
            <div class="card card-block mx-2" style="min-width: 150px; min-height: 150px; border-radius: 10px;">Card</div>            
            <div class="card card-block mx-2" style="min-width: 150px; min-height: 150px; border-radius: 10px;">Card</div>                        
            <div class="card card-block mx-2" style="min-width: 150px; min-height: 150px; border-radius: 10px;">Card</div>                        
        </div>        
    </div>


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
</style>