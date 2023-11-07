<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tashriflar</title>
  <?php include("./check/head.html"); ?>
</head>

<body>
  <?php include("./check/header.php"); ?>
  <?php
    $top = "tashrif";
    $top_child = "tashrif";
  ?>
  <?php include("./check/top.php"); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bosh sahifa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="./user_tashrif.php">Tashriflar</a></li>
          <li class="breadcrumb-item active">Talaba</li>
        </ol>
      </nav>
    </div>
    <div class="card info-card py-2">
      <div class="row text-center" style="font-size:14px">
        <div class="col-lg-4">
          <h5 style="font-weight:800"><b class="text-primary">ELSHOD MUSURMONOV</b></h5>
          <table class="table">
            <tr>
              <td style="text-align:left;font-weight:600;">Telefon raqam:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Manzil:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Tug'ilgan kun:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Tanishi:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Tanishi Tel:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Messegerlar:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Talaba haqida:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
          </table>
        </div>
        <div class="col-lg-4">
        <h5 style="font-weight:800"><b class="text-primary">Balans: <i class='text-danger'>-2 323 232</i> so'm</b></h5>
          <table class="table">
            <tr>
              <td style="text-align:left;font-weight:600;">To'lovlar:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Chegirma:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Qaytarilgan to'lovlar:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Jarima:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Guruhlarha to'lovlar:</td>
              <td style="text-align:right"><i>+99 899 </i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Tashrif vaqti:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
            <tr>
              <td style="text-align:left;font-weight:600;">Taxrirlandi:</td>
              <td style="text-align:right"><i>+99 899 666 5252</i></td>
            </tr>
          </table>
        </div>
        <div class="col-lg-4 p-2">
          <button class="btn btn-primary mb-1 text-white"  data-bs-toggle="modal" data-bs-target="#tulovqilish" style="border-radius:0;width:90%;font-weight:700">TO'LOV QILISH</button>
          <button class="btn btn-success mb-1 text-white"  data-bs-toggle="modal" data-bs-target="#guruhplus" style="border-radius:0;width:90%;font-weight:700">GURUHGA QO'SHISH</button>
          <button class="btn btn-primary mb-1 text-white"  data-bs-toggle="modal" data-bs-target="#eslatma" style="border-radius:0;width:90%;font-weight:700">ESLATMA QOLDIRISH</button>
          <button class="btn btn-success mb-1 text-white"  data-bs-toggle="modal" data-bs-target="#sms" style="border-radius:0;width:90%;font-weight:700">SMS YUBORISH</button>
          <button class="btn btn-primary mb-1 text-white"  data-bs-toggle="modal" data-bs-target="#guruhlari" style="border-radius:0;width:90%;font-weight:700">TALABA GURUHLARI</button>
          <button class="btn btn-success mb-1 text-white"  data-bs-toggle="modal" data-bs-target="#chegirma" style="border-radius:0;width:90%;font-weight:700">CHEGIRMA</button>
        </div>
        <!-- Tulov qlish -->
        <div class="modal fade" id="tulovqilish" tabindex="-1" data-bs-backdrop="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h5 class="modal-title">Yangi tashrif qo'shish</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
              <div class="modal-body">
                  <form action="#" method="POST" >
                      <div class="mb-3">
                          <label class="form-label">FIO</label>
                          <input type="text" name="FIO" class="form-control" style="border-radius: 0;" required>
                      </div>
                      <button type="submit" class="btn btn-success w-100" style="border-radius: 0;"><i class="bi bi-plus-square" style="font-size:18px"></i></i> SAQLASH</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Guruhga qo'shish -->
        <div class="modal fade" id="guruhplus" tabindex="-1" data-bs-backdrop="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h5 class="modal-title">Guruhga qo'shish</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
              <div class="modal-body">
                  <form action="#" method="POST" >
                      <div class="mb-3">
                          <label class="form-label">FIO</label>
                          <input type="text" name="FIO" class="form-control" style="border-radius: 0;" required>
                      </div>
                      <button type="submit" class="btn btn-success w-100" style="border-radius: 0;"><i class="bi bi-plus-square" style="font-size:18px"></i></i> SAQLASH</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <!-- Eslatma -->
        <div class="modal fade" id="eslatma" tabindex="-1" data-bs-backdrop="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h5 class="modal-title">Guruhga qo'shish</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
              <div class="modal-body">
                  <form action="#" method="POST" >
                      <div class="mb-3">
                          <label class="form-label">FIO</label>
                          <input type="text" name="FIO" class="form-control" style="border-radius: 0;" required>
                      </div>
                      <button type="submit" class="btn btn-success w-100" style="border-radius: 0;"><i class="bi bi-plus-square" style="font-size:18px"></i></i> SAQLASH</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <!-- sms -->
        <div class="modal fade" id="sms" tabindex="-1" data-bs-backdrop="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h5 class="modal-title">Guruhga qo'shish</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
              <div class="modal-body">
                  <form action="#" method="POST" >
                      <div class="mb-3">
                          <label class="form-label">FIO</label>
                          <input type="text" name="FIO" class="form-control" style="border-radius: 0;" required>
                      </div>
                      <button type="submit" class="btn btn-success w-100" style="border-radius: 0;"><i class="bi bi-plus-square" style="font-size:18px"></i></i> SAQLASH</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <!-- chegirma -->
        <div class="modal fade" id="chegirma" tabindex="-1" data-bs-backdrop="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><h5 class="modal-title">Guruhga qo'shish</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
              <div class="modal-body">
                  <form action="#" method="POST" >
                      <div class="mb-3">
                          <label class="form-label">FIO</label>
                          <input type="text" name="FIO" class="form-control" style="border-radius: 0;" required>
                      </div>
                      <button type="submit" class="btn btn-success w-100" style="border-radius: 0;"><i class="bi bi-plus-square" style="font-size:18px"></i></i> SAQLASH</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <!-- guruhlari -->
        <div class="modal fade" id="guruhlari" tabindex="-1" data-bs-backdrop="false">
          <div class="modal-dialog  modal-xl">
            <div class="modal-content">
              <div class="modal-header"><h5 class="modal-title">Guruhga qo'shish</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
              <div class="modal-body">
                  <form action="#" method="POST" >
                      <div class="mb-3">
                          <label class="form-label">FIO</label>
                          <input type="text" name="FIO" class="form-control" style="border-radius: 0;" required>
                      </div>
                      <button type="submit" class="btn btn-success w-100" style="border-radius: 0;"><i class="bi bi-plus-square" style="font-size:18px"></i></i> SAQLASH</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <!-- davomad -->
        <div class="modal fade" id="davomad" tabindex="-1" data-bs-backdrop="false">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header"><h5 class="modal-title">Guruhga qo'shish</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
              <div class="modal-body">
                  <form action="#" method="POST" >
                      <div class="mb-3">
                          <label class="form-label">FIO</label>
                          <input type="text" name="FIO" class="form-control" style="border-radius: 0;" required>
                      </div>
                      <button type="submit" class="btn btn-success w-100" style="border-radius: 0;"><i class="bi bi-plus-square" style="font-size:18px"></i></i> SAQLASH</button>
                  </form>
              </div>
            </div>
          </div>
        </div>



        <div class="col-12">
          <hr>
          <div class="table-responsive p-0 m-0">
            <table class="table">
              <tr>
                <th>#</th>
                <th>dddd</th>
                <th>ssss</th>
                <th>ssss</th>
                <th>ssss</th>
              </tr>
              <tr>
                <td>s</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  
  </main>
  
  <?php include("./check/footer.html");?>
</body>
</html>