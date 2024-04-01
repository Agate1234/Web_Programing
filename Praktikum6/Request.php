<html>
<body>
        
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty"; //jika nama kosong, maka akan menampilkan pesan ini
    } else {
        echo $name; //mencetak pesan yang disubmit
    }
}
?>
    </body>
</html>