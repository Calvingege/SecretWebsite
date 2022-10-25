<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Very Secret Website</title>
    <link 
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Secret Website</a>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Of Navbar-->


  <div class="form-group mx-sm-3 mb-2">
  <?php
// Pasang cookie, mulai pakai session start 
    session_start(); 

    $username = "";
    $password = "";

    // Super Global variabel 
    $username = @$_POST['username'];
    $password = @$_POST['password'];
    // @ -> buat error suppresion 

    // samdengan dua kali == lose Comparison dia akan coba ganti tipe datanya mana yang sesuai 
    // stric compariosn === dia bakal bandingin tipe datanya 

    if ($_SERVER['REQUEST_METHOD'] == "POST") { // Lakukan pengechekan jika POST. Kalau pakai get gausah pakai ini. klo ngak gini dari awal udah muncul anda hackernya.
        if($username === "admin" && $password === "admin") {
            // Todo: Login Sucess
            echo "Login Sucess!";
            $_SESSION['isLoggedin'] = true;
            $_SESSION['username'] = $username;
        }
        else {
            echo "Login Failed! anda kucing persia?";
        }
    }
?>

<form method="POST" class="form-inline">
    <label for="staticEmail2" class="sr-only">username</label>
    <input type="text" name="username" class="form-control" id="staticEmail2" placeholder="eq:kusingpersia">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">password</label>
    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mx-sm-3 mb-2">Confirm identity</button>
</form>

</body>
</html>