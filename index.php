<?php
$koneksi = new mysqli("localhost", "root", "", "data_pasien");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
    $query = "SELECT * FROM pasien WHERE nama LIKE '%$cari%'";
} else {
    $query = "SELECT * FROM pasien";
}

$result = $koneksi->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="Kompatibel dengan X-UA" content="ie=edge"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
  <title>Sinar Roda Utama - Surabaya</title> 
</head>

<body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonim"></script>   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonim"></script> <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384   -wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonim">
</script>

<main class="container">
 <div class="bg-body-tertiary p-1 rounded">
        <h3>RS.BAPTIS - BATU</h3>
        <p class="lead">Print gelang identitas PDC dengan memasukan nama :</p>
        <div><form class="d-flex" role="search">
            <!--<form method="POST">-->
        <input class="form-control me-2" type="search" placeholder="Cari Pasien..." aria-label="Cari" data-live-search="true">
        <button class="btn btn-outline-success" type="submit">Cari</button>
            <!--</form>-->
        </div>
<br>
    <div class="table-responsive">    
    <table class="table table-bordered table-striped table-hover text-center">
        <thead>    
            <tr>
            <!--ID--><th>NO.RM</th>
            <!--Nama--><th>Nama Pasien</th>
            <!--Umur--><th>Kelamin</th>
            <!--Alamat--><th>Alamat</th>
            <!--Tgl Daftar--><th>Tgl.Lahir</th>
            <!--nik--><th>NIK</th>
            <!--usia--><th>Usia</th>
            <!--Aksi--><th>Aksi</th>
            </tr>
        </thead>
        <?php while ($row = $result->fetch_assoc()): 
            ?>
            <tbody>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['kelamin']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo date('d-m-Y', strtotime($row['tanggal_daftar']));?></td>
            <td><?php echo $row['nik']; ?></td>
            <td><?php echo $row['usia']; ?></td>
            <td><button class="btn btn-primary" onclick="printRecord(<?php echo $row['id']; ?>)">Print</button></td>
            </tr>
            </tbody>
        <?php endwhile; ?>
    </table>
    </div>
 </div>
    <script>
        function printRecord(id) {
            window.open('print.php?id=' + id, '_blank');
        }
    </script>
</main>
</body>
<footer>
    <div class='text-center size-5px'>
    Sinar Roda Utama & RS. Baptis Batu<br>
    ©2025 
</div>
</footer>
</html>