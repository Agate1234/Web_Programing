<!-- <!DOCTYPE html> PRAKTIKUM 3
<html lang="en">
<head>
    <title>Unggah File Dokumen</title>
</head>
<body>
    <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]" id="file" multiple accept="image/*"> 
        <input type="submit" name="submit" value="Unggah">
    </form>

    <div id="status"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>-->

<!-- PRAKTIKUM 4 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="upload.css"> <!-- Ada stylesheet eksternal upload.css-->
    <title>Unggah File Dokumen</title>
</head>
<body>
    <div class="upload-form-container"> <!-- Div dengan kelas upload-form-container untuk menjadikan satu form dibawahnya-->
        <h2>Unngah File Dokumen</h2>
        <form id="upload-form" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="file" id="file" class="file-input">
                <label for="file" class="file-label">Pilih File</label>
            </div>
            <button type="submit" name="submit" class="upload-button" id="upload-button" disabled> Unggah </button>
        </form>
        <div id="status" class="upload-status"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>