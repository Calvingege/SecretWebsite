<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Payment</title>
    <link 
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
</head>
<body>
    <div class="text-center text-light bg-dark">
            <div>
                <h4>List Bukti Pembayaran</h4>
                <a href="../admin">Kembali Ke Admin</a>
            </div>
    </div>

    <form action="" method="GET" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 bg-secondary d-flex flex-column align-items-center justify-content-center border border-dark">
    @foreach ($payment as $payment)
    <!-- Foto Sapi -->
        <img src="{{asset('app/public/image/' .$payment->BuktiPembayaran)}}" alt="BuktiPembayaran" width="300" height="200">
    @endforeach
    </div>
    </form>
</body>
</html>