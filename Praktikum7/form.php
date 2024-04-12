<!DOCTYPE html>
<html>
<head>
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <form method="post" action="proses_form.php"> <!-- Membuat form dengan method post dan action ke proses_form.php -->
        <label for="nama">Nama:</label> <!--Label yang berfungsi untuk menginputkan nama -->
        <input type="text" name="nama" id="nama" required><br><br> <!-- Input teks dengan id = nama dan name = nama  -->
        
        <label for="email">Email:</label> <!-- Label untuk menginputkan email-->
        <input type="email" name="email" id="email" required><br><br> <!-- Input email dengan name dan id 'email' --> 

        <input type="submit" name="submit" value="Submit"> <!-- Untuk submit -->
    </form>
</body>
</html>