<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
</head>
<body>
    <h1>contact form email</h1>
    <p>demo ini dibuat oleh Hamming99</p>
    <form action="kirim.php" method="POST">
        <p><input type="text" name="nama" placeholder="Nama Anda" size="30" required /></p>
        <p><input type="email" name="email" placeholder="Email Valid" size="30" required /></p>
        <p><input type="text" name="judul" placeholder="Subject pesan email" size="50" required /></p>
        <p><textarea name="pesan" placeholder="Pesan Anda" rows="7" cols="30" required /></p>
        <p><input type="submit" name="kirim" value="Kirim Pesan"/> <input type="reset" value="Hapus Pesan" /></p>
    </form>
</body>
</html>