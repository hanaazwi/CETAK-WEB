<?php
$koneksi = new mysqli("localhost", "root", "", "data_pasien");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Sanitize the input to prevent SQL injection
$id = intval($_GET['id']);
$query = "SELECT * FROM pasien WHERE id = $id";
$result = $koneksi->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("Data pasien tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> 
    <title>CETAK GELANG</title>
    <style>
        @page {
        size: 29,2cm 1,9cm; /* Ukuran kertas 29cm x 2cm */
        margin: 0; /* Menghilangkan margin */
        }
        body {
        width: 29,2cm; /* Lebar konten */
        height: 1,9cm; /* Tinggi konten */
        margin: 1; /* Menghilangkan margin */
        display: flex;
        justify-content: left; /* Mengatur konten di tengah */
        align-items: flex-start ; /* Mengatur konten di tengah secara vertikal */
        font-family: Arial, Helvetica, sans-serif; /* Mengatur jenis font */
        font-size: 14px; /* Ukuran font */
        background-color: white; /* Warna latar belakang */
        }
    </style>
</head>
<body>
   <div class="container">
   <strong><?php echo htmlspecialchars($row['nama']); ?></strong> <br>
   <tr>
        <td><?php echo htmlspecialchars($row['id']);?> -</td>
        <td><?php echo htmlspecialchars($row['kelamin']); ?> -</td>
        <td><?php echo htmlspecialchars($row['nik']); ?></td>
   </tr><br>
   <tr>
        <td><?php echo date('d-m-Y', strtotime($row['tanggal_daftar']));?></td>
        <td><?php echo htmlspecialchars($row['usia']);?></td>
   </tr><br>
        <?php echo htmlspecialchars($row['alamat']); ?> 
        <!--<button onclick="window.print()"></button>-->
   </div>
</body>
</html>