<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        /* Additional styles */
        body {
            background-color: #f8f9fa; /* Light gray background */
            font-family: 'Raleway', sans-serif; /* Use Raleway font */
            color: #333; /* Dark text color */
        }

        .content {
            text-align: center;
            margin-top: 100px; /* Add some space from the top */
        }

        .stack {
            font-size: 2rem; /* Medium font size */
            font-weight: 200;
            color: #E66311; /* Gray text color */
            margin-bottom: 30px; /* Add space below the tech stack */
        }

        .title {
            font-size: 4rem; /* Large font size */
            font-weight: 600; /* Bold font weight */
            color: #007bff; /* Blue title color */
            animation: fadeInUp 1s ease; /* Fade in animation */
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px); /* Move up 20px */
            }
            to {
                opacity: 1;
                transform: translateY(0); /* Move back to original position */
            }
        }

        /* Links */
        .links a {
            color: #007bff; /* Blue link color */
            margin-right: 20px; /* Add space between links */
            font-weight: 600; /* Bold font weight */
            text-decoration: none; /* Remove underline */
            transition: color 0.3s ease; /* Smooth color transition */
        }

        .links a:hover {
            color: #0056b3; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <a href="{{ route('boards.index') }}">Boards</a>
                    <a href="{{ route('teams.index') }}">Teams</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Welcome to {{ config('app.name', 'Laravel') }} System
            </div>
            <div class="stack">
                    Tech Stack -&gt; php , Laravel , Blade, MySQL , PHPMyAdmin
                </div>
                <div class="stack">
                    Made By -&gt; Akash Chourasia
                </div>
        </div>
    </div>
</body>
</html>

                
