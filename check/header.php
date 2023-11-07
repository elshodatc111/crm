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
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $A_Username; ?></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $A_FIO; ?></h6>
              <span><?php echo $A_Username; ?></span>
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