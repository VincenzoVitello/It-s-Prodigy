<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
   <div class="container-fluid d-flex m-0 p-0">
    <section class="ms_dashboard">
        <a href="https://www.itsprodigy.com/" target="_blank">
            <img src="{{asset('images/logo.png')}}" alt="" class="prodigy_logo">
        </a>
        <div id="registration">
            <div class="customer">
                <a href="{{route('clienti.index')}}"><button type="button" class="btn btn-primary mt-5 ms_btn">Vedi Clienti</button></a>
            </div>
            <div class="preventive">
                <a href="{{route('preventivi.index')}}"><button type="button" class="btn btn-primary mt-5 ms_btn">Vedi Preventivi</button></a>
            </div>
        </div>
    </section>
    
    <div class="container">
        @yield('content')
    </div>
   </div>
</body>
</html>