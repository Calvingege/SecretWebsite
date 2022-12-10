<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show adds</title>
    <link 
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
</head>
<body>
    <!-- Contoh -->

    <div class="text-light bg-dark">
        <h1>
            <b>Beli Sapi Disini Woiii</b>
        </h1>
    </div>
    <form action="{{route('CreatePayment')}}" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 bg-secondary flex-column border border-dark">
    @foreach ($Adds as $Adds)
    <!-- Foto Sapi -->
    <br> <br>
        <img src="{{asset('app/public/image/' .$Adds->FotoSapi)}}" alt="FotoSapi" width="300" height="200">
    <!-- Nama Sapi  -->
        <p>Nama Sapi: {{$Adds->NamaSapi}}</p>
    <!-- jenis sapi  -->
        <p>Jenis Sapi: {{$Adds->JenisSapi}}</p>
    <!-- Harga Sapi -->
        <p>Harga Sapi: {{$Adds->HargaSapi}}</p>
    <!-- Button -->
    <button type="submit" class="btn btn-primary">Beli Sapi</button>
    @endforeach
    </div>
</body>
</html>