<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Qarzdorlar</title>
  <?php include("./check/head.html"); ?>
</head>

<body>
<?php include("./check/header.php"); ?>
  <?php
    $top = "tashrif";
    $top_child = "qarzdor";
  ?>
  <?php include("./check/top.php"); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bosh sahifa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Qarzdorlar</li>
        </ol>
      </nav>
    </div>
    <div class="card info-card sales-card">
      <div class="card-body p-2">
        <div class="table-responsive p-0 m-0">
          <table class="table p-0 m-0 text-center" style="font-size:12px" border=1 id="dataTable" cellspacing="0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>FIO</th>
                    <th>Telefon raqam</th>
                    <th>Yashash manzil</th>
                    <th>Guruhlar soni</th>
                    <th>Qarzdorlik</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Elshod Musurmonov</td>
                    <td>+99 890 888 5522</td>
                    <td>Qarshi shhar</td>
                    <td>06.11.2023</td>
                    <td>61</td>
                    <td><a href="./user_tashrif_eye.php" class="text-priary"><i class="bi bi-eye"></i></a></td>
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