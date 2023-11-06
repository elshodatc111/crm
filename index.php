<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bosh sahifa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between ">
      <a href="./index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" style="margin: 0 auto;width: 120px;">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i> 
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="./tkun.php">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">6</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon" href="./eslatma.php">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">0</span>
          </a>
        </li>
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" data-bs-toggle="dropdown">
            <img src="assets/img/ss.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin123</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Elshod Musurmonov</h6>
              <span>Admin123</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="./kobinet.php">
                <i class="bi bi-person"></i>
                <span>Kabinet</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="./login.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Chiqish</span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>

  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="./index.php">
          <i class="bi bi-grid"></i>
          <span>Bosh sahifa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>Tashriflar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="./user_tashrif.php" class="">
              <i class="bi bi-circle"></i><span>Tashriflar</span>
            </a>
          </li>
          <li>
            <a href="./user_tashrif_qarzdorlar.php" class="">
              <i class="bi bi-circle"></i><span>Qarzdorlar</span>
            </a>
          </li>
          <li>
            <a href="./user_tashrif_tulovlar.php" class="">
              <i class="bi bi-circle"></i><span>To'lovlar</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Guruhlar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="./guruh_plus.php" class="">
              <i class="bi bi-circle"></i><span>Yangi guruh qo'shish</span>
            </a>
          </li>
          <li>
            <a href="./guruh_start.php" class="">
              <i class="bi bi-circle"></i><span>Guruhlar</span>
            </a>
          </li>
          <li>
            <a href="./guruh_end.php" class="">
              <i class="bi bi-circle"></i><span>Yakunlangan guruhlar</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./hisobot_tashrif.php">
          <i class="bi bi-layout-text-window-reverse"></i><span>Hisobotlar</span>
        </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Statistika</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="./stat_kun_tashrif.php" class="">
              <i class="bi bi-circle"></i><span>Kunlik tashriflar</span>
            </a>
          </li>
          <li>
            <a href="./stat_oy_tashrif.php" class="">
              <i class="bi bi-circle"></i><span>Oylik tashriflar</span>
            </a>
          </li>
          <li>
            <a href="./stat_kun_tolov.php" class="">
              <i class="bi bi-circle"></i><span>Kunlik to'lovlar</span>
            </a>
          </li>
          <li>
            <a href="./stat_oy_tolov.php" class="">
              <i class="bi bi-circle"></i><span>Oylik to'lovlar</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" href="./moliya.php">
          <i class="bi bi-gem"></i><span>Moliya</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./techer.php">
          <i class="bi bi-person-bounding-box"></i>
          <span>O'qituvchilar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./hodimlar.php">
          <i class="bi bi-person"></i>
          <span>Hodimlar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="./xonalar.php">
          <i class="bi bi-question-circle"></i>
          <span>Xonalar</span>
        </a>
      </li>
    </ul>
  </aside>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Bosh sahifa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
          <li class="breadcrumb-item active">Bosh sahifa</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <!-- O'qituvchilar -->
            <div class="col-lg-4 text-center">
              <div class="card info-card sales-card">
                <div class="card-body">
                                    <h5 class="card-title">O'QITUVCHILAR</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-bounding-box"></i>
                    </div>
                    <div class="ps-3">
                      <h6>6</h6>
                      <span class="text-success small pt-1 fw-bold">
                        5                      </span> <span class="text-muted small pt-2 ps-1">AKTIV O'QITUVCHILAR</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Tashriflar -->
            <div class="col-lg-4 text-center">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title">TASHRIFLAR</h5>
                                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>657</h6>
                      <span class="text-danger small pt-1 fw-bold">331</span> <span class="text-muted small pt-2 ps-1">AKTIV TASHRIFLAR</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Guruhlar -->
            <div class="col-lg-4 text-center">
              <div class="card info-card revenue-card">
                <div class="card-body">
                  <h5 class="card-title">GURUHLAR</h5>
                                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-diagram-3-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>39</h6>
                      <span class="text-success small pt-1 fw-bold">38</span> <span class="text-muted small pt-2 ps-1">AKTIV GURUHLAR</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card info-card sales-card">
            <div class="card-body"><hr class="m-0 p-0">
              <h3 class="text-center mt-1" style="font-weight: 700;">Dars jadvali</h3>
              <h4 style="font-weight:500">1-xona</h4>
              <div class="table-responsive">
                <table class="table table-bordered border-primary text-center">
                  <thead>
                    <tr>
                      <th scope="col">Dars vaqti / Hafta kuni</th>
                      <th scope="col">Dushanba</th>
                      <th scope="col">Seshanba</th>
                      <th scope="col">Chorshanba</th>
                      <th scope="col">Payshanba</th>
                      <th scope="col">Juma</th>
                      <th scope="col">Shanba</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                          <th scope='row'>08:00-09:30</th><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Bunyod A1 toq 08.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Davron HANGIL juft 14.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Bunyod A1 toq 08.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Davron HANGIL juft 14.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Bunyod A1 toq 08.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Davron HANGIL juft 14.00 >AKTIV</button></td></tr><tr>
                          <th scope='row'>09:30-11:00</th><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Ilhom HANGIL juft 9.30 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=BUNYOT B2 JUFT 10.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Ilhom HANGIL juft 9.30 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=BUNYOT B2 JUFT 10.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Ilhom HANGIL juft 9.30 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=BUNYOT B2 JUFT 10.00 >AKTIV</button></td></tr><tr>
                          <th scope='row'>11:00-12:30</th><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td></tr><tr>
                          <th scope='row'>12:30-14:00</th><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td></tr><tr>
                          <th scope='row'>14:00-15:30</th><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Bunyod B2 toq 14.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Bunyod hangil juft 14.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Bunyod B2 toq 14.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Bunyod hangil juft 14.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Bunyod B2 toq 14.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Bunyod hangil juft 14.00 >AKTIV</button></td></tr><tr>
                          <th scope='row'>15:30-17:00</th><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Asilbek HANGIL toq 16.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Davron A1 juft 14.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Asilbek HANGIL toq 16.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Davron A1 juft 14.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Asilbek HANGIL toq 16.00 >AKTIV</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Davron A1 juft 14.00 >AKTIV</button></td></tr><tr>
                          <th scope='row'>17:00-18:30</th><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Ilhom A1 toq 18.00 >AKTIV</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Ilhom A1 toq 18.00 >AKTIV</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=Ilhom A1 toq 18.00 >AKTIV</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td></tr><tr>
                          <th scope='row'>18:30-20:00</th><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=TOPIK 2 juft 18.00 >AKTIV</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=TOPIK 2 juft 18.00 >AKTIV</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=TOPIK 2 juft 18.00 >AKTIV</button></td></tr><tr>
                          <th scope='row'>20:00-21:30</th><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=ILHOM B2 Toq 20.00 >AKTIV</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=ILHOM B2 Toq 20.00 >AKTIV</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td><td><button class='btn btn-outline-success' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title=ILHOM B2 Toq 20.00 >AKTIV</button></td><td><button class='btn btn-outline-danger' style='padding:1px 2px;border-radius:0;margin:0 2px;' data-bs-toggle='tooltip' data-bs-placement='top' title='Dars qo`yilmagan' >BO`SH</button></td></tr>                          </tbody>
                </table>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  
  <footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>CRM ATKO</span></strong>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>