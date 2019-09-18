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
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
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
            <div class="card-header">PPDB SMK ASSALAAM</div>
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Masuk</button>
                <a href="logout.php"><input type="button" class="btn btn-success" value="Log Out"></a>
            </div>
        </div>

    <div id="myModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Output PPDB</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="latihan2.php" method="post">
                  <div class="form-group">
                    <label for="">Nama</label>
                      <input type="text" name="nama" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
                    <input type="radio" name="jk" value="Perempuan">Perempuan<br>
                  </div>
                  <div class="form-group">
                    <label for="">Asal Sekolah</label>
                    <input type="text" name="asek" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Nilai Bahasa Indonesia</label>
                    <input type="number" name="niba" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Nilai Matematika</label>
                    <input type="number" name="nima" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Nilai IPA</label>
                    <input type="number" name="nipa" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Nilai Bahasa Inggris</label>
                    <input type="number" name="ning" class="form-control">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Simpan" name="simp">
                    <button type="reset" class="btn btn-danger">Reset</button>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
            </div>
            </div>
        </div>
    </div>


      </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="background:white">
        <?php
          if(isset($_POST['simp'])){
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jk'];
            $asek = $_POST['asek'];
            $niba = $_POST['niba'];
            $nima = $_POST['nima'];
            $nipa = $_POST['nipa'];
            $ning = $_POST['ning'];?>

            <center>
                  <h2>Hasil</h2>
            </center>
            <div class="table-responsive">
                  <table class="table">
                      <tr>
                        <td>Nama</td>
                        <td><?= $nama; ?></td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td><?= $alamat; ?></td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td><?= $jk; ?></td>
                      </tr>
                      <tr>
                        <td>Asal Sekolah</td>
                        <td><?= $asek; ?></td>
                      </tr>
                      <tr>
                        <td>Nilai Bahasa Indonesia</td>
                        <td><?= $niba; ?></td>
                      </tr>
                      <tr>
                        <td>Nilai Matematika</td>
                        <td><?= $nima; ?></td>
                      </tr>
                      <tr>
                        <td>Nilai IPA</td>
                        <td><?= $nipa; ?></td>
                      </tr>
                      <tr>
                        <td>Nilai Bahasa Inggris</td>
                        <td><?= $ning; ?></td>
                      </tr>
                      <tr>
                        <td>Nilai Rata-rata</td>
                        <td><?php
                            $rata = ($niba+$nima+$nipa+$ning)/4;
                            echo "$rata";
                        ?></td>
                      </tr>
                      <tr>
                        <td>Keterangan</td>
                        <td><?php
                            if($rata>65){
                                $ket = "Anda Di Terima!";
                            }else{
                                $ket = "Mohon Maaf anda belum di terima!";
                            }
                            echo "$ket";
                        ?></td>
                      </tr>
                  </table>
            </div>

        <?php
          }
        ?>
            
        </div>
    </div>
</div>


<!-- end content -->

<!-- footer -->


<!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{
    header("Location: login.php");
}
?>