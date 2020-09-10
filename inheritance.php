<?php
class produk{
	public $namabarang,
			$merk,
			$harga,
			$ukuranLayar,
			$kapasitas;

	public function getcetak(){
		return "(Rp $this->harga)";
	}
	public function __construct($namabarang="nama barang",$merk="merk",$harga=0,$ukuranLayar="ukuranLayar",$kapasitas="kapasitas"){
		$this->namabarang = $namabarang;
		$this->merk = $merk;
		$this->harga = $harga;
		$this->ukuranLayar = $ukuranLayar;
		$this->kapasitas = $kapasitas;
	}
	public function cetakinfo(){
		$str="{$this->namabarang},{$this->getcetak()}";
		return $str;
	}

}

class handphone extends produk{
	public function cetakinfo(){
		$str="Nama barang: {$this->namabarang},{$this->getcetak()} | Ukuran Layar: {$this->ukuranLayar}";
		return $str;
	}
}
class Powerbank extends produk{
	public function cetakinfo(){
		$str="Nama barang: {$this->namabarang},{$this->getcetak()} | kapasitas: {$this->kapasitas}";
		return $str;

$produk1 = new handphone("Hand phone","Samsung","3.500.000","6,2 inci","-");
$produk2 = new powerbank("Powerbank","ROBOT","500.000","-","10000 mah");

echo $produk1->cetakinfo();
echo "<br>";
echo $produk2->cetakinfo();
echo "<br>";

?>