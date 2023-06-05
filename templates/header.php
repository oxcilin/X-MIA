<header class="header header-sticky mb-4">
  <div class="container-fluid">
    <button
      class="header-toggler px-md-0 me-md-3"
      type="button"
      onclick="coreui.Sidebar.getInstance(document.querySelector(&#39;#sidebar&#39;)).toggle()"
    >
      <i class="fa-solid fa-bars"></i>
    </button>

    <ul class="header-nav d-none d-md-flex">
      <li class="nav-item">
        <a
          class="nav-link"
          href="
                <?php
                  $filename = basename($_SERVER['SCRIPT_FILENAME']);
                  $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
                  echo $filenameWithoutExtension;
                ?>
                "
        >
                <?php
                  $filename = basename($_SERVER['SCRIPT_FILENAME']);
                  $filenameWithoutExtension = pathinfo($filename, PATHINFO_FILENAME);
                  $capitalizedFilename = strtoupper($filenameWithoutExtension);
                  echo $capitalizedFilename;
                ?>

        </a>
      </li>
    </ul>
    <nav class="header-nav ms-auto me-4">
      <div
        class="btn-group"
        role="group"
        aria-label="Basic checkbox toggle button group"
      >
        <input
          class="btn-check"
          id="btn-light-theme"
          type="radio"
          name="theme-switch"
          autocomplete="off"
          value="light"
          onchange="handleThemeChange(this)"
        />
        <label class="btn btn-primary" for="btn-light-theme">
          <i class="fa-solid fa-sun"></i>
        </label>
        <input
          class="btn-check"
          id="btn-dark-theme"
          type="radio"
          name="theme-switch"
          autocomplete="off"
          value="dark"
          onchange="handleThemeChange(this)"
        />
        <label class="btn btn-primary" for="btn-dark-theme">
          <i class="fa-solid fa-cloud"></i>
        </label>
      </div>
    </nav>

    <ul class="header-nav me-4">
      <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <li class="nav-item dropdown d-flex align-items-center">
          <div class="avatar avatar-md">
            <img class="avatar-img" src="sut.png" alt="" />
          </div>
          <div class="dropdown-menu dropdown-menu-end pt-0">
            <div class="dropdown-header bg-light py-2 dark:bg-white dark:bg-opacity-10">
              <div class="fw-semibold">Settings</div>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa-solid fa-id-card-clip icon me-2"></i>
              Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="logout">
              <i class="fa-solid fa-right-from-bracket icon me-2"></i>
              Logout
            </a>
          </div>
        </li>
      </a>
    </ul>

  </div>
</header>
