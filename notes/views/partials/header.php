<div class="w-100 bg-light overflow-auto d-flex flex-column">  
  <header class="py-3 bg-white">
    <div class="container-xxl">
      <div class="row gy-2 align-items-center">
        <div class="col-2 d-md-none">  
          <a data-bs-toggle="offcanvas" 
            href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            <svg viewBox="0 0 100 80" width="24" height="20">
              <rect width="100" height="13"></rect>
              <rect y="30" width="100" height="13"></rect>
              <rect y="60" width="100" height="13"></rect>
            </svg>
          </a>

          <div class="offcanvas offcanvas-start" style="width: 250px;" 
            tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-body p-0">
              <nav class="h-100 d-flex flex-column p-0 bg-dark bg-opacity-75">
                <a class="p-3 w-bold text-white text-decoration-none" href="#">
                  <img class="me-1" src="assets/logo.svg" alt="Company logo" />

                  <span>Company name</span>
                </a>

                <ul class="nav h-100 flex-column ">
                  <li class="nav-item mt-3">
                    <a class="nav-link active text-white" 
                      aria-current="page" href="#">
                      Dashboard
                    </a>
                  </li>

                  <li class="nav-item mt-3">
                    <a class="nav-link text-white" href="#">
                      User management
                    </a>
                  </li>

                  <li class="nav-item mt-3">
                    <a class="nav-link text-white" href="#">
                      Documents
                    </a>
                  </li>

                  <li class="nav-item mt-3">
                    <a class="nav-link text-white" href="#">
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
            </div>
          </div>
        </div>
        <div class="col-10 col-sm-4 col-md-6 col-lg-3 col-xl-5 d-flex justify-content-end justify-content-sm-start">
          <div class="input-group" style="width: 12rem">
            <span class="input-group-text" id="basic-addon1">
              <i class="fa fa-search"></i>
            </span>

            <input type="search" class="form-control" placeholder="Search all..."
              aria-label="Search all..." aria-describedby="basic-addon1">
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-9 col-xl-7">
          <div class="row d-flex align-items-center justify-content-start justify-content-sm-end">
            <div class="col-2 col-lg-3 col-xxl-2">
              <a href="#">
                <span class="d-none d-lg-block">Help guides</span>

                <i class="d-lg-none fa-solid fa-question"></i>
              </a>
            </div>

            <div class="col-2">
              <a href="#">
                <span class="d-none d-lg-inline-block text-decoration-underline">Inbox</span>

                <i class="fa-solid fa-inbox position-relative">
                  <span class="position-absolute top-0 start-100 
                    translate-middle p-1 bg-danger border 
                    border-light rounded-circle text-decoration-none">

                    <span class="visually-hidden">Unread messages
                    </span>
                  </span>
                </i>
              </a>
            </div>

            <div class="col-2 col-lg-4 col-xxl-3">
              <a href="#">
                <button type="button" class="btn btn-primary btn-sm d-none d-lg-inline-block">
                  Download client
                </button>

                <i class="d-lg-none fa-solid fa-download"></i>
              </a>
            </div>

            <div class="col-6 col-sm-3 col-lg-2">
              <div class="dropdown text-end">
                <a class="btn position-relative p-0" role="button" 
                  data-bs-toggle="dropdown" id="dropdownProfile" 
                  aria-expanded="false" href="#">

                  <img class="rounded-circle" src="assets/profile.jpg"
                    alt="Godlike guy" width="50" />

                  <span class="position-absolute bottom-0 end-0 p-2 
                    bg-success border border-light rounded-circle">
                    <span class="visually-hidden">Online</span>
                  </span>
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownProfile">
                  <li>
                    <a class="dropdown-item" href="#">Action</a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="#">Another action</a>
                  </li>

                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>