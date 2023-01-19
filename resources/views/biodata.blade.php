<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Laravel </title>
</head>
<body>
    <h1>Tutorial Laravel</h1>
    <p> ini adalah paragraf brouu</p>

    <p>nama : {{ $nama }}</p>

    <p>Mata Pelajaran</p>
    <ul>

        @foreach($matkul as $m)

        <li>{{ $m }}</li>

        @endforeach
    </ul>


</body>
</html>
