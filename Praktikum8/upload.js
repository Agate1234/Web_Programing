// PRAKTIKUM 3
// $(document).ready(function() {
    // Fungsi dijalankan ketika form dengan id upload-form dikirim atau submit
//     $('#upload-form').submit(function(e){
//         e.preventDefault(); 
        // Membuat objek FormData untuk mengumpukan data formulir
//         var formData = new FormData(this);
//         $.ajax({
//             type: 'POST',
//             url: 'upload_ajax.php',
//             data: formData,
//             cache: false,
//             contentType: false,
//             processData: false,
//             success: function(response){
//                 $('#status').html(response);
//             },
//             error: function() {
//                 $('#status').html('Terjadi kesalahan saat mengunggah file.')
//             }

//         })
//     })
// })

//PRAKTIKUM 4
$(document).ready(function() {
    $('#file').change(function(){ //Fungsi dijalankan ketika nilai input file dengan id file berubah
        if (this.files.length > 0) { // Memeriksa apakah ada file yang dipilih?
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);
    
        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            succes: function(response) {
                $('#status').html(response);
            },
            error: function(){
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});