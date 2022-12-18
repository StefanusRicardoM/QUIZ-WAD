<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href=".. /style/quizwad.css">
</head>

<body>
    <br><br>
    <div class="container" style="margin-top:30px;">
        <h2 class="bg-warning text-light">MENU</h2>
        <br>
        <section id="">
            <div class="container text-center">
                <div class="row row-cols-3">
                    <?php
                    include_once("config/quizwadconnector.php");
                    $result = mysqli_query($connect, "SELECT * FROM menu");
                    if ($result) {
                        while ($select = mysqli_fetch_array($result)) {
                    ?>
                            <div class="card mb-3 me-3" style="width: 18rem;">
                                <img src="style/<?= $select['fotoproduct'] ?>" class="card-img-top" alt="menu">
                                <div class="col">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $select['namaproduct'] ?></h5>
                                        <p>Rp.<?php echo $select['harga'] ?></p>
                                        <p class="card-text text-secondary"><?php echo $select['deskripsi'] ?></p>
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col-6">
                                                    <a id="<?= !isset($_COOKIE['emailadmin']) ? 'hide' : '' ?>" href='quizwadindex.php?page=edit&idproduct=<?= $select['idproduct'] ?>' type="button" class="btn btn-warning col-12 rounded-pill">Edit</a>
                                                </div>
                                                <div class="col-6">
                                                    <a id="<?= !isset($_COOKIE['emailadmin']) ? 'hide' : '' ?>" href='config/quizwaddeletemenu.php?idproduct=<?php echo $select['idproduct'] ?>' class="btn btn-danger col-12 rounded-pill">Delete</a>
                                                </div>
                                                <div class="col">
                                                    <button id="<?= !isset($_COOKIE['emailcustomer']) ? 'hide' : '' ?>" href='config/quizwadaddorder.php?idproduct=<?php echo $select['idproduct'] ?>' data-bs-target="#exampleModal" data-bs-toggle="modal" type="button" class="btn btn-success  col-12 rounded-pill">Pesan</button>
                                                    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <section id=form>
                                                                        <form action="config/quizwadaddorder.php" method="post" enctype="multipart/form-data">
                                                                            <div class="mb-3">
                                                                                <label for="NamaMenu" class="form-label text-warning"><strong>Nama Menu</strong></label>
                                                                                <p><?php echo $select['namaproduct'] ?></p>
                                                                                <input id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" type="text" id="pesanan" name="pesanan" value="<?= $select['namaproduct'] ?>">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="exampleFormControlTextarea1" class="form-label text-warning"><strong>Deskripsi</strong></label>
                                                                                <p id="exampleFormControlTextarea1" rows="3" name="Deskripsi"><?php echo $select['deskripsi'] ?></p>
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="harga" class="form-label text-warning"><strong>Harga</strong></label>
                                                                                <p><?php echo $select['harga'] ?></p>
                                                                                <input id="<?= isset($_COOKIE['nama']) ? 'hide' : '' ?>" type="number" id="quantity" name="harga" value="<?= $select['harga'] ?>">
                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="jumlah" class="form-label text-warning"><strong>Jumlah</strong></label>
                                                                                <input type="number" id="quantity" class="form-control" name="jumlah">
                                                                            </div>
                                                                            <br>
                                                                            <input id="hide" type="number" name="idproduct" value="<?= $select['idproduct'] ?>">
                                                                            <button type="submit" class="btn btn-warning text-light" value="selesai">pesan</button>
                                                                        </form>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    }
                    ?>
                </div>
            </div>
        </section>
        <br><br>
        <p class="text-secondary">Jumlah Menu:<?= mysqli_num_rows($result) ?></p>
        <button id="<?= !isset($_COOKIE['emailadmin']) ? 'hide' : '' ?>" class="btn btn-warning"><a class="text-light" href="quizwadindex.php?page=tambahmenu">Tambah Menu</a></button>
        <br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>