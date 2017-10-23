<?php

class matematika{
	public $bil1,$bil2;

	function set_penjumlahan($bilangan1, $bilangan2){
		$this->bil1 = $bilangan1;
		$this->bil2 = $bilangan2;
	}
	function get_penjumlahan(){
		return $this->bil1 +  $this->bil2;
	}
	function get_pengurangan(){
		return $this->bil1 - $this->bil2;
		}
	function get_perkalian(){
		return $this->bil1 *  $this->bil2;
			}
	function get_pembagian(){
		return $this->bil1 /  $this->bil2;
	}
	}
$penjumlahan1 = new matematika;
$penjumlahan1->set_penjumlahan(21,3);
echo"Hasil penjumlahan:".$penjumlahan1->get_penjumlahan().'<br>';
echo"Hasil pengurangan:".$penjumlahan1->get_pengurangan().'<br>';
echo"Hasil perkalian  :".$penjumlahan1->get_perkalian().'<br>';
echo"Hasil pembagian  :".$penjumlahan1->get_pembagian();


?>