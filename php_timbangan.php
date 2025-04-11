<html>
<title> PHP-Timbangan </title>

<body>
<form action = "PHP_timbangan.php" method = "POST">  // ralat dalam penulisan nama fail
Masukkan berat anda <input type = "TEXT" name = "nilai" value = "0" />  // ralat pada penamaan pemboleh ubah
<input type = "submit" value = "Hasil"/>
<form>

<?PHP
if (POST [nilai] >= 80)  // struktur syarat tidak betul
{
    $result = "Anda Berat"
}
ELSE
{
    $result = "Berat Anda Adalah Normal";
}
?>

Mesej Untuk Anda :        // baris ini tidak diakhiri dengan struktur yang betul
<?PHP
ECHO "$result";
?>
</body>
</html>
