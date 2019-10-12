<?php
// membaca data dari form
// memanggil dan membaca template dokumen yang telah kita buat
$document = file_get_contents("assets/surat/surat_perintah_perjalanan_dinas.rtf");
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
$document = str_replace("data_id", $sppd['id'], $document);
$document = str_replace("data_nama", $sppd['nama_pegawai'], $document);
$document = str_replace("data_pangkat", $sppd['pangkat_golongan'], $document);
$document = str_replace("data_jabatan", $sppd['jabatan'], $document);
$document = str_replace("data_tingkat_penurut_peraturan_perjalanan", $sppd['tingkat_penurut_peraturan_perjalanan'], $document);
$document = str_replace("data_maksud_perjalanan_dinas", $sppd['maksud_perjalanan_dinas'], $document);
$document = str_replace("data_alat_angkut", $sppd['alat_angkut'], $document);
$document = str_replace("data_berangkat", $sppd['berangkat'], $document);
$document = str_replace("data_tujuan", $sppd['tujuan'], $document);
$document = str_replace("data_lama_perjalanan", $sppd['lama_perjalanan'], $document);
$document = str_replace("data_tanggal_perjalanan", $sppd['tanggal_perjalanan'], $document);
$document = str_replace("data_tanggal_kembali", $sppd['tanggal_kembali'], $document);
$document = str_replace("data_pengikut", $sppd['pengikut'], $document);
$document = str_replace("data_pembebanan", $sppd['pembebanan_anggaran'], $document);
$document = str_replace("data_instansi", $sppd['instansi'], $document);
$document = str_replace("data_mata_anggaran", $sppd['mata_anggaran'], $document);
$document = str_replace("data_keterangan_lain", $sppd['keterangan_lain'], $document);
$document = str_replace("data_no_sppd", $sppd['no_sppd'], $document);
$document = str_replace("data_tempat_kedudukan", $sppd['tempat_kedudukan'], $document);
$document = str_replace("data_rt", $sppd['rt'], $document);
$document = str_replace("data_rw", $sppd['rw'], $document);
$document = str_replace("data_date", $date, $document);
foreach ($kades as $key) {
    $document = str_replace("data_kades", $kades['nama_kades'], $document);
}

// header untuk membuka file output RTF dengan MS. Word
header("Content-type: application/msword");
header("Content-disposition: inline; filename=surat_perintah_perjalanan_dinas_" . $sppd['nama_pegawai'] . ".doc");
header("Content-length: " . strlen($document));
echo $document;
