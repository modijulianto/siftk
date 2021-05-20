$(function () {
    // ========================== ADMIN ==========================
    $(".tombolTambahAdmin").on("click", function () {
        $(".modal-title").html("Tambah Data Admin");
        $("#tombolModal").html("Tambah");
        $(".modal-body form").attr("action", "/Admin/save");
        // alert($('.modal-body form').attr('action'));

        // show form input
        $(".form-password").show();

        $("#id").val("");
        $("#nama").val("");
        $("#email").val("");
        $("#password").val("");
        $("#retypePassword").val("");
    });

    $('.tombolUbahAdmin').on('click', function () {
        $('.modal-title').html('Ubah Data Admin');
        $('#tombolModal').html('Ubah');
        $('.modal-body form').attr('action', '/Admin/save_update');


        // hide form input
        $('.form-password').hide();

        const id = $(this).data('id');

        $.ajax({
            url: '/Admin/update_admin',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id_user);
                $('#nama').val(data.nama_user);
                $('#email').val(data.email);
            }
        });
    });
    // ========================== END ADMIN ==========================


    // ========================== KATEGORI BERKAS ==========================
    $(".tombolTambahKategori").on("click", function () {
        $(".modal-title").html("Tambah Data Kategori Berkas");
        $("#tombolModal").html("Tambah");
        $(".modal-body form").attr("action", "/MasterData/save_kategori");
        // alert($('.modal-body form').attr('action'));

        $("#id").val("");
        $("#nama").val("");
    });

    $('.tombolUbahKategori').on('click', function () {
        $('.modal-title').html('Ubah Data Kategori Berkas');
        $('#tombolModal').html('Ubah');
        $('.modal-body form').attr('action', '/MasterData/save_update_kategori');

        const id = $(this).data('id');

        $.ajax({
            url: '/MasterData/update_kategori',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#id').val(data.id_kategori_berkas);
                $('#nama').val(data.nama_kategori_berkas);
            }
        });
    });
    // ========================== END KATEGORI BERKAS ==========================


    $('.tombol-hapus').on('click', function (e) {

        e.preventDefault();   //mematikan fungsi default
        const hapus = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak dapat mengembalikan data ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal!'
        }).then((result) => {
            if (result.value) {
                document.location.href = hapus;
                // console.log(hapus);
            }
        })
    });
})