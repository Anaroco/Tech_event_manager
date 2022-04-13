<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">  
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Poppins:wght@400;700&family=Share+Tech&display=swap" rel="stylesheet">
    <title>TECHVENTS</title>
</head>
<body>
    <header>
        <x-header/>
    </header>
    <main>
      
        <div>
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/modallogin.js')}}"></script>
</body>

<footer>
    <x-footer/>
</footer>

</html>