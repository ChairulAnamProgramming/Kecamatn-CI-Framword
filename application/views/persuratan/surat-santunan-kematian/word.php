<?php
// membaca data dari form
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("assets/surat/surat_santunan_kematian.rtf");
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

$year = date('Y');

$document = str_replace("data_id", $ssk['id'], $document);
$document = str_replace("data_nama", $ssk['nama'], $document);
$document = str_replace("data_nik", $ssk['nik'], $document);
$document = str_replace("data_alamat", $ssk['alamat'], $document);
$document = str_replace("data_date", $date, $document);
$document = str_replace("data_Year", $year, $document);
$document = str_replace("data_NaMaCamaT", $camat['nama'], $document);
$document = str_replace("data_NIpC", $camat['nip'], $document);
$document = str_replace("data_JaBatAn", $camat['jabatan'], $document);

foreach ($kades as $key) {
  $document = str_replace("data_kades", $kades['nama_kades'], $document);
}

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat_keterangan_usaha_" . $ssk['nik'] . ".doc");
header("Content-length: ".strlen($document));
echo $document;

?>
