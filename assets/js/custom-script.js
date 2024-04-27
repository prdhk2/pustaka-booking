// start sidebar
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
// end sidebar

// event klik edit 
var editButtons = document.querySelectorAll('.btn.btn-primary');
editButtons.forEach(function(button) {
    button.addEventListener('click', function(event) {
        var row = event.target.closest('tr');
        var cells = row.querySelectorAll('td');
        var id = cells[0].innerText; // tambahkan ini
        var kode_mtk = cells[1].innerText;
        var nama_mtk = cells[2].innerText;
        var sks = cells[3].innerText;
        var dosen = cells[4].innerText;
        var kelas = cells[5].innerText;
        var jadwal = cells[6].innerText;

        // Isi nilai dari data yang diambil ke dalam input pada modal
        document.getElementById('id').value = id; // tambahkan ini
        document.getElementById('kodeMtk').value = kode_mtk;
        document.getElementById('namaMtk').value = nama_mtk;
        document.getElementById('sks').value = sks;
        document.getElementById('dosen').value = dosen;
        document.getElementById('kelas').value = kelas;
        document.getElementById('jadwal').value = jadwal;
    });
});


// end button edit

$(document).ready(function() {
    $('#editForm').submit(function(event) {
        event.preventDefault();

        var formData = $(this).serialize();

        // Kirim data ke endpoint dengan metode AJAX
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            success: function(response) {
                $('#modalEdit').modal('hide');
                // Tampilkan alert sukses
                showAlert('success', 'Data berhasil diperbarui.');
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Tampilkan alert kesalahan
                showAlert('danger', 'Terjadi kesalahan. Silakan coba lagi.');
            }
        });
    });

    // Fungsi untuk menampilkan alert
    function showAlert(type, message) {
        // Buat elemen alert
        var alert = $('<div class="alert alert-' + type + ' alert-dismissible fade show" role="alert">' +
                        '<strong>' + message + '</strong>' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                            '<span aria-hidden="true">&times;</span>' +
                        '</button>' +
                    '</div>');

        // Tambahkan alert ke dalam body
        $('body').append(alert);

        // Hapus alert setelah beberapa detik
        setTimeout(function() {
            alert.alert('close');
        }, 5000);
    }
});

// hapus start 

$(document).ready(function() {
    $('.delete-btn').click(function() {
        var id = $(this).data('id');
        $('#deleteId').val(id);
    });
});
// hapus end