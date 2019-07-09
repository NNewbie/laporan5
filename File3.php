<?php
if ($pilihan == 'Ganjil'){
    $nama = $_POST['username'];
    $pilihan = $_POST['metode'];
    echo 'nama anda : '.$nama.'<br>';
    for($a = 1; $a <= 10; $a++){
        if ($a % 2 != 0){
            echo' '.$a;
        }
    }
}
?>