<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a
      class="navbar-brand"
      href="
    <?php
      $filename = basename($_SERVER['SCRIPT_FILENAME']);
      $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
      echo $filenameWithoutExtension;
    ?>"
    >
    <?php $domain = parse_url('http://' . $_SERVER['HTTP_HOST'], PHP_URL_HOST); ?>
      <img
        src="http://<?php echo $domain; ?>/db_oxa/logo.jpg"
        alt=""
        width="40"
        height="40"
        class="d-inline-block align-text-top"
        style="border-radius:50%; display: block;  margin-left: auto; margin-right: auto;"
      />
    </a>

    <a
      class="navbar-brand"
      href="
                <?php
                  $filename = basename($_SERVER['SCRIPT_FILENAME']);
                  $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
                  echo $filenameWithoutExtension;
                ?>"
    >
      <b>
        <?php
            $filename = basename($_SERVER['SCRIPT_FILENAME']);
            $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
            
            // Replace hyphens with spaces
            $filenameWithoutHyphen = str_replace("-", " ", $filenameWithoutExtension);
            
            // Capitalize each word
            $capitalizedFilename = ucwords($filenameWithoutHyphen);
            
            echo $capitalizedFilename;
        ?>
      </b>
    </a>

    <button
      class="badge navbar-toggler no-outline"
      type="button"
      data-bs-toggle="offcanvas"
      data-bs-target="#staticBackdrop"
      aria-controls="staticBackdrop"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div
      class="offcanvas offcanvas-start"
      data-bs-scroll="true"
      tabindex="-1"
      id="staticBackdrop"
    >
      <div class="offcanvas-header">
        <script>
          function displayTime() {
              var date = new Date();
              var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
              var hari_ini = hari[date.getDay()];
              var tanggal = date.getDate();
              var bulan = date.getMonth() + 1; // Perhatikan penambahan +1 untuk indeks bulan
              var tahun = date.getFullYear();
              var jam = date.getHours();
              var menit = date.getMinutes();
              var detik = date.getSeconds();

              var jamDisplay = hari_ini + ', ' + tanggal + '/' + bulan + '/' + tahun + ', ' + padZero(jam) + ';' + padZero(menit) + ';' + padZero(detik);

              document.getElementById("jam").innerHTML = jamDisplay;
          }

          function padZero(number) {
              return (number < 10) ? '0' + number : number;
          }

          setInterval(displayTime, 1000); // Pembaruan setiap detik (1000ms)
        </script>

        <h5 class="offcanvas-title" id="staticBackdrop">
            <span id="jam"></span>
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <?php
          $current_page = basename($_SERVER['REQUEST_URI']); // Mendapatkan nama halaman saat ini

          function isCurrentPage($page)
          {
              global $current_page;
              if ($current_page == $page) {
                  return 'nav-link active';
              } else {
                  return 'nav-link';
              }
          }

          function isCurrentDropdownPage($dropmenu_page) // Renamed the function
          {
              global $current_page;
              if ($current_page == $dropmenu_page) {
                  return 'dropdown-item active';
              } else {
                  return 'dropdown-item';
              }
          }
        ?>

        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <figcaption class="blockquote-footer">
            <cite title="Source Title">Bendahara</cite>
          </figcaption>
          <li class="nav-item">
            <a class="<?php echo isCurrentPage('home'); ?>" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="<?php echo isCurrentPage('catatan'); ?>" href="catatan">Catatan</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Uang Kas
            </a>
            <ul class="dropdown-menu">
              <li><a class="<?php echo isCurrentDropdownPage('pemasukan-uang-kas'); ?>" href="pemasukan-uang-kas">Pemasukan Data Uang Kas</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="<?php echo isCurrentDropdownPage('laporan-catatan'); ?>" href="print_Laporan-Catatan">Laporan Catatan</a></li>
              <li><a class="<?php echo isCurrentDropdownPage('laporan-pemasukan-uang-kas'); ?>" href="print_Laporan-Pemasukan Data-Uang-Kas">Laporan Pemasukan Data Uang Kas</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <footer class="footer mt-auto py-3 bg-body-tertiary">
        <div class="container">
          <a aria-current="page" href="_sign-out" type="button" class="w-100 btn btn-outline-danger"><i class="fa-solid fa-right-from-bracket"></i> Sign out</a>
        </div>
      </footer>
    </div>
  </div>
</nav>
<br /><br /><br />
