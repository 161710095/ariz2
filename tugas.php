<?php

class milikmu{
	public $panjang,$lebar,$sisi,$alas,$tinggi;
	public function set_bangundatar($p,$l,$s,$a,$t){
       $this->panjang = $p;
       $this->lebar = $l;
       $this->sisi = $s;
       $this->alas = $a;
       $this->tinggi = $t;
       echo"<h3>Hasil Dari Bilangan 21 dan 3</h3>".'<br>';
       echo "====================================".'<br>'.'<br>';
   }
   public function get_persegipanjang(){
   	return $this->panjang * $this->lebar;

   }
    public function get_persegi(){
   	return $this->sisi * 4;
   }
 public function get_segitiga(){
   	return $this->alas+ $this->tinggi /2;
   }
}
$bangundatar1 = new milikmu;
$bangundatar1->set_bangundatar(10,5,5,20,10);
echo"<h4>1.Persegi Panjang</h4>";
echo"Rumus luas persegipanjang  P * L".'<br>';
echo"Nilai Panjang = 10".'<br>';
echo"Nilai Lebar  = 5".'<br>';
echo"<b>Luas dari persegipanjang tersebut adalah    :&nbsp&nbsp&nbsp".$bangundatar1->get_persegipanjang().'<br></b>';
echo "===========================".'<br>';
echo"<h4>1.Segitiga</h4>";
echo"Rumus luas Segitiga  Alas * Tinggi / 2".'<br>';
echo"Nilai Alas = 10".'<br>';
echo"Nilai Tinggi  = 5".'<br>';
echo"<b>Luas dari Segitiga tersebut adalah    :&nbsp&nbsp&nbsp".$bangundatar1->get_segitiga().'<br></b>';
echo "===========================".'<br>';
echo"<h4>1.Persegi</h4>";
echo"Rumus luas Persegi  S * S".'<br>';
echo"Nilai Sisi = 5".'<br>';
echo"<b>Luas dari Persegi tersebut adalah    :&nbsp&nbsp&nbsp".$bangundatar1->get_persegipanjang().'<br></b>';
echo "===========================".'<br>';
echo"Hasil persegi  :".$bangundatar1->get_persegi().'<br>';

?>