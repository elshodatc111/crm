<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Hisobotlar</title>
  <?php include("./check/head.html"); ?>
</head>

<body>
<?php include("./check/header.php"); ?>
  <?php
    $top = "hisobot";
    $top_child = "";
  ?>
  <?php include("./check/top.php"); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bosh sahifa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Hisobot</li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-2 col-4"><a href="./hisobot_tashrif.php" class='btn btn-success w-100 py-1 my-1' style="border:0;border-radius:0;">TASHRIFLAR</a></div>
      <div class="col-lg-2 col-4"><a href="./hisobot_guruh.php" class='btn btn-primary w-100 py-1 my-1' style="border:0;border-radius:0;">GURUHLAR</a></div>
      <div class="col-lg-2 col-4"><a href="./hisobot_moliya.php" class='btn btn-primary w-100 py-1 my-1' style="border:0;border-radius:0;">MOLIYA</a></div>
      <div class="col-lg-2 col-4"><a href="./hisobot_techer.php" class='btn btn-primary w-100 py-1 my-1' style="border:0;border-radius:0;">O'QITUVCHILAR</a></div>
      <div class="col-lg-2 col-4"><a href="./hisobot_hodim.php" class='btn btn-primary w-100 py-1 my-1' style="border:0;border-radius:0;">HODIMLAR</a></div>
      <div class="col-lg-2 col-4"><a href="./hisobot.sms.php" class='btn btn-primary w-100 py-1 my-1' style="border:0;border-radius:0;">SMS</a></div>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title w-100 text-center pb-0 mb-1">Tashriflar</h5>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  
  <?php include("./check/footer.html");?>
</body>
</html>