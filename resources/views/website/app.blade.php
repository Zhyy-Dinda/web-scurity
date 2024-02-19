<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSIRT</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" href="{{ asset('img/bg/logo/logo-2.png') }}"width="200" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header desain -->
    @include('website.components.header')
    <!-- header desain end -->


    @yield('content')


    <!-- maps -->
   
    <!-- footer end-->

    @include('website.components.script')
</body>

</html>
