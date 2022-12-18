<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DASHBOARD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="quizwad.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <br>
  <section id="Progres">
    <div class="container ">
      <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8">
          <?php
          include_once("config/quizwadconnector.php");
          $result = mysqli_query($connect, "SELECT * FROM pesanancust");
          if ($result) {
          ?>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Customer</th>
                  <th scope="col">Order</th>
                  <th scope="col">Total</th>
                  <th scope="col">Confirm</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                  while ($select = mysqli_fetch_assoc($result)) {
                  ?>
                    <th scope="row"><?php echo $select['idpesanan'] ?></th>
                    <td><?php echo $select['pemesan'] ?></td>
                    <td><?php echo $select['pesanan'] ?></td>
                    <td><?php echo $select['total'] ?></td>
                    <td><a href='config/quizwadconfirmorder.php?idpesanan=<?php echo $select['idproduct'] ?>' class="btn btn-success col-6 rounded-pill">Confirm</a></td>
                </tr>
            <?php }
                } ?>
              </tbody>
            </table>

</body>

</html>