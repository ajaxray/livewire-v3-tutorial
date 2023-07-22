<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Fonts -->

    <!-- Styles -->
    <style>
        #content { margin: 0 auto; }
        #message-box {
            padding: 20px;
            border: 2px solid crimson;
            border-radius: 8px;
            background-color: darkmagenta;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 30px 90px;;
        }
        body {background-color: lightyellow}
        h1 {padding: 20px; font-family: cursive; font-size: x-large; color: crimson; text-align: center; }
        h2 {
            padding: 10px;
            font-family: cursive; font-size: xx-large; text-align: center;
            color: white;
            text-shadow: 0 0 4px yellow;
        }

        .button-pink {
         background-color: #EA4C89;
         border-radius: 8px;
         border-style: none;
         box-sizing: border-box;
         color: lightyellow;
         cursor: pointer;
         display: inline-block;
         font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
         font-size: 14px; font-weight: 500;
         height: 40px; line-height: 20px;
         margin: 0;
         outline: none;
         padding: 10px 16px;
         position: relative;
         text-align: center;
         transition: color 100ms;
         vertical-align: baseline;
         user-select: none;
         -webkit-user-select: none;
         touch-action: manipulation;
        }

        .button-pink:hover,
        .button-pink:focus {
            background-color: darkred;
            color: white;
            text-shadow: 0 0 2px white;
            box-shadow: 0 0 5px deeppink;
        }

        @media only screen and (min-width: 768px) {
            #content {width: 60%;}
        }
    </style>

</head>
<body class="antialiased">
<div class="">
    <div id="content">

        <h1>Fortune Cookie Message</h1>

        <div id="message-box">
            {{ $slot }}
        </div>

        <div style="font-size: 10px; color: darkslategray; margin-top: 25px">
            <div style="display: inline-block; width: 20px; height: 20px; float: left">
                <a href="https://github.com/ajaxray/livewire-v3-tutorial" >
                    <svg class="w-6" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16 0 0 7.16 0 16c0 7.08 4.58 13.06 10.94 15.18.8.14 1.1-.34 1.1-.76 0-.38-.02-1.64-.02-2.98-4.02.74-5.06-.98-5.38-1.88-.18-.46-.96-1.88-1.64-2.26-.56-.3-1.36-1.04-.02-1.06 1.26-.02 2.16 1.16 2.46 1.64 1.44 2.42 3.74 1.74 4.66 1.32.14-1.04.56-1.74 1.02-2.14-3.56-.4-7.28-1.78-7.28-7.9 0-1.74.62-3.18 1.64-4.3-.16-.4-.72-2.04.16-4.24 0 0 1.34-.42 4.4 1.64 1.28-.36 2.64-.54 4-.54 1.36 0 2.72.18 4 .54 3.06-2.08 4.4-1.64 4.4-1.64.88 2.2.32 3.84.16 4.24 1.02 1.12 1.64 2.54 1.64 4.3 0 6.14-3.74 7.5-7.3 7.9.58.5 1.08 1.46 1.08 2.96 0 2.14-.02 3.86-.02 4.4 0 .42.3.92 1.1.76A16.026 16.026 0 0 0 32 16c0-8.84-7.16-16-16-16Z" fill="slategrey"></path></svg>
                </a>
            </div>

            <div style="display: inline-block; float: right">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>

    </div>
</div>
</body>
</html>

