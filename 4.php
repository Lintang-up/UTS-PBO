<?php 

class produk {
    public $stock;
    public $nilai = 0;

    public function pesanProduk(){
        $this->nilai -=3;
        return $this->stock += $this->nilai;
    }

    public function cekStock(){
        return "Sisa stok saat ini : ". $this->stock . "<br>";
    }
}


echo "Nama :  Muhammad Lintang Pamungkas <br>";
echo "Nim  :  210103028 <br>";
echo "-------------------------------------- <br>";
$produk01 = new produk();
$produk01->stock = 100;

echo $produk01->cekStock();


$produk01->pesanProduk();
echo $produk01->cekStock();

$produk01->pesanProduk();
echo $produk01->cekStock();

$produk01->pesanProduk();
echo $produk01->cekStock();


?>