<?php
class produk{
	public $namabarang = "Laptop",
			$merk = "Asus",
			$harga = "5.000.000";
	public function getcetak(){
		return "$this->namabarang, $this->merk, $this->harga";
	}
}

$produk1 = new produk();
$produk1->namabarang = "hand phone";
$produk1->merk = "samsung";
$produk1->harga = "3.500.000";
echo"nama barang1: " . $produk1->getcetak();

echo "<br>";

$produk2 = new produk();
$produk2->warna="hitam";
echo"nama barang2: " . $produk2->getcetak();
 
 echo "<br>";

 $produk3 = new produk();
 $produk3-> namabarang="powerbank";
 $produk3-> merk="ROBOT";
 $produk3-> harga="500.000";
 echo "nama barang3:" . $produk3->getcetak();
 ?>