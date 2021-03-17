<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>photo</title>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/backoffice">Backoffice</a>
    </nav>
    <section>
        <h1>Mes photos : </h1>
    </section>

    <section>
        <h1>Ajouter une photo</h1>
        <form action="/photo" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Photos : </label>
            <input type="file" name="img">
            <button type="submit" class="btn btn-warning">Ajouter</button>
        </form>
    </section>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>