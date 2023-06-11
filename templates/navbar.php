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
      <img
        src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg"
        alt=""
        width="30"
        height="24"
        class="d-inline-block align-text-top"
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
      <?php
            $filename = basename($_SERVER['SCRIPT_FILENAME']);
            $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
            $capitalizedFilename = ucfirst($filenameWithoutExtension);
            echo $capitalizedFilename;
        ?>
    </a>

    <button
      class="badge navbar-toggler"
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
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <figcaption class="blockquote-footer">
            <cite title="Source Title">Bendahara</cite>
          </figcaption>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<br /><br /><br />
