<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Yakunlangan guruhlar</title>
  <?php include("./check/head.html"); ?>
</head>

<body>
<?php include("./check/header.php"); ?>
  <?php
    $top = "guruh";
    $top_child = "guruhend";
  ?>
  <?php include("./check/top.php"); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bosh sahifa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Yakunlangan guruhlar</li>
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
                    <th>Guruh nomi</th>
                    <th>Boshlanish vaqti</th>
                    <th>Yakunlanish vaqti</th>
                    <th>Talabalar</th>
                    <th>Tulov summasi</th>
                    <th>Guruh holati</th>
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
                    <td>61</td>
                    <td><a href="./guruh_eye.php" class="text-priary"><i class="bi bi-eye"></i></a></td>
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