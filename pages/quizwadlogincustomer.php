<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../asset/style/quizwad.css">
</head>

<body>
  <section id=login>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <section id="carosel banner">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="object-fit: cover;">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                  <a href="quizwadmenu.html"><img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="..."></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Special Mixed Salad</h5>
                    <p>Campuran dari Salad Buah dan Salad Sayur yang menggoda selera.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="..."></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Great Beef Steak</h5>
                    <p>Steak dari daging Sapi pilihan yang tentunya nikmat saat dihidangkan.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://images.unsplash.com/photo-1496116218417-1a781b1c416c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="d-block w-100" alt="..."></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Wonderful Soup Dumpling</h5>
                    <p>Pangsit Kuah yang menggoda selera terutama saat setelah makan.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <a href="quizwadmenu.html"><img src="https://images.unsplash.com/photo-1579954115545-a95591f28bfc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="..."></a>
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Delightful Strawberry Juice</h5>
                    <p>Jus Stroberi yang segar diambil dari perkebunan terbaik.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </section>
        </div>
        <div class="col-sm-6">
          <br><br><br>
          <h3>Login as customer</h3>
          <form action="config/quizwadlogincustomer.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="emailcustomer" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="passwordcustomer">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" name="remember" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-warning">Login</button>
            <p>Anda belum punya akun? <a href="quizwadindex.php?page=signup" class="text-primary">Daftar</a></p>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>