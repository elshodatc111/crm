<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link <?php if($top==='home'){}else{echo "collapsed";} ?>" href="./index.php">
          <i class="bi bi-grid"></i>
          <span>Bosh sahifa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($top==='tashrif'){}else{echo "collapsed";} ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>Tashriflar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse <?php if($top==='tashrif'){echo 'show';}?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="./user_tashrif.php" class="<?php if($top_child==='tashrif'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>Tashriflar</span>
            </a>
          </li>
          <li>
            <a href="./user_tashrif_qarzdorlar.php" class="<?php if($top_child==='qarzdor'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>Qarzdorlar</span>
            </a>
          </li>
          <li>
            <a href="./user_tashrif_tulovlar.php" class="<?php if($top_child==='tulovlar'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>To'lovlar</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($top==='guruh'){}else{echo "collapsed";} ?>" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Guruhlar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse <?php if($top==='guruh'){echo 'show';}?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="./guruh_plus.php" class="<?php if($top_child==='guruhplus'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>Yangi guruh qo'shish</span>
            </a>
          </li>
          <li>
            <a href="./guruh_start.php" class="<?php if($top_child==='guruhstart'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>Guruhlar</span>
            </a>
          </li>
          <li>
            <a href="./guruh_end.php" class="<?php if($top_child==='guruhend'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>Yakunlangan guruhlar</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($top==='hisobot'){}else{echo "collapsed";} ?>" href="./hisobot_tashrif.php">
          <i class="bi bi-layout-text-window-reverse"></i><span>Hisobotlar</span>
        </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link <?php if($top==='statistika'){}else{echo "collapsed";} ?>" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Statistika</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse <?php if($top==='statistika'){echo 'show';}?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="./stat_kun_tashrif.php" class="<?php if($top_child==='kunliktashrif'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>Kunlik tashriflar</span>
            </a>
          </li>
          <li>
            <a href="./stat_oy_tashrif.php" class="<?php if($top_child==='oyliktashrif'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>Oylik tashriflar</span>
            </a>
          </li>
          <li>
            <a href="./stat_kun_tolov.php" class="<?php if($top_child==='kunliktolovlar'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>Kunlik to'lovlar</span>
            </a>
          </li>
          <li>
            <a href="./stat_oy_tolov.php" class="<?php if($top_child==='oyliktolovlar'){echo 'active';}?>">
              <i class="bi bi-circle"></i><span>Oylik to'lovlar</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($top==='moliya'){}else{echo "collapsed";} ?>" data-bs-target="#icons-nav" href="./moliya.php">
          <i class="bi bi-gem"></i><span>Moliya</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($top==='techer'){}else{echo "collapsed";} ?>" href="./techer.php">
          <i class="bi bi-person-bounding-box"></i>
          <span>O'qituvchilar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($top==='hodimlar'){}else{echo "collapsed";} ?>" href="./hodimlar.php">
          <i class="bi bi-person"></i>
          <span>Hodimlar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($top==='xonalar'){}else{echo "collapsed";} ?>" href="./xonalar.php">
          <i class="bi bi-question-circle"></i>
          <span>Xonalar</span>
        </a>
      </li>
    </ul>
  </aside>