<nav class=" d-none d-md-flex flex-column p-0 bg-dark bg-opacity-75">
  <a class="p-3 w-bold text-nowrap text-white text-decoration-none" href="#">
    <img class="me-1" src="assets/logo.svg" alt="Company logo" />

    <span>Company name</span>
  </a>

  <ul class="nav h-100 flex-column" style="width: 250px">
    <li class="nav-item mt-3">
      <a class="<?= $_SERVER['REQUEST_URI'] === '/' ? "nav-link text-primary" : "nav-link text-white"; ?>" 
        aria-current="page" href="./">
        Dashboard
      </a>
    </li>

    <li class="nav-item mt-3">
      <a class="<?= $_SERVER['REQUEST_URI'] === '/documents.php' ? "nav-link text-primary" : "nav-link text-white"; ?>"
        href="./documents.php">
        Documents
      </a>
    </li>

    <li class="nav-item mt-3">
      <a class="<?= $_SERVER['REQUEST_URI'] === '/statistics.php' ? "nav-link text-primary" : "nav-link text-white"; ?>" 
        href="./statistics.php">
        Statistics
      </a>
    </li>

    <li class="nav-item mt-3">
      <a class="nav-link text-white" href="#">
        Settings
      </a>
    </li>

    <li class="nav-item bg-dark mt-auto">
      <a class="nav-link text-white" href="#">
        Logout
      </a>
    </li>
  </ul>
</nav>