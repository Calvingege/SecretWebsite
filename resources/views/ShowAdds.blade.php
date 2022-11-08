<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>purchaseSapi</title>
    <link 
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
</head>
<body>
    <!-- Contoh -->

    <div class="text-center">
        <h1>
            <b>Beli Sapi Disini Woiii</b>
        </h1>
    </div>
    <form action="{{route('StorePurchase')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
    @foreach ($Adds as $Adds)
        <img src="{{asset('/storage/image/' .$Adds->FotoSapi)}}" alt="FotoSapi" width="300" height="200">
    @endforeach
    </div>
</body>
</html>