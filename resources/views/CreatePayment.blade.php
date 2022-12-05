<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment method</title>
    <link 
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
</head>
<body>
    <div class="text-center">
        <h1>
            <b>Bagian Pembayaran</b>
        </h1>
    </div>

    <form class="p-5" action="{{route('StorePayment')}}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <h1><b>Silahkan Transfer Ke rekening berikut</b></h1>
        <h2><b>No Rek: 123456789, an Kevin</b></h2>
        
        <!-- Upload gambar -->
        <div class="mb-3">
            <label for="BuktiPembayaran" class="form-label">Bukti Transfer</label>
            <input type="file" class="form-control" id="picture" name="BuktiPembayaran">
            @error('BuktiPembayaran')
                <label for="">{{$message}}</label>
            @enderror
            <br>
        <!-- Button -->
        <button type="submit" class="btn btn-primary">Selesai</button>
        </div>
</Form>
</body>
</html>