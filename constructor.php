<?php
class produk{
	public $namabarang,
			$merk,
			$harga;
	public function getcetak(){
		return "$this->namabarang, $this->merk, $this->warna, $this->harga";
	}
	public function __construct($namabarang="nama barang",$merk="merk",$warna="warna",$harga=0){
		$this->namabarang = $namabarang;
		$this->merk = $merk;
		$this->warna = $warna;
		$this->harga= $harga;
	}

}

$produk1 = new produk("hand phone","samsung","hitam","3.500.000");

echo"nama barang1: " . $produk1->getcetak();
echo "<br>";

$produk2 = new produk("laptop","Asus","putih-hitam","5.000.000");

echo"nama barang2: " . $produk2->getcetak();
echo "<br>";

$produk3 = new produk("powerbank","ROBOT","biru","500.000");

echo "nama barang3:" . $produk3->getcetak();
echo "<br>";
?>