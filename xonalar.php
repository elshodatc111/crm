<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Xonalar</title>
  <?php include("./check/head.html"); ?>
</head>

<body>
<?php include("./check/header.php"); ?>
  <?php
    $top = "xonalar";
    $top_child = "";
  ?>
  <?php include("./check/top.php"); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Xonalar</li>
        </ol>
      </nav>
    </div>
    <div class="card info-card sales-card">
      <div class="text-center">
        <h5 class="card-title w-100 text-center m-0 p-0 mt-1">
          <b class="pl-4 btn btn-outline-primary" style="font-weight:900;border-radius:0;" data-bs-toggle="modal" data-bs-target="#techerplus">
            <i class="bi bi-plus"></i> YANGI XONA QO'SHISH
          </b>
        </h5>
      </div>
      <div class="modal fade" id="techerplus" tabindex="-1" data-bs-backdrop="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yangi xona qo'shish</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="./config/insert_hodim.php" method="POST">
                <div class="form-group mt-1">
                  <label for="exampleInputEmail1">Xonaning nomi</label>
                  <input type="text" class="form-control" name="Nomi" style="border-radius:0;" required>
                </div>
                <div class="form-group mt-1">
                  <label for="exampleInputEmail1">Xonaning sig'imi</label>
                  <input type="number" class="form-control" name="Sigim" style="border-radius:0;" required>
                </div>
                <button type="submit" class="btn btn-outline-primary mt-3 w-100" style="border-radius:0;">Saqlash</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body p-2">
        <div class="table-responsive p-0 m-0">
          <table class="table p-0 m-0 text-center" style="font-size:12px" border=1 id="dataTable" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Xona nomi</th>
                    <th>Xona sigimi</th>
                    <th>Xona qo'shildi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Elshod Musurmonov</td>
                    <td>+99 890 888 5522</td>
                    <td>61</td>
                    <td><a href="./hodimlar_eye.php" class="text-priary"><i class="bi bi-trash"></i></a></td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  
  </main>
  
  <?php include("./check/footer.html");?>
</body>
</html>