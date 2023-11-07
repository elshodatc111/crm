<?php
  include_once("./check/top_head.php");
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>O'qituvchilar</title>
  <?php include("./check/head.html"); ?>
</head>

<body>
<?php include("./check/header.php"); ?>
  <?php
    $top = "techer";
    $top_child = "";
  ?>
  <?php include("./check/top.php"); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">O'qituvchilar</li>
        </ol>
      </nav>
    </div>
    <div class="card info-card sales-card">
      <div class="text-center">
        <h5 class="card-title w-100 text-center m-0 p-0 mt-1">
          <b class="pl-4 btn btn-outline-primary" style="font-weight:900;border-radius:0;" data-bs-toggle="modal" data-bs-target="#techerplus">
            <i class="bi bi-plus"></i> YANGI O'QITUVCHI QO'SHISH
          </b>
        </h5>
      </div>
      <div class="modal fade" id="techerplus" tabindex="-1" data-bs-backdrop="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Yangi o'qituvchi qo'shish</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./config/techer/techer_plus.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">FIO</label>
                        <input type="text" name="FIO" class="form-control" style="border-radius: 0;" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefon raqam</label>
                        <input type="text" name="Phone" class="form-control phone" value="998" placeholder="Telefon raqami" style="border-radius: 0;" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Yashash manzil</label>
                        <select name="Address" class="form-control" style="border-radius: 0;" required>
                            <option value="">Tanlang</option>
                            <option value="10242">Chiroqchi tuman</option>
                            <option value="10212">Dexqonobod tuman</option>
                            <option value="10207">G'uzor tuman</option>
                            <option value="10237">Kasbi tuman</option>
                            <option value="10232">Kitob tuman</option>
                            <option value="10240">Ko'kdala tuman</option>
                            <option value="10229">Koson tuman</option>
                            <option value="10233">Mirishkor tuman</option>
                            <option value="10234">Muborak tuman</option>
                            <option value="10235">Nishon tuman</option>
                            <option value="10220">Qamashi tuman</option>
                            <option value="10401">Qarshi shahar</option>
                            <option value="10224">Qarshi tuman</option>
                            <option value="10246">Shaxrisabz shahar</option>
                            <option value="10245">Shaxrisabz tuman</option>
                            <option value="10250">Yakkabog' tuman</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tug'ilgan kuni</label>
                        <input type="date" name="TKun" class="form-control" style="border-radius: 0;" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mutahasisligi</label>
                        <input type="text" name="Mutahasis" class="form-control" style="border-radius: 0;" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">O'qituvchi haqida</label>
                        <input type="text" name="About" class="form-control" style="border-radius: 0;" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Login</label>
                        <input type="text" name="Login" class="form-control" style="border-radius: 0;" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Parol</label>
                        <input type="password" name="Parol" class="form-control" style="border-radius: 0;" required>
                    </div>
                    <button type="submit" class="btn btn-outline-primary w-100" style="border-radius: 0;"><i class="bi bi-plus-square" style="font-size:18px"></i></i> Saqlash</button>
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
                    <th>FIO</th>
                    <th>Telefon raqam</th>
                    <th>Yashash manzil</th>
                    <th>Tug'ilgan kun</th>
                    <th>Login</th>
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
                    <td><a href="./techer_eye.php" class="text-priary"><i class="bi bi-eye"></i></a></td>
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