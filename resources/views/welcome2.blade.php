<!doctype html>

<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>How to install Botman Chatbot in Laravel 5? - ts durjoy</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>

            html, body {

                background-color: #fff;

                color: #636b6f;

                font-family: 'Nunito', sans-serif;

                font-weight: 200;

                height: 100vh;

                margin: 0;

            }

        </style>

    </head>

    <body>
<h3>Buy Movie Tickets N500.00</h3>
<form method="POST" action="{{ route('pay') }}" id="paymentForm">
    {{ csrf_field() }}

    <input name="name" placeholder="Name" />
    <input name="email" type="email" placeholder="Your Email" />
    <input name="phone" type="tel" placeholder="Phone number" />

    <input type="submit" value="Buy" />
</form>
    </body>

  

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

    <script>

	    var botmanWidget = {

	        aboutText: 'ssdsd',

	        introMessage: " Hi! I'm Ts durjoy form basabaribd.com"

	    };

    </script>

  

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

      

</html>