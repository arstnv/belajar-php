<?php

$nama = "Arista Novia";
/*
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
*/

/*
$no = 10;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo Sn." ".$nama."<br/>";
}
*/

/*
$no = 10;
$i = 0;

while ($i < $no) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>;
    $i++;
}
*/

/*
$no = 10;
$i = 0;

do {
    $n = $i +1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/

/*
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');

echo $data[5];
*/

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

//PERCABANGAN


if ($nama = "Arista") {
    echo $nama." adalah orang Sukabumi";
} else if ($nama == "Ari") {
    echo $nama." berasal dari Tangerang";
} else {
    echo $nama." darimana ya?";
}


switch($nama) {
    case "Arista";
        $pesan = $nama." adalah orang Sukabumi";
    break;
    case "Ari";
        $pesan = $nama." berasal dari Tangerang";
    break;
    default:
        $pesan = $nama." darimana ya?";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if($_POST['submit'] == "Submit") {

            switch($_POST['nama']) {
                case "Arista";
                    $pesan = $nama." adalah orang Sukabumi";
                break;
                case "Ari";
                    $pesan = $nama." berasal dari Tangerang";
                break;
                default:
                    $pesan = $nama." darimana ya?";
            }
            
            for ($i=0;$i,$_POST['no'];$i++) {
                echo $pesan."<br>";
            }
        } else {
            echo "Anda belum input nama dan jumlah"
        }

    ?>
</body>
</html>