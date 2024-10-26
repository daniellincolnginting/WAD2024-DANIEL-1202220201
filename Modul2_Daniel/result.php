<?php
//silahkan jawab disini (menangkap data dari form)
if ($_POST)
{
    $lama_olahraga = $_POST["exercise"];
}

//silahkan jawab disini (logika pola makan berdasarkan lama olahraga)
if (empty($lama_olahraga))
{
    $error = "Anda dianjurkan untuk tidak makan malam dan melakukan olahraga ringan di malam hari selama 5 menit.";
}
elseif ($lama_olahraga <= 0)
{
    $error = "Lama waktu olahraga tidak boleh dibawah nol.";
}
elseif ($lama_olahraga <= 15)
{
    $hasil = "Anda tidak boleh memakan nasi.";
}
else
{
    $hasil = "Anda boleh memakan nasi sebanyak 5 sendok makan.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pola Makan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3>Hasil Pola Makan Anda</h3>
            <p class="alert alert-info">
                <!-- silahkan jawab disini (menampilkan hasil logika berdasarkan kondisi olahraga) -->
                 <?php
                 if (!empty($hasil))
                 {
                    echo "<div class ='alert alert-success'>$hasil</div>";
                 }
                 ?>
                 <?php
                 if (!empty($error))
                 {
                    echo "<div class ='alert alert-danger'>$error</div>";
                 }
                 ?>
            </p>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
