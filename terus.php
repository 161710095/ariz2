<?php 

include_once'this.php';

$sekolah1 = new sekolah();
$sekolah2 = new sekolah();
$sekolah3 = new sekolah();
$sekolah4 = new sekolah();
$sekolah5 = new sekolah();
echo "<h1><i>Daftar ALL STARS</h1>".'<br>'.'<b>=============================='.'<br>'.'<br>'.'<br>';

$sekolah1->set_nama('Syahrul');
$sekolah1->set_tl('Bandung');
$sekolah1->set_kelas('XI RPL 2');
$sekolah1->set_status('Misterius');

echo"Nama siswa,&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$sekolah1-> get_nama().'<br>'.'Tempat Lahirnya,&nbsp&nbsp&nbsp&nbsp'.$sekolah1-> get_tl().'<br>'.'Kelas,&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$sekolah1-> get_kelas().'<br>'.'Status,&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$sekolah1-> get_status().'<br>'.'=============================='.'<br>';

$sekolah2->set_nama('Angga');
$sekolah2->set_tl('Jakarta');
$sekolah2->set_kelas('XI RPL 1');
$sekolah2->set_status('Misterius');

echo"Nama siswa &nbsp&nbsp&nbsp&nbsp".$sekolah2-> get_nama().'<br>'.'Tempat Lahirnya &nbsp&nbsp&nbsp&nbsp'.$sekolah2-> get_tl().'<br>'.'Kelas &nbsp&nbsp&nbsp&nbsp'.$sekolah2-> get_kelas().'<br>'.'Status &nbsp&nbsp&nbsp&nbsp'.$sekolah2-> get_status().'<br>'.'=============================='.'<br>';

$sekolah3->set_nama('Ardiansyah');
$sekolah3->set_tl('Tasikmalaya');
$sekolah3->set_kelas('XII RPL 5');
$sekolah3->set_status('Misterius');

echo"Nama siswa &nbsp&nbsp&nbsp&nbsp".$sekolah3-> get_nama().'<br>'.'Tempat Lahirnya &nbsp&nbsp&nbsp&nbsp'.$sekolah3-> get_tl().'<br>'.'Kelas &nbsp&nbsp&nbsp&nbsp'.$sekolah3-> get_kelas().'<br>'.'Status &nbsp&nbsp&nbsp&nbsp'.$sekolah3-> get_status().'<br>'.'=============================='.'<br>';

$sekolah4->set_nama('Aris');
$sekolah4->set_tl('Jombang');
$sekolah4->set_kelas('XI RPL 3');
$sekolah4->set_status('Misterius');

echo"Nama siswa &nbsp&nbsp&nbsp&nbsp".$sekolah4-> get_nama().'<br>'.'Tempat Lahirnya &nbsp&nbsp&nbsp&nbsp'.$sekolah4-> get_tl().'<br>'.'Kelas &nbsp&nbsp&nbsp&nbsp'.$sekolah4-> get_kelas().'<br>'.'Status &nbsp&nbsp&nbsp&nbsp'.$sekolah4-> get_status().'<br>'.'=============================='.'<br>';

$sekolah5->set_nama('Rizki M');
$sekolah5->set_tl('Jawa');
$sekolah5->set_kelas('XI RPL 6');
$sekolah5->set_status('Misterius');

echo"Nama siswa &nbsp&nbsp&nbsp&nbsp".$sekolah5-> get_nama().'<br>'.'Tempat Lahirnya &nbsp&nbsp&nbsp&nbsp'.$sekolah5-> get_tl().'<br>'.'Kelas &nbsp&nbsp&nbsp&nbsp'.$sekolah5-> get_kelas().'<br>'.'Status &nbsp&nbsp&nbsp&nbsp'.$sekolah5-> get_status().'<br>'.'=============================='.'</i>'.'</b>'.'<br>';
 

?>