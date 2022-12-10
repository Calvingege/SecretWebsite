<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link 
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
</head>
<body>
    <!-- Bagian Create -->
    <form class="p-5 text-light bg-dark" action="{{route('StoreAdds')}}" method="POST"
    enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
        <h1><b>Pasang Iklan Sapi Disini</b></h1>
        </div>
        <div class="mb-3">
          <label for="NamaSapi" class="form-label">Nama Sapi</label>
          <input type="text" class="form-control" id="NamaSapi" name="NamaSapi">
        </div>

        <div class="mb-3">
          <label for="JenisSapi" class="form-label">Jenis Sapi</label>
          <input type="text" class="form-control" id="JenisSapi" name="JenisSapi">
        </div>

        <div class="mb-3">
          <label for="HargaSapi" class="form-label">Harga Sapi</label>
          <input type="text" class="form-control" id="HargaSapi" name="HargaSapi">
        </div>

        <!-- Upload gambar -->
        <div class="mb-3">
            <label for="FotoSapi" class="form-label">Foto Sapi</label>
            <input type="file" class="form-control" id="picture" name="FotoSapi">
            @error('FotoSapi')
                <label for="">{{$message}}</label>
            @enderror
            <br>
        <!-- Button -->
        <div class="d-flex flex-column align-items-center justify-content-center">
          <button type="submit" class="btn btn-primary ">Pasang Iklan</button>
          <br>
          <a href="../purchase/sapi" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">lihat iklan</a>
        </div>
      </div>
      <br><br><br><br>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38
    MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </script>
</body>
</html>