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
                    
                    <div class="col-10 card-background simulacion mx-auto" style="border: 1px solid red;">
                        Recipes::findOne();
                    </div>
                    <div class="col-10 card-background simulacion mx-auto" style="border: 1px solid blue;">
                        Card Content
                    </div>
                    <div class="col-10 card-background simulacion mx-auto" style="border: 1px solid green;">
                        Card Content
                    </div>
                    <div class="col-10 card-background simulacion mx-auto" style="border: 1px solid green;">
                        Card Content
                    </div>
                    <div class="col-10 card-background simulacion mx-auto" style="border: 1px solid green;">
                        Card Content
                    </div>
                    <div class="col-10 card-background simulacion mx-auto" style="border: 1px solid green;">
                        Card Content
                    </div>
                    <div class="col-10 card-background simulacion mx-auto" style="border: 1px solid green;">
                        Card Content
                    </div>
                    <div class="col-10 card-background simulacion mx-auto" style="border: 1px solid green;">
                        Card Content
                    </div>
                    <div class="col-10 card-background simulacion mx-auto" style="border: 1px solid green;">
                        Card Content
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
</style>