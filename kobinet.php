<?php
  include_once("./check/top_head.php");
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kobinet</title>
  <?php include("./check/head.html"); ?>
</head>

<body>
  <?php include("./check/header.php"); ?>
  <?php include("./check/top.php"); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bosh sahifa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Kobinet</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="card info-card sales-card">
          <div class="card-body">
            <h5 class="card-title w-100 text-center pb-0 mb-1">Kobinet</h5>
          </div>
        </div>
      </div>
    </section>



  </main>
  
  <?php include("./check/footer.html");?>
</body>
</html>