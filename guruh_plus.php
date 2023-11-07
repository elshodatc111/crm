<?php
  include_once("./check/top_head.php");
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Yangi guruh qo'shish</title>
  <?php include("./check/head.html"); ?>
</head>

<body>
<?php include("./check/header.php"); ?>
  <?php
    $top = "guruh";
    $top_child = "guruhplus";
  ?>
  <?php include("./check/top.php"); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bosh sahifa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Yangi guruh ochish</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="card info-card sales-card">
          <div class="card-body pt-3">
            <form action="./config/guruh/guruh_plus.php" method="POST" class="row" id="form1">
              <div class="col-lg-6">
                <label class="form-label mt-1 mb-0" style="font-weight:600;">Guruh nomi</label>
                <input type="text" class="form-control mb-3 mt-0" name="GuruhNomi" style="border-radius:0;" required>
                <label class="form-label mt-1 mb-0" style="font-weight:600;">To'lov summasi</label>
                <input type="text" name="GuruhSumma" class="form-control mb-3 mt-0" id="summa1" style="border-radius:0;" required>
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">O'qituvchiga to'lov</label>
                    <input type="text" name="TechTulov" class="form-control mb-3 mt-0" id="summa2" style="border-radius:0;" required>
                  </div>
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">O'qituvchiga bonus</label>
                    <input type="text" name="TechBonus" class="form-control mb-3 mt-0" VALUE="0" id="summa3" style="border-radius:0;" required>
                  </div>
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">Boshlanish vaqti</label>
                    <input type="date" id="date1" name="Start" class="form-control mb-3 mt-0" style="border-radius:0;" required>
                  </div>
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">Yakunlanish vaqti</label>
                    <input type="date" id="date2" name="End" class="form-control mb-3 mt-0" style="border-radius:0;" required>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <label class="form-label mt-1 mb-0" style="font-weight:600;">Xonani tanlang</label>
                <select class="form-control mb-3 mt-0" name="RoomID" style="border-radius:0;" required>
                  <option value=''>Tanlang</option>
                  <option value=12345678>1-xona</option>
                </select>
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">Dushanba</label>
                    <select class="form-control mb-3 mt-0" name="RoomID" style="border-radius:0;" required>
                      <option value=''>Tanlang</option>
                      <option value=12345678>1-xona</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">Seshanba</label>
                    <select class="form-control mb-3 mt-0" name="RoomID" style="border-radius:0;" required>
                      <option value=''>Tanlang</option>
                      <option value=12345678>1-xona</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">Chorshanba</label>
                    <select class="form-control mb-3 mt-0" name="RoomID" style="border-radius:0;" required>
                      <option value=''>Tanlang</option>
                      <option value=12345678>1-xona</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">Payshanba</label>
                    <select class="form-control mb-3 mt-0" name="RoomID" style="border-radius:0;" required>
                      <option value=''>Tanlang</option>
                      <option value=12345678>1-xona</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">Juma</label>
                    <select class="form-control mb-3 mt-0" name="RoomID" style="border-radius:0;" required>
                      <option value=''>Tanlang</option>
                      <option value=12345678>1-xona</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-12">
                    <label class="form-label mt-1 mb-0" style="font-weight:600;">Shanba</label>
                    <select class="form-control mb-3 mt-0" name="RoomID" style="border-radius:0;" required>
                      <option value=''>Tanlang</option>
                      <option value=12345678>1-xona</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 text-center">
                  <button class="btn btn-primary w-50" style="border-radius:0;">YANGI GURUHNI SAQLASH</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>



  </main>
  
  <?php include("./check/footer.html");?>
</body>
</html>