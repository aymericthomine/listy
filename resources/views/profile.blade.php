<x-guest-layout>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap');
    </style>

    <div style="margin-left: 50px; margin-right: 50px;">

    <div style="margin:50px; text-align:center;">

    <a class="flex; fixed-top" href="{{ route('dashboard') }}">
            <img width="30px;" style="margin-top: 50px; margin-left: 30px;" src="/images/header/back_black.png">
    </a>
    <h1 class="mt-10; fixed-top; font-listy" style="color: #020202; font-size:20px; font-weight:bold; margin-top: 50px;">My Profile</h1>

    </div>

            @include('navbar')

                </div>
                <div style="display: flex; justify-content: center;">
                    <form class="mt-32 mb-10">
                        <x-jet-label class="mb-4" />
                        <x-jet-label class="mb-2" />
                    </form>
                </div>

                <div class="flex" style="justify-content: space-evenly;">

                    <a class="button-listy" style="color: white ; width: 120px" href="{{ route('editprofile') }}">
                        {{ __('Edit profile') }}
                    </a>
                    <a class="button2-listy" style="color: white; text-decoration: none; width: 120px" href="{{ route('settings') }}">
                        {{ __('Settings') }}
                    </a>

                </div>


    <h1 class="font-listy" style="display: flex; color: #020202; font-size:20px; font-weight:bold; margin-top: 50px; justify-content: center">History of lists</h1>


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
    margin-top: 20px;
    text-align: center;
    font-weight : bold;
    color: white;
    border-radius: 10px;
    width : 100%;
    padding: 10px;
    background-color: #F25C05;
    cursor : pointer;
}
.button2-listy {
    margin-top: 20px;
    text-align: center;
    font-weight : bold;
    color: white;
    border-radius: 10px;
    width : 100%;
    padding: 10px;
    background-color: darkgrey;
    cursor : pointer;
}
.button-listy:hover {
    text-decoration: none;
}
.button-listy:active {
    text-decoration: none;
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
    font-family: 'Roboto', sans-serif;
}
</style>
