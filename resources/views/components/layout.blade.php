<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/card.css">
    <!-- <link rel="stylesheet" href="/css/nav.css"> -->
    <link rel="stylesheet" href="/css/notice.css"> 
    <link rel="stylesheet" href="/css/calander.css"> 
    <!-- <link rel="stylesheet" href="/css/login.css">  -->
   <link rel="stylesheet" href="{{ asset('/css/login.css') }}"> 
    <!-- <link rel="stylesheet" href="/css/login.css">  -->
    


    <title>{{ $title }}</title>
</head>
<body>
    <x-navbar /> <!-- Include the navbar component here -->

    {{ $slot }}

    @if(!request()->is('login')) <!-- Check if the current page is not the login page -->
        <x-footer /> <!-- Include the footer component here -->
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="nav.js"></script> -->
    
</body>
</html>