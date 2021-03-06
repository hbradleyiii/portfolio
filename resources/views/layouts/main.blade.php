<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Harold Bradley III">
    <meta name="copyright" content="&copy; {{ date('Y') }} Harold Bradley III">
    <meta name="description" content="@yield('meta_description')">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <title>@yield('title')</title>
</head>
<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

</body>
</html>
