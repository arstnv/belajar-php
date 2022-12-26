<?php

if(isset($_GET['p'])) {

    if ($_GET['p'] == 'tampil') {
    
        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['password'];
    
    } else if ($_GET['p'] == "pesan") {

        echo "Halo apa kabar? ".$_POST['nama'];
        echo "<br/>";
        echo "Password anda adalah ".$_POST['password'];
        
    } else if ($_GET['p'] == "aman") {
        
        if (!empty( $_POST['nama'])) {
            echo $_POST['nama'];
        } else {
            echo "Nama belum dimasukkan"
        }
        
        if (!empty( $_POST['password'])) {
            echo $_POST['password'];
        } else {
            echo "Password masih kosong"
        }
        
    } else if ($_GET['p'] == "gambar") {

    } 

} else {
    echo "Anda tidak boleh mengakses halaman ini"
}


?>
