<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="vQI9KUpaanLyF3YwsFVDWw0XWT4lglwf8UcCli7i">

    <title>Koostem</title>

    <!-- Fonts changed -->

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/">

                    <img src="/assets/images/footer_logo.png" alt="" srcset="">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <!-- Session Status -->


                <!-- Validation Errors -->


                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
