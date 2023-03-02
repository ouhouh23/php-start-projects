<?php require "partials/head.php"; ?>

  <?php require "partials/navigation.php"; ?>

  <?php require "partials/header.php"; ?>    

  <section class="container-xxl h-100 py-3">
    <div class="card h-100">
      <div class="card-header bg-white">
        <div class="row gy-3">
          <nav class="col-12" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>

              <li class="breadcrumb-item active" aria-current="page">
                Dashboard
              </li>
            </ol>
          </nav>

          <div class="col-12 col-xl-5">
            <h1 class="h5 mb-0">Order Catalogue
              <span class="badge bg-success">New items</span>
            </h1>
          </div>

          <div class="col-12 col-xl-7">
            <div class="row gy-2 d-flex justify-content-center">
              <div class="col-8 col-sm-4">
                <select class="form-select" aria-label="Select column">
                  <option selected>Select column</option>
                  <option value="1">Column one</option>
                  <option value="2">Column two</option>
                  <option value="3">Column three</option>
                </select>
              </div>

              <div class="col-8 col-sm-4">
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon2">
                    <i class="fa fa-search"></i>
                  </span>

                  <input type="search" class="form-control" placeholder="Search list"
                    aria-label="Search list" aria-describedby="basic-addon2">
                </div>
              </div>

              <div class="col-7 col-sm-4 d-flex justify-content-between">
                <div class="dropdown">
                  <a class="btn" role="button" 
                    data-bs-toggle="dropdown" id="dropdownFilters" 
                    aria-expanded="false" href="#">

                    <img src="assets/triangle.svg" alt="pyramid" />
                  </a>

                  <ul class="dropdown-menu" aria-labelledby="dropdownFilters">
                    <li>
                      <a class="dropdown-item" href="#">Filter 25</a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="#">Filter 50</a>
                    </li>

                    <li>
                      <a class="dropdown-item" href="#">Filter 100</a>
                    </li>
                  </ul>
                </div>

                <a class="btn btn-primary" href="#" role="button">Add new
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="table-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Serial code</th>
                <th scope="col">Stock</th>
                <th scope="col">Category</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody class="border-top-0 text-nowrap">
              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>

              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>

              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>

              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>

              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>

              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>

              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>
              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>

              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>

              <tr>
                <th scope="row">03</th>
                <td>Mackbook Pro 16</td>
                <td>#123-456ABC</td>
                <td>123</td>
                <td>Apple</td>
                <td colspan="2">
                  <a class="me-2" href="#">Edit</a> 
                  <a href="#">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card-footer bg-white">
        <div class="row gy-3">
          <div class="col-12 col-lg-4 offset-lg-4 d-flex justify-content-center align-items-center order-last order-lg-first">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-sm mb-0">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&lt;</span>
                  </a>
                </li>

                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>

                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2</a>
                </li>

                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>

                <li class="page-item">
                  <a class="page-link" href="#">4</a>
                </li>

                <li class="page-item">
                  <a class="page-link" href="#">...10</a>
                </li>

                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&gt;
                    </span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="col-12 col-lg-4 d-flex justify-content-center justify-content-lg-end">
            <select class="form-select w-auto mb-3 mb-sm-0" aria-label="select-form">
              <option selected>Display 10 items</option>
              <option value="1">Display 30 items</option>
              <option value="2">Display 50 items</option>
              <option value="3">Display 100 items</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </section>

  <p>
    current page 
    <span>
      <?= $heading ?>
    </span>
  </p>

<?php require "partials/footer.php"; ?>
