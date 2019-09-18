<?php
session_start();
if (isset($_SESSION['login'])) {
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>

<!-- header -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">AYR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="latihan.php">Latihan 1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="latihan2.php">Latihan 2</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"></a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="dropdown-item" href="logout.php" onclick="myFunction()">Log Out</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
</nav>

<!-- end header -->

<!-- content -->

<div class="container">
    <div class="row" style="padding:20px;">
      <div class="col-md-12">
        <div class="card">
            <div class="card-header">Formulir</div>
            <div class="card-body">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="">Nama</label>
                      <input type="text" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="logout.php"><input type="button" class="btn btn-success" value="Log Out"></a>
                  </div>
                </form>
                <?php
                  if(isset($_POST['simpan'])){
                    $a = $_POST['nama'];
                    $b = $_POST['alamat'];
                    $c = count($a);
                  }
                ?>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="background:white">
            <center>
                  <h2>Hasil Formulir</h2>
            </center>
            <div class="table-responsive">
                  <table class="table">
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                      </tr>
                      <tr>
                        <td><?= $c; ?></td>
                        <td><?= $a; ?></td>
                        <td><?= $b; ?></td>
                      </tr>
                  </table>
            </div>
        </div>
    </div>
</div>


<!-- end content -->

<!-- footer -->


<!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php
}else{
    header("Location: login.php");
}
?>