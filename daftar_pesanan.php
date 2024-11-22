<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
   
    <style>
      #gambar {
        max-height: 500px;
        object-fit: cover;
        width: auto;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="p-5 mb-1 rounded-1" style="background: url(http://localhost/latjwd/img/gambar1.jpg)">
          <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Selamat Datang di Rental Mobil Jakarta</h1>
          <p class="col-md-8 fs-4">Mari sempatkan liburanmu dengan sewa mobilku</p>
          </div>
        </div>
      </div>
      <div class="row" style="display: contents">
        <nav class="navbar navbar-expand-lg bg-light mt-3">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link"  href="index.html">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="inputpesanan.php">Pendaftaran Rental Mobil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Daftar Pesanan</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <?php
    // Menghubungkan ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_rentalmobil";

    $conn = new mysqli($servername, $username, $password, $database);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Query untuk mengambil data dari tabel pesanan
    $sql = "SELECT * FROM pesanan";
    $result = $conn->query($sql); 

    ?>
    <h1 class="text-center m-4">Daftar Pemesanan Rental Mobil</h1>
    <div class="table-responsive col-md-9 mx-auto">
      <table class="table table-striped-sm">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama Pemesan</th>
                <th>No Hp/Telp</th>
                <th>Tanggal Pemesanan</th>
                <th>Durasi Sewa</th>
                <th>Jenis Mobil</th>
                <th>Supir</th>
                <th>Harga Sewa</th>
                <th>Jumlah Tagihan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=1; 
                while($daftar_pesanan=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>". $no ."</td> ";
                    echo "<td>". $daftar_pesanan['nama_pemesan'] ."</td>";
                    echo "<td>". $daftar_pesanan['no_hp'] ."</td>";
                    echo "<td>". $daftar_pesanan['tanggal'] ."</td>";
                    echo "<td>". $daftar_pesanan['durasi_sewa'] ."</td>";
                    echo "<td>". $daftar_pesanan['jenis_mobil'] ."</td>";
                    echo "<td>". $daftar_pesanan['supir'] ."</td>";
                    echo "<td>". $daftar_pesanan['harga_sewa'] ."</td>";
                    echo "<td>". $daftar_pesanan['jumlah_tagihan'] ."</td>";
                    echo "</tr>";
                    $no++;
                }
            ?>
        </tbody>
      </table>
    </div>
      <section class="mx-0 px-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220"><path fill="#00cba9" fill-opacity="1" d="M0,160L40,176C80,192,160,224,240,213.3C320,203,400,149,480,144C560,139,640,181,720,197.3C800,213,880,203,960,176C1040,149,1120,107,1200,85.3C1280,64,1360,64,1400,64L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  px-3" style="background-color: #00cba9;">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none">
              <img src="img/logokominfo.png" height="30">
            </a>
            <span class=" mb-0 text-white">© 2024 Company, Inc</span>
          </div>
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3">
              <a class="text-white" href="#">
                <i class="bi bi-twitter-x"></i>
              </a>
            </li>
            <li class="ms-3">
              <a class="text-white" href="#">
                <i class="bi bi-instagram"></i>
              </a>
            </li>
            <li class="ms-3">
              <a class="text-white" href="#">
                <i class="bi bi-facebook"></i>
              </a>
            </li>
          </ul>
        </footer>
      </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>  

</body>
</html>
