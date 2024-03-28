<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Styles -->
        @livewireStyles
        <style>
            .logo {
                width: 250px;
                /* Adjust the width as needed */
                height: auto;
                /* Ensures the aspect ratio is maintained */
                display: block;
                /* Ensures the logo is displayed as a block element */
                margin: 0 auto;
                /* Centers the logo horizontally within its container */
                margin-left: 20px;
                /* Moves the logo slightly to the left */
                filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.2));
                /* Adds a drop shadow effect */
                transition: transform 0.3s ease-in-out;
                /* Adds a smooth transition on hover */
            }

            .logo:hover {
                transform: scale(1.1);
                /* Increases the size of the logo slightly on hover */
            }

            /* Additional styles for the container and row */
            .container-fluid {
                background-color: #f8f9fa;
                /* Background color for the container */
            }

            .row {
                margin-left: 0;
                margin-right: 0;
            }

            .bg-white {
                background-color: #ffffff;
                /* Background color for the row */
            }

            .py-3 {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }

            .px-lg-5 {
                padding-left: 3rem;
                padding-right: 3rem;
            }

            /* For slides in the slideshow */
            .slideshow-slide {
                flex: 1 0 0;
                /* Let slides fill available space evenly */
            }
        </style>

    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
