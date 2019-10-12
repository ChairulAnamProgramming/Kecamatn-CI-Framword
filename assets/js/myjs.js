const flashData = $('.flash-data').data('flashdata');
if (flashData) {
	Swal({
		title: 'Data',
		text: 'Berhasil ' + flashData,
		type: 'success'
	})
}

$('.tombol-hapus').on('click', function (event) {
	const href = $(this).attr('href');
	event.preventDefault();
	Swal({
		title: 'Apakah Anda Yakin',
		text: "Data Akan diHapus",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Yakin'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})

});


$('.tombol-word').on('click', function (e) {
	const href = $(this).attr('href');
	e.preventDefault();
	Swal({
		title: 'Apakah Anda Yakin',
		text: "Data akan di download",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#7ef7f7',
		confirmButtonText: 'Yakin'
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	})
});
