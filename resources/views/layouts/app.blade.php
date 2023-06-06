<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <title>
        @yield('title')
    </title>

    @include('layouts.head-css')

</head>

<body class="g-sidenav-show   bg-gray-100">

    <div class="min-height-300 bg-primary position-absolute w-100"></div>

    <main class="main-content position-relative border-radius-lg ">

        @include('layouts.header')

        @yield('contant')

    </main>
</body>

</html>
