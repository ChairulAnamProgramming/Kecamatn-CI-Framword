<?php
// membaca data dari form
// memanggil dan membaca template dokumen yang telah kita buat
  $document = file_get_contents("assets/surat/surat_izin_nikah.rtf");
// var_dump($document);exit;
// isi dokumen dinyatakan dalam bentuk string
// $nama="chairul Anam";
// $alamat="Desa Tambak Bitin";
// isi dokumen dinyatakan dalam bentuk string
$year = date('Y');
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

if($skin['jk_suami'] == "L")
{
  $jk_suami = "Laki-laki";
}else if ($skin['jk_suami'] == "P"){
  $jk_suami = "Perempuan";
}

if($skin['jk_istri'] == "L")
{
  $jk_istri = "Laki-laki";
}else if ($skin['jk_istri'] == "P"){
  $jk_istri = "Perempuan";
}

if($skin['jk_ayah'] ==  "L")
{
  $jk_ayah = "Laki-laki";
}else if ($skin['jk_ayah'] ==  "P"){
  $jk_ayah = "Perempuan";
}

if($skin['jk_ibu'] == "L")
{
  $jk_ibu = "Laki-laki";
}else if ($skin['jk_ibu'] ==   "P"){
  $jk_ibu = "Perempuan";
}


$document = str_replace("data_id", $skin['id'], $document);
$document = str_replace("data_nama", $skin['nama_suami'], $document);
$document = str_replace("data_nik", $skin['nik_suami'], $document);
$document = str_replace("data_jk", $jk_suami, $document);
$document = str_replace("data_tmpt", $skin['tmpt_lhr_suami'], $document);
$document = str_replace("data_ttl", $skin['tgl_lhr_suami'], $document);
$document = str_replace("data_agama", $skin['agama_suami'], $document);
$document = str_replace("data_pekrjaan", $skin['pekerjaan_suami'], $document);
$document = str_replace("data_alamat", $skin['alamat_suami'], $document);

$document = str_replace("data_nAmaIstri", $skin['nama_istri'], $document);
$document = str_replace("data_fATherIstri", $skin['nama_ayah_istri'], $document);
$document = str_replace("data_niKIstri", $skin['nik_istri'], $document);
$document = str_replace("data_jkIstri", $jk_istri, $document);
$document = str_replace("data_tmPTIstri", $skin['tmpt_lhr_istri'], $document);
$document = str_replace("data_ttLIstri", $skin['tgl_lhr_istri'], $document);
$document = str_replace("data_agAMaIstri", $skin['agama_istri'], $document);
$document = str_replace("data_peKrjaanIstri", $skin['pekerjaan_istri'], $document);
$document = str_replace("data_AlaMatIstri", $skin['alamat_istri'], $document);

$document = str_replace("data_NamaFather", $skin['nama_ayah'], $document);
$document = str_replace("data_nIkFather", $skin['nik_ayah'], $document);
$document = str_replace("data_jkFather", $jk_ayah, $document);
$document = str_replace("data_tMptFather", $skin['tmpt_lhr_ayah'], $document);
$document = str_replace("data_TtlFather", $skin['tgl_lhr_ayah'], $document);
$document = str_replace("data_aGamaFather", $skin['agama_ayah'], $document);
$document = str_replace("data_pEkrjaanFather", $skin['pekerjaan_ayah'], $document);
$document = str_replace("data_aLAmatFather", $skin['alamat_ayah'], $document);

$document = str_replace("data_naMaMother", $skin['nama_ibu'], $document);
$document = str_replace("data_NikMother", $skin['nik_ibu'], $document);
$document = str_replace("data_jkMother", $jk_ibu, $document);
$document = str_replace("data_TmptMother", $skin['tmpt_lhr_ibu'], $document);
$document = str_replace("data_tTlMother", $skin['tgl_lhr_ibu'], $document);
$document = str_replace("data_AgamaMother", $skin['agama_ibu'], $document);
$document = str_replace("data_PekrjaanMother", $skin['pekerjaan_ibu'], $document);
$document = str_replace("data_alAmatMother", $skin['alamat_ibu'], $document);

$document = str_replace("data_desa", $skin['desa_suami'], $document);
$document = str_replace("data_kecamatan", $skin['kecamatan_suami'], $document);
$document = str_replace("data_kabupaten", $skin['kabupaten_suami'], $document);

$document = str_replace("data_sttsPria", $skin['stts_pria'], $document);
$document = str_replace("data_sTTsWanita", $skin['stts_wanita'], $document);
$document = str_replace("data_nAmaIsTriSuAmi", $skin['nama_istri_suami'], $document);

$document = str_replace("data_year", $year, $document);
$document = str_replace("data_date", $date, $document);
foreach ($kades as $key) {
  $document = str_replace("data_kades", $kades['nama_kades'], $document);
}

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat_izin_nikah_" . $skin['id'] . ".doc");
header("Content-length: ".strlen($document));
echo $document;

?>
