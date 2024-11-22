<?php
// Menghubungkan ke database (ganti dengan informasi koneksi yang sesuai)
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_rentalmobil";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirimkan melalui metode POST
    $nama_pemesan = $_POST["nama_pemesan"];
    $no_hp = $_POST["no_hp"];
    $tanggal = $_POST["tanggal"];
    $durasi_sewa = $_POST["durasi_sewa"];
    $jenis_mobil = $_POST["jenisMobil"];
    $supir = $_POST['supir'];
    $harga_sewa = $_POST["harga_sewa"];
    $jumlah_tagihan = $_POST["jml_tagihan"];
    
    //cek jika ceklist supir tidak terceklist maka perlu di state hasilnya "Tidak"
    if($supir!="Ya"){
        $supir="Tidak";
    }

    //mengambil jenis mobil dengan cara memecah hasil value select "250000,Avanza" menjadi sebuah array.
    $hasil = explode(",",$jenis_mobil);

    //mengambil array ke 1 dari variabel $hasil
    $jenis_mobil = $hasil[1];

    // Simpan data ke dalam database
    $sql = "INSERT INTO pesanan (nama_pemesan, no_hp, tanggal, durasi_sewa, jenis_mobil,supir, harga_sewa, jumlah_tagihan)
    VALUES ('$nama_pemesan', '$no_hp', '$tanggal', '$durasi_sewa', '$jenis_mobil','$supir','$harga_sewa', '$jumlah_tagihan')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data pemesanan berhasil disimpan.";
        header("Location: daftar_pesanan.php");
        exit();

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Tutup koneksi
    $conn->close();
}
?>
