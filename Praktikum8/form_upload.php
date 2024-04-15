<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
        <!-- Pembuatan thumbnail gambar dengan ukuran 200 -->
        <script>
            function previewImage(event) {
                var file = event.target.files[0];
                var read = new FileReader();
                read.onload = function(e) {
                    var previewImage = document.getElementById("preview");
                    previewImage.style.display = "block";
                    previewImage.src = e.target.result;

                    // Mengatur lebar gambar menjadi 200px dan tinggi disesuaikan secara otomatis
                    previewImage.style.width = "200px";
                    previewImage.style.height = "auto";
                }
                read.readAsDataURL(file);
            }
        </script>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload" onchange="previewImage(event)">
            <img id="preview" src="#" alt="Preview" style="display: none;"> <!-- gambar akan ditampilkan di sini -->
            <input type="submit" value="Upload File" name="submit">
        </form>
    </body>
</html>
