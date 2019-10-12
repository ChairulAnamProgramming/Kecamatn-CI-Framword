<?php
// membaca data dari form
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("assets/surat/surat_keterangan_lahir.rtf");
// var_dump($document);exit;
// isi dokumen dinyatakan dalam bentuk string
// $nama="chairul Anam";
// $alamat="Desa Tambak Bitin";
// isi dokumen dinyatakan dalam bentuk string
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


if ($skk['jk_anak'] == "L") {
    $jk = "Laki-laki";
} else if ($skk['jk_anak'] == "P") {
    $jk = "Perempuan";
}


$document = str_replace("data_id", $skk['id'], $document);
$document = str_replace("data_ibu", $skk['nama_ibu'], $document);
$document = str_replace("data_TmptIbu", $skk['tmpt_ibu'], $document);
$document = str_replace("data_tanggal", $skk['tgl_ibu'], $document);
$document = str_replace("data_pi", $skk['pekerjaan_ibu'], $document);
$document = str_replace("data_ai", $skk['alamat_ibu'], $document);
$document = str_replace("data_ayah", $skk['nama_ayah'], $document);
$document = str_replace("data_tMpTAyah", $skk['tmpt_ayah'], $document);
$document = str_replace("data_lahir", $skk['tgl_ayah'], $document);
$document = str_replace("data_pa", $skk['pekerjaan_ayah'], $document);
$document = str_replace("data_aa", $skk['alamat_ayah'], $document);
$document = str_replace("data_anak", $skk['nama_anak'], $document);
$document = str_replace("data_jk", $jk, $document);
$document = str_replace("data_tmPyaNaK", $skk['tmpt_anak'], $document);
$document = str_replace("data_TTL", $skk['tgl_anak'], $document);
$document = str_replace("data_day", $skk['hari'], $document);
$document = str_replace("data_jam", $skk['jam'], $document);
$document = str_replace("data_berat", $skk['berat'], $document);
$document = str_replace("data_panjang", $skk['panjang'], $document);
$document = str_replace("data_ke", $skk['anak_ke'], $document);
$document = str_replace("data_alamat", $skk['alamat_anak'], $document);
$document = str_replace("data_rt", $skk['rt'], $document);
$document = str_replace("data_rw", $skk['rw'], $document);
$document = str_replace("data_date", $date, $document);
foreach ($kades as $key) {
    $document = str_replace("data_kades", $camat['nama'], $document);
}

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat_keterangan_lahir_" . $skk['nama_anak'] . ".doc");
header("Content-length: " . strlen($document));
echo $document;
