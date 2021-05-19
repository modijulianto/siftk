$(function () {
    // AJAX ADMIN
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

    //UPDATE ADMIN
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