<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../asset/style/MODUL4 RICO.css">
  </head>
  <body>
  <?php
    include 'config/quizwadconnector.php';
      $idproduct = $_GET['idproduct'];
      $query = mysqli_query($connect, "SELECT * FROM menu WHERE idproduct = '$idproduct'");
      $select = mysqli_fetch_assoc($query);
    ?>
    <br><br>
    <div class="container mb-3" style="margin-top:30px;">
      <h2 class="text-light">Edit Menu</h2>
      <br>
      <section id=form>
        <form action="config/quizwadedit.php" method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="NamaMenu" class="form-label text-light"><strong>Nama Menu</strong></label>
            <input type="text" class="form-control" id="namaproduct" name="namaproduct" value="<?= $select['namaproduct'] ?>">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label text-light"><strong>Deskripsi</strong></label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Deskripsi"><?= $select['deskripsi'] ?></textarea>
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label text-light"><strong>Harga</strong></label>
            <input type="number" id="quantity" class="form-control" name="harga" value="<?= $select['harga'] ?>">
          </div>
          <div class="mb-3">
            <label for="inputGroupFile02" class="form-label text-light"><strong>Foto</strong></label>
            <input type="file" class="form-control" id="inputGroupFile02" name="fotoproduct">
          </div>
          <br>
          <input id="hide" type="number" name="idproduct" value="<?= $select['idproduct'] ?>">
          <button type="submit" class="btn btn-warning col-1" value="selesai">submit</button>
        </form>
      </section>
      <br><br><br>
    </div>
  <br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>