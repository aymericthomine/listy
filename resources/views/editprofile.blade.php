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

            <a class="flex; fixed-top" href="{{ route('profile') }}">
                <img width="30px;" style="margin-top: 50px; margin-left: 30px;" src="/images/header/back_black.png">
            </a>
            <h1 class="mt-10; fixed-top; font-listy" style="color: #020202; font-size:20px; font-weight:bold; margin-top: 50px;">Edit Profile</h1>

        </div>

        @include('navbar')

        <div style="display: flex; justify-content: center;">
            <form method="POST" action="{{ route('editprofile') }}" class="mt-32 mb-10">
                @csrf

                <div class="block">
                <x-jet-label for="name" class="mb-2" value="{{ __('Username') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus class="mb-4"/>
                </div>

                <div class="block">
                <x-jet-label for="email" class="mb-2" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus/>
                </div>
            </form>
        </div>

        <div class="flex" style="justify-content: space-around;">

            <a class="button-listy" style="color: white; width: 130px" href="{{ route('profile') }}">
                {{ __('Confirm') }}
            </a>

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
        margin-top: 20px;
        text-align: center;
        font-weight : bold;
        color: white;
        border-radius: 10px;
        width : 100%;
        padding: 10px;
        background-color: #F25C05;
        cursor : pointer;
        text-decoration: none;
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
        text-decoration: black;
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