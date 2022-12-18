<!doctype html>
<html lang="en">
  <head>
    <style>
      #hide {
    display: none;
  }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RICO RESTO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/quizwad.css">
  </head>
  <body>


    <section id="navbar">
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
          <img src="https://i.ibb.co/s3JCfYT/LOGO-RICORESTO.png" alt="" width="5%">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="quizwadindex.php?page=Home">Home</a>
              </li>
              <li class="nav-item">
                <a id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link" href="quizwadindex.php?page=menu">Menu</a>
              </li>
              <li class="nav-item">
                <?php
                if(isset($_GET['page']) && $_GET['page'] == 'Home'){?>
                  <a class="nav-link" href="#map">Location
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>
                </a><?php 
                }
                else{

                }
                ?>   
              </li>
              <li class="nav-item">
              <?php
                  include_once("config/quizwadconnector.php");
                  $result = mysqli_query($connect, "SELECT * FROM akun");
                  if(mysqli_fetch_array($result)>0){ ?>
                    <a id="<?= !isset($_COOKIE['emailadmin']) ? 'hide' : '' ?>" class="nav-link" href="quizwadindex.php?page=dashboard">Dashboard</a>
                  <?php }
                  else{} 
                  ?>
              </li>
              <li class="nav-item">
                  <div class="dropdown">  
                  <?php 
                  include_once("config/quizwadconnector.php");
                  $result = mysqli_query($connect, "SELECT * FROM akun");
                  $select = mysqli_fetch_assoc($result);
                  if(mysqli_fetch_array($result)>0){
                  ?>
                  <button  class="btn btn-light dropdown-toggle text-secondary" style="margin-left: 1000px;" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg> <?= isset($_COOKIE['nama']) ? $_COOKIE['nama'] : 'Log In' ?> 
                  </button>
                  <ul class="dropdown-menu" style="margin-left: 1000px;">
                    <li><a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link" href="quizwadindex.php?page=Loginadmin">Login Admin</a></li>
                    <li><a id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="nav-link" href="quizwadindex.php?page=Logincustomer">Login</a></li>
                    <li><a id="<?= !isset($_COOKIE['nama']) ? 'hide' : '' ?>" class="dropdown-item text-warning" href="quizwadindex.php?page=logout">Log Out</a></li>
                  </ul>
                </div>
                </li>
            </ul>
            <?php } 
            ?>
          </div>
        </div>
      </nav>
    </section>
   <?php
        if (isset($_GET['page']) && isset($_GET['id'])) {
            $page = $_GET['page'];
            $id = $_GET['id'];

            switch ($page) {
                case 'admin':
                    include "pages/quizwadadmin.php";
                    break;
                default:
                    echo "<center><h2>Error 404 Not Found</h2></center>";
                    break;
            }
        } else if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'Home':
                    include "pages/quizwadhome.php";
                    break;
                case 'dashboard':
                    include "pages/quizwaddashboard.php";
                    break;
                case 'menu':
                    include "pages/quizwadmenu.php";
                    break;
                case 'tambahmenu':
                    include "pages/quizwadtambahmenu.php";
                    break;
                case 'edit':
                    include "pages/quizwadupdate.php";
                    break;
                case 'dashboard':
                      include "pages/quizwaddashboard.php";
                      break;
                case 'pesanan':
                    include "pages/quizwadpesanan.php";
                    break;
                case 'Loginadmin' :
                    include "pages/quizwadloginadmin.php";
                    break;
                case 'Logincustomer' :
                    include "pages/quizwadlogincustomer.php";
                    break;
                case 'signup' :
                    include "pages/quizwadsignup.php";
                    break;
                case 'logout' :
                    include "config/quizwadlogout.php";
                    break;
                case 'gagal' :
                    include "pages/quizwadgagal.php";    
                default:
                    echo "<center><h2>Error 404 Not Found</h2></center>";
                    break;
            }
        }
        else {
            include "pages/quizwadhome.php";
        }
    ?>

      <section id="futer" class="bg-warning">
        <div class="Container text-center">
        <footer class="text-body text-light">
          <h5 class="text-light">RICO RESTO</h5>
          <p class="text-light">GDC Sektor Azalea, Jatimulya, Kec. Cilodong, Kota Depok, Jawa Barat 16413</p>
          <a class="nav-link text-light" href="https://www.instagram.com/mascarenhasstevanus/">Follow on Instagram
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg></a>
          <a class="nav-link text-light" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Subscribe Our Channel
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
              <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
            </svg></a>
            </div>
        </footer>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js%22%3E"></script>
  </body>
</html>