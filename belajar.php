<?php 

$buku1  = 96500;
$buku2  = 1500000;
$jumlah = $buku1+$buku2;

if($jumlah > 100000){
    $diskon = 10*$jumlah/100;
    $total  = $jumlah-$diskon;
    echo "Harga Asal Rp. ". number_format($jumlah)."<br>";
    echo "Dapat Diskon Rp. ". number_format($diskon)."<br>";
    echo "Total Harga Rp.".number_format($total); 
}else{
    echo "Total Harga Rp.". number_format($jumlah);
}

    
?>