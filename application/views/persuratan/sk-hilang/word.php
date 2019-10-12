<?php
// membaca data dari form
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("assets/surat/surat_keterangan_hilang.rtf");
// var_dump($document);exit;
// isi dokumen dinyatakan dalam bentuk string
// $nama="chairul Anam";
// $alamat="Desa Tambak Bitin";
// isi dokumen dinyatakan dalam bentuk string
if( date('m') == '01'){
$date= date('d') . ' Januari '. date('Y');
}elseif(date('m') == '02'){
  $date= date('d') . ' Februari '. date('Y');
}elseif(date('m') == '03'){
  $date= date('d') . ' Maret '. date('Y');
}elseif(date('m') == '04'){
  $date= date('d') . ' April '. date('Y');
}elseif(date('m') == '05'){
  $date= date('d') . ' Mei '. date('Y');
}elseif(date('m') == '06'){
  $date= date('d') . ' Juni '. date('Y');
}elseif(date('m') == '07'){
  $date= date('d') . ' Juli '. date('Y');
}elseif(date('m') == '08'){
  $date= date('d') . ' Agustus '. date('Y');
}elseif(date('m') == '09'){
  $date= date('d') . ' September '. date('Y');
}elseif(date('m') == '10'){
  $date= date('d') . ' Oktober '. date('Y');
}elseif(date('m') == '11'){
  $date= date('d') . ' November '. date('Y');
}elseif(date('m') == '12'){
  $date= date('d') . ' Desember '. date('Y');
}

 
if ($skh['jk'] == "L") {
   $jk = "Laki-laki";
}else if($skh['jk'] == "P")
{
    $jk = "Perempuan";
}

$date = date("d-m-Y", strtotime($skh['tgl_hilang']));

$document = str_replace("data_id", $skh['id'], $document);
$document = str_replace("data_nama", $skh['nama'], $document);
$document = str_replace("data_nik", $skh['nik'], $document);
$document = str_replace("data_jk", $jk, $document);
$document = str_replace("data_tmpt", $skh['tmpt_lhr'], $document);
$document = str_replace("data_tanggal", $skh['tgl_lhr'], $document);
$document = str_replace("data_agama", $skh['agama'], $document);
$document = str_replace("data_status", $skh['status'], $document);
$document = str_replace("data_pekerjaan", $skh['pekerjaan'], $document);
$document = str_replace("data_hilang", $skh['hilang'], $document);
$document = str_replace("data_th", $date, $document);
$document = str_replace("data_antara", $skh['antara'], $document);
$document = str_replace("data_alamat", $skh['alamat'], $document);
$document = str_replace("data_rt", $skh['rt'], $document);
$document = str_replace("data_rw", $skh['rw'], $document);
$document = str_replace("data_date", $date, $document);
foreach ($kades as $key) {
  $document = str_replace("data_kades", $kades['nama_kades'], $document);
}

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=Surat_keterangan_hilang_" . $skh['nik'] . ".doc");
header("Content-length: ".strlen($document));
echo $document;

?>
