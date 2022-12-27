<?php
//buat koneksi antara php dengan MySql
$con = mysqli_connect("localhost","root","","fakultas");

//cek koneksi dgn MySql
if(mysqli_connect_errno()){
    echo "Koneksi Gagal ". mysqli_connect_error();
} else {
    echo "Koneksi Berhasil";
}

//membaca dari data MySql
$query = "SELECT * FROM mahasiswa";

//tampilkan data, dgn menjalankan sql query
$result = mysqli_query($con,$query);
$mahasiswa = [];
if ($result) {
    //tampilkan data satu per satu
    while($row = mysqli_fetch_assoc($result)) {
        //echo "<br>".$row["nama"];
        $mahasiswa[] = $row;
    }   
    mysqli_free_result($result);
    //var_dump($row);
    //echo $row["nama"];
}

//tutup koneksi mysql
mysqli_close($con);

foreach($mahasiswa as $value){
    echo $value["nama"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiwa</h1>
    <table border="1" style="width: 100%;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <?php foreach($mahasiswa as $value): ?>
        <tr>
            <td><?php echo $value["nim"]; ?></td>
            <td><?php echo $value["nama"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>