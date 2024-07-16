<?php

class Produk {
    public $stok;
    public function pesanProduk()
    {
        $this->stok = floor($this->stok/3);
    }

    public function cekStok()
    {
        return " Sisa Stok saat ini : ".$this->stok."<br>";
    }
}

echo "Nama :  Muhammad Lintang Pamungkas <br>";
echo "Nim  :  210103028 <br>";
echo "-------------------------------------- <br>";
$produk01 = new Produk();
$produk01->stok = 100;

echo $produk01->cekStok();
$produk01->pesanProduk();

echo $produk01->cekStok();
$produk01->pesanProduk();

echo $produk01->cekStok();
$produk01->pesanProduk();

echo $produk01->cekStok();
