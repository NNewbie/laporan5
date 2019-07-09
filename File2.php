<?php
$pilihan = $_POST['metode'];
if ($pilihan == "fibbonaci"){
    $nama = $_POST['username'];
    echo 'nama anda : '.$nama.'<br>';
    $a = 0;
    $b = 1;
    $c = 0;

    while($c<20){
        echo ' '.$c;
        $a = $b;
        $b = $c;
        $c = $a + $b;
    }
    }else if ($pilihan == 'Ganjil'){
    $nama = $_POST['username'];
    echo 'nama anda : '.$nama.'<br>';
    for($a = 1; $a <= 20; $a++){
        if ($a % 2 != 0){
            echo' '.$a;
        }
    }
}else if ($pilihan == 'Genap'){
    $nama = $_POST['username'];
    echo 'nama anda : '.$nama.'<br>';
    for($a = 1; $a <= 20; $a++){
        if ($a % 2 == 0){
            echo' '.$a;
        }
    }

?>