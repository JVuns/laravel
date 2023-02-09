<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            margin: 0;
        }

        footer{
                background-color: aquamarine; 
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                text-align: center;
                align-items: center;
        }

        footer p {
            padding: 20px
        }

        nav{
            background-color: aquamarine; display: flex;
            justify-content: center;
        }

        nav h1{
            padding: 20px;
            flex-grow: 2;
        }

        a{
            padding: 10px;
            flex-grow: 2;
        }

        .ybutton{
            background-color: yellow;
            text-decoration: none;
            color: black;
        }

        nav div{
            padding: 20px;
        }
    </style>
    <link rel="stylesheet" href="global.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<nav >
    <h1>Amazing E-Grocery</h1>
    <div>
        @guest
        <a class="ybutton" href="/register">Register</a>
        <a class="ybutton" href="/login">Login</a>
        @endguest
        @auth
        <a class="ybutton" href="/login">Sign out</a>
        @endauth
    </div>
</nav>
@yield('content')
<footer>
    <p>Amazing E-Grocery 2023</p>
</footer>
</html>