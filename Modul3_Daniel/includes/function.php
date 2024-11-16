<?php

include("dbconnection.php");

// buatkan function addStudent()
function addStudent()
{
    // variabel global
    global $conn;

    // Silakan buat variabel di bawah dengan data yang diambil dari form
        $idnum = $_POST["id"];
        $name = $_POST["nama"];
        $nimid = $_POST["nim"];
        $major = $_POST["jurusan"];
        $angkatan = $_POST["angkatan"];
    
    // Periksa apakah NIM sudah ada
    $ret = mysqli_query($conn, "SELECT * FROM data_mahasiswa WHERE nim = $nimid");

    if (mysqli_num_rows($ret) == 0) {
        // Masukkan data ke tabel tb_student
        $query = "INSERT INTO data_mahasiswa (id, nama, nim, jurusan, angkatan) VALUES ('$idnum', '$name', '$nimid', '$major', $angkatan)";
        $result = mysqli_query($conn, $query);

        /**
         * Buatlah logika untuk Memeriksa hasil dari operasi penambahan data mahasiswa.
         * 
         * Jika operasi berhasil, menampilkan pesan bahwa mahasiswa telah ditambahkan
         * dan mengarahkan pengguna ke halaman 'add-students.php'.
         * Jika operasi gagal, menampilkan pesan kesalahan.
         * Jika NIM sudah ada, menampilkan pesan bahwa NIM sudah ada.
         */

         if (mysqli_affected_rows($conn) > 0) {
            header("Location: add-student.php");
        } else {
            echo "
            <script>
                alert('Data failed');
                document.location.href = add-student.php;
            </script>
            ";
            exit;
        }
        
    }
}

function editStudent($id) {
    global $conn;

    // Ambil input dari form dan simpan dalam variabel
        $idnum = $_POST["id"];
        $name = $_POST["nama"];
        $nimid = $_POST["nim"];
        $major = $_POST["jurusan"];
        $angkatan = $_POST["angkatan"];
    

    // Isi query dibawah untuk update data mahasiswa berdasarkan ID
    $query = "UPDATE data_mahasiswa SET
            nama='$name',
            nim='$nimid',
            jurusan='$major',
            angkatan='$angkatan',
            WHERE id=$idnum";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo '<script>alert("Student data has been updated.")</script>';
        echo "<script>window.location.href ='manage-students.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}


?>