<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/csshome.css">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <title>Dashboard - Codign Lab</title>
</head>

<body>
  <div class="d-flex" id="content-wrapper">
    <div id="sidebar-container" class="bg-primary">
      <div class="logo">
        <h4 class="text-light font-weight-bold mb-0"><i class="fa-regular fa-circle-c mr-2 lead"></i>Coding Lab</h4>
      </div>
      <div class="menu">
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-apps mr-2 lead"></i>Dasboard</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-cube mr-2 lead"></i>Product</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-list mr-2 lead"></i>Order List</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-stats mr-2 lead"></i>Analytics</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-cloud mr-2 lead"></i>Stock</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-calculator mr-2 lead"></i>Total Order</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-contacts mr-2 lead"></i>Team</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-chatbubbles mr-2 lead"></i>Messages</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-bookmark mr-2 lead"></i>Favorities</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-settings mr-2 lead"></i>Setting</a>
        <a href="#" class="d-block text-light p-2"><i class="icon ion-md-undo mr-2 lead"></i>Log out</a>
      </div>
    </div>


    <div class="w-100">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline position-relative d-inline-block my-2">
              <input class="form-control" type="search" placeholder="Search..." aria-label="Buscar">
              <button class="btn btn-search btn-primary" type="submit"><i class="icon ion-md-search"></i></button>
            </form>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="Imagenes/User image.jpeg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />
                  Prem Shahi
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Fin Navbar -->

      <!-- Page Content -->
      <div id="content">
        <section class="bg-mix py-3">
          <div class="container">
            <div class="card rounded-0">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Total Order</h6>
                      <h3 class="font-weight-bold">40876 <a href="#"><i class="icon ion-md-cart text-primary"></i></a></h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>Up from yesterday</h6>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Total Sales</h6>
                      <h3 class="font-weight-bold">11,086 <a href="#"><i class="icon ion-md-cart text-success"></i></a></h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Up from yesterday</h6>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex stat my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Total Profit</h6>
                      <h3 class="font-weight-bold">$12,876 <a href="#"><i class="icon ion-md-cart text-warning"></i></a></h3>
                      <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> Up from yesterday</h6>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 d-flex my-3">
                    <div class="mx-auto">
                      <h6 class="text-muted">Total Return</h6>
                      <h3 class="font-weight-bold">11,086 <a href="#"><i class="icon ion-md-cart text-danger"></i></a></h3>
                      <h6 class="text-danger"><i class="icon ion-md-arrow-dropdown-circle"></i> Down from today</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 my-3">
                <div class="card rounded-0">
                  <div class="card-header bg-light">
                    <h6 class="font-weight-bold mb-0">Recent Sales</h6>
                  </div>
                  <div>
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Date</th>
                          <th scope="col">Customer</th>
                          <th scope="col">Sales</th>
                          <th scope="col">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="col">02 Jan 2021</th>
                          <td>Alex Doe</td>
                          <td>Delivered</td>
                          <td>$204.98</td>
                        </tr>
                        <tr>
                          <th scope="col">02 Jan 2021</th>
                          <td>David Mart</td>
                          <td>Pending</td>
                          <td>$24.25</td>
                        </tr>
                        <tr>
                          <th scope="col">02 Jan 2021</th>
                          <td>Roe Parter</td>
                          <td>Returned</td>
                          <td>$25.88</td>
                        </tr>
                        <tr>
                          <th scope="col">02 Jan 2021</th>
                          <td>Diana Penty</td>
                          <td>Delivered</td>
                          <td>$170.66</td>
                        </tr>
                        <tr>
                          <th scope="col">02 Jan 2021</th>
                          <td>Martin Paw</td>
                          <td>Pending</td>
                          <td>$56.66</td>
                        </tr>
                        <tr>
                          <th scope="col">02 Jan 2021</th>
                          <td>Doe Alex</td>
                          <td>Retuned</td>
                          <td>$44.95</td>
                        </tr>
                        <tr>
                          <th scope="col">02 Jan 2021</th>
                          <td>Alana Lexa</td>
                          <td>Delivered</td>
                          <td>$67.33</td>
                        </tr>
                        <tr>
                          <th scope="col">02 Jan 2021</th>
                          <td>Rexel Mags</td>
                          <td>Pending</td>
                          <td>$23.53</td>
                        </tr>
                        <tr>
                          <th scope="col">02 Jan 2021</th>
                          <td>Tiana Loths</td>
                          <td>Delivered</td>
                          <td>$46.52</td>
                        </tr>
                      </tbody>
                    </table>
                    <button class="btn btn-primary w-100">See All</button>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 my-3">
                <div class="card rounded-0">
                  <div class="card-header bg-light">
                    <h6 class="font-weight-bold mb-0">Top Seling Products</h6>
                  </div>
                  <div>
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td><img src="Imagenes/User image.jpeg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />Vuitton Sunglases</td>
                          <td>$1142</td>
                        </tr>
                        <tr>

                          <td><img src="Imagenes/User image.jpeg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />Hourglass Jeans</td>
                          <td>$1567</td>
                        </tr>
                        <tr>

                          <td><img src="Imagenes/User image.jpeg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />Nike Sport Shoe</td>
                          <td>$1234</td>
                        </tr>
                        <tr>

                          <td><img src="Imagenes/User image.jpeg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />Hermes Slik Scarves</td>
                          <td>$2312</td>
                        </tr>
                        <tr>

                          <td><img src="Imagenes/User image.jpeg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />Succi Ladies Bag</td>
                          <td>$1456</td>
                        </tr>
                        <tr>

                          <td><img src="Imagenes/User image.jpeg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />Gucci Womens's Bags</td>
                          <td>$2345</td>
                        </tr>
                        <tr>

                          <td><img src="Imagenes/User image.jpeg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />Addidas Running Shoe</td>
                          <td>$2345</td>
                        </tr>
                        <tr>

                          <td><img src="Imagenes/User image.jpeg" class="img-fluid rounded-circle avatar mr-2" alt="https://generated.photos/" />Bilack Wear´s Shirt</td>
                          <td>$1245</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>

      </div>

    </div>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>