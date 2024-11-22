<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  </head>
  <body>
    <!-- Jumbotron -->
    <div class="p-5 mb-0 bg-body-tertiary" style="background: url(img/gambar1.jpg)">
      <div class="container-fluid py-5">
        <h1 class="display-5 text-white fw-bold">Selamat Datang di Rental Mobil Jakarta</h1>
        <p class="col-md-8 text-white fs-4">Mari sempatkan liburanmu dengan sewa mobilku</p>
      </div>
    </div>
    <!-- End Jumbotron -->
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Pendaftaran Rental Mobil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Daftar Pesanan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End NavBar-->
    <div class="container">
        <h1 class="text-center my-4">Form Pengisian Data Rental Sewa Mobil</h1>
        <div class="row">
            <div class="col">
            <form method="POST" action="simpan_data.php">
            <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Nomor HP</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Tanggal pemesanan</label>
                        <div class="col-sm-8">
                           <input type="date" class = "form-control" name="tanggal" id="tanggal">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Durasi Sewa (Hari)</label>
                        <div class="col-sm-8">
                        <input type="number" name="durasi_sewa" class="form-control" id="durasi_sewa" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label class="col-sm-4 col-form-label">Jenis Mobil</label>
                        <div class="col-sm-8">
                            <select class="form-select" aria-label="Default select example" id = "jenisMobil" name="jenisMobil">
                                <option selected>Jenis Mobil</option>
                                <option value="250000,Avanza">Avanza (Rp.250k/hari)</option>
                                <option value="200000,Sigra">Sigra (Rp.200k/hari)</option>
                                <option value="400000,Innova">Innova (Rp.400k/hari)</option>
                                <option value="800000,Alphard">Alphard (Rp.800k/hari)</option>
                                <option value="200000,Brio">Brio (200k/hari)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jasa Supir</label>
                        <div class="col-sm-8">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id ="supir" name ="supir" value="Ya" >
                            <label class="form-check-label" for="flexCheckDefault">
                                Ya (10% dari harga sewa)
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Harga Sewa</label>
                        <div class="col-sm-8">
                        <input type="number" class="form-control" id="harga_sewa" name = "harga_sewa" required  readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Tagihan</label>
                        <div class="col-sm-8">
                        <input type="number" class="form-control" id="jml_tagihan" name="jml_tagihan" required  readonly>
                        </div>
                    </div>
                    <input class="btn btn-warning" id = "cek_tagihan" name ="cek_tagihan" type="button" value="Cek Tagihan">

                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col-md-5 text-center">
                <img src="img/slidecontent2.png" height="300">
            </div>
        </div>
    </div>
    <!--Footer-->
    <div class="mx-0 px-0">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 300">
        <path
          fill="#00cba9"
          fill-opacity="1"
          d="M0,224L34.3,208C68.6,192,137,160,206,176C274.3,192,343,256,411,250.7C480,245,549,171,617,149.3C685.7,128,754,160,823,181.3C891.4,203,960,213,1029,197.3C1097.1,181,1166,139,1234,106.7C1302.9,75,1371,53,1406,42.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
      <footer style="background-color: #00cba9" class="px-3 d-flex flex-wrap justify-content-between align-items-center py-3">
        <div class="col-md-4 d-flex align-items-center">
          <img src="img/logokominfo.png" height="30" class="px-3" alt="" />
          <span class="mb-3 mb-md-0 text-white">© 2024 Company, Inc</span>
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
      <!--END Footer-->
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
		$(document).ready(function() {
        $('#cek_tagihan').click(function(){ 
            //mengambil value dari input id jenis_mobil              
            var value = $('#jenisMobil').val(); //ini akan menghasilkan value seperti "250000,Avanza" maka erlu di split untuk mengambil harga mobil
            //split harga mobil dan jenis mobil, hasil ini akan menghasilkan variabel array result[0] untuk harga mobil dan result[1] untuk jenis mobil 
            var result = value.split(',');

            //mengambil harga mobil
            var harga_mobil = result[0];

            //mengambil value dari input id durasi_sewa
            var durasi_sewa = $('#durasi_sewa').val();

            //menghitung hargasewa mobil kemudian menyimpan ke variabel hargaSewa
            var hargaSewa = harga_mobil * durasi_sewa;

            //Menampilkan hasil perhitungan hargaSewa kedalam input dengan id harga_sewa
            $('#harga_sewa').val(hargaSewa);
            
            //menghitung jumlah tagihan
            if (document.getElementById("supir").checked) hargaSewa += (hargaSewa*0.1);
            
            //menampilkan jumlah tagihan ke dalam input dengan id jml_tagihan
            $('#jml_tagihan').val(hargaSewa);

        });
    });
  </script>
</body>
</html>
