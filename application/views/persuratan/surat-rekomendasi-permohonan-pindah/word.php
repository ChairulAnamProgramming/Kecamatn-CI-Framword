<?php
// membaca data dari form
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("assets/surat/surat_rekomendasi_permohonan_pindah.rtf");
// var_dump($document);exit;
// isi dokumen dinyatakan dalam bentuk string
// $nama="chairul Anam";
// $alamat="Desa Tambak Bitin";
// isi dokumen dinyatakan dalam bentuk string
$year = date('Y');
if (date('m') == '01') {
  $date = date('d') . ' Januari ' . date('Y');
} elseif (date('m') == '02') {
  $date = date('d') . ' Februari ' . date('Y');
} elseif (date('m') == '03') {
  $date = date('d') . ' Maret ' . date('Y');
} elseif (date('m') == '04') {
  $date = date('d') . ' April ' . date('Y');
} elseif (date('m') == '05') {
  $date = date('d') . ' Mei ' . date('Y');
} elseif (date('m') == '06') {
  $date = date('d') . ' Juni ' . date('Y');
} elseif (date('m') == '07') {
  $date = date('d') . ' Juli ' . date('Y');
} elseif (date('m') == '08') {
  $date = date('d') . ' Agustus ' . date('Y');
} elseif (date('m') == '09') {
  $date = date('d') . ' September ' . date('Y');
} elseif (date('m') == '10') {
  $date = date('d') . ' Oktober ' . date('Y');
} elseif (date('m') == '11') {
  $date = date('d') . ' November ' . date('Y');
} elseif (date('m') == '12') {
  $date = date('d') . ' Desember ' . date('Y');
}

if ($srpp['jk'] == "L") {
  $jk = "Laki-laki";
} else if ($srpp['jk'] == "P") {
  $jk = "Perempuan";
}



$document = str_replace("data_id", $srpp['id'], $document);
$document = str_replace("data_nama", $srpp['nama'], $document);
$document = str_replace("data_tmpt", $srpp['tmpt_lhr'], $document);
$document = str_replace("data_tgl", $srpp['tgl_lhr'], $document);
$document = str_replace("data_jk", $jk, $document);
$document = str_replace("data_kewarganegaraan",  $srpp['warganegara'], $document);
$document = str_replace("data_agama", $srpp['agama'], $document);
$document = str_replace("data_status", $srpp['status'], $document);
$document = str_replace("data_pekerjaan", $srpp['pekerjaan'], $document);
$document = str_replace("data_pendidikan", $srpp['pendidikan'], $document);
$document = str_replace("data_alamaTAsal", $srpp['alamat_asal'], $document);
$document = str_replace("data_nik", $srpp['nik'], $document);

$document = str_replace("data_ToAlamat", $srpp['to_alamat'], $document);
$document = str_replace("data_ToDesa", $srpp['to_desa'], $document);
$document = str_replace("data_ToKec", $srpp['to_kecamatan'], $document);
$document = str_replace("data_ToKab", $srpp['to_kab'], $document);
$document = str_replace("data_ToProv", $srpp['to_prov'], $document);
$document = str_replace("data_ToTgl", $srpp['to_tanggal'], $document);
$document = str_replace("data_alasan", $srpp['alasan_pindah'], $document);

$document = str_replace("Data_Nm", $srpp['nama_p1'], $document);
$document = str_replace("Data_kel", $srpp['jk_p1'], $document);
$document = str_replace("Data_UmUr", $srpp['umur_p1'], $document);
$document = str_replace("Data_St", $srpp['status_p1'], $document);
$document = str_replace("Data_PddK", $srpp['pendidikan_p1'], $document);
$document = str_replace("Data_nk", $srpp['nik_p1'], $document);

$document = str_replace("Data_nM2", $srpp['nama_p2'], $document);
$document = str_replace("Data_Kel", $srpp['jk_p2'], $document);
$document = str_replace("Data_uMuR", $srpp['umur_p2'], $document);
$document = str_replace("Data_sTat", $srpp['status_p2'], $document);
$document = str_replace("Data_pDDk", $srpp['pendidikan_p2'], $document);
$document = str_replace("Data_Nk", $srpp['nik_p2'], $document);

$document = str_replace("Data_NMa3", $srpp['nama_p3'], $document);
$document = str_replace("Data_kEL", $srpp['jk_p3'], $document);
$document = str_replace("Data_UMuR", $srpp['umur_p3'], $document);
$document = str_replace("Data_STaTuS", $srpp['status_p3'], $document);
$document = str_replace("Data_PDdk", $srpp['pendidikan_p3'], $document);
$document = str_replace("Data_nIK", $srpp['nik_p3'], $document);

$document = str_replace("Data_nmA4", $srpp['nama_p4'], $document);
$document = str_replace("Data_KEL4", $srpp['jk_p4'], $document);
$document = str_replace("data_MuUr", $srpp['umur_p4'], $document);
$document = str_replace("Data_stATUs", $srpp['status_p4'], $document);
$document = str_replace("Data_pdDK", $srpp['pendidikan_p4'], $document);
$document = str_replace("Data_NIk", $srpp['nik_p4'], $document);

$document = str_replace("Data_nAmmA5", $srpp['nama_p5'], $document);
$document = str_replace("Data_kLm5", $srpp['jk_p5'], $document);
$document = str_replace("Data_uMMr", $srpp['umur_p5'], $document);
$document = str_replace("Data_TusA", $srpp['status_p5'], $document);
$document = str_replace("Data_PEndk", $srpp['pendidikan_p5'], $document);
$document = str_replace("Data_INK", $srpp['nik_p5'], $document);

$document = str_replace("Data_NaMMa6", $srpp['nama_p6'], $document);
$document = str_replace("Data_KlAm", $srpp['jk_p6'], $document);
$document = str_replace("Data_umMR", $srpp['umur_p6'], $document);
$document = str_replace("Data_tATUs", $srpp['status_p6'], $document);
$document = str_replace("Data_DidK", $srpp['pendidikan_p6'], $document);
$document = str_replace("Data_KNi", $srpp['nik_p6'], $document);

$document = str_replace("data_CamatNm", $camat['nama'], $document);
$document = str_replace("data_NiP", $camat['nip'], $document);


$document = str_replace("data_year", $year, $document);
$document = str_replace("data_date", $date, $document);
foreach ($kades as $key) {
  $document = str_replace("data_kades", $kades['nama_kades'], $document);
}

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat_rekomendasi_permohonan_pindah" . $srpp['id'] . ".doc");
header("Content-length: " . strlen($document));
echo $document;
