<?php
// membaca data dari form
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("assets/surat/surat_keterangan_tidak_mampu.rtf");
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

if ($sktm['jk'] == "L") {
    $jk = "Laki-laki";
 }else if($sktm['jk'] == "P")
 {
     $jk = "Perempuan";
 }

$document = str_replace("data_id", $sktm['id'], $document);
$document = str_replace("data_nama", $sktm['nama'], $document);
$document = str_replace("data_nik", $sktm['nik'], $document);
$document = str_replace("data_tmpt", $sktm['tmpt_lhr'], $document);
$document = str_replace("data_tanggal", $sktm['tgl_lhr'], $document);
$document = str_replace("data_pekerjaan", $sktm['pekerjaan'], $document);
$document = str_replace("data_jenis_kelamin", $jk, $document);
$document = str_replace("data_agama", $sktm['agama'], $document);
$document = str_replace("data_status", $sktm['status'], $document);
$document = str_replace("data_kewarganegaraan", $sktm['warganegara'], $document);
$document = str_replace("data_alamat", $sktm['alamat'], $document);
$document = str_replace("data_persyaratan", $sktm['pembuatan'], $document);
$document = str_replace("data_rt", $sktm['rt'], $document);
$document = str_replace("data_nRT", $sktm['nama_rt'], $document);
$document = str_replace("data_rw", $sktm['rw_romawi'], $document);
$document = str_replace("data_nRW", $sktm['nama_rw'], $document);
$document = str_replace("data_date", $date, $document);

foreach ($kades as $key) {
  $document = str_replace("data_kades", $kades['nama_kades'], $document);
}

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat_keterangan_tidak_mampu_" . $sktm['nik'] . ".doc");
header("Content-length: ".strlen($document));
echo $document;

?>
