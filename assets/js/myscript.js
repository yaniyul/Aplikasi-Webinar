const flashData = $('.flash-data').data('flashdata');

console.log(flashData);
if (flashData){
    Swal.fire (
        'Berhasil',
        '' + flashData,
        'success'
    );
}

$('.tombol-hapus').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Data Webinar akan dihapus',
        text: "Apakah anda yakin?",
        icon: 'warning',
        showCancelButton: true, 
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })

});

$('.tombol-hapus-user').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Data Pengguna akan dihapus',
        text: "Apakah anda yakin?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })

});

$('.tombol-hapus-mitra').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Data Mitra akan dihapus',
        text: "Apakah anda yakin?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })

});

$('.tombol-hapus-belmawa').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Data Belmawa akan dihapus',
        text: "Apakah anda yakin?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })

});

$('.tombol-hapus-komunitas').on('click', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Data kegiatan akan dihapus',
        text: "Apakah anda yakin?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })

});






