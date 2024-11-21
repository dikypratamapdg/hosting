<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATA</title>
</head>
<body>
    <H2 align="center">INPUT DATA BUKU</H2>
    <form action="simpan_lat.php" method="POST">
        <table border="1" align="center" cellpadding="7" cellspacing="0">
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>Nama Buku</td>
                <td><input type="text" name="nama_buku"></td>
            </tr>
            <tr>
                <td>Harga Buku</td>
                <td><input type="number" name="harga_buku"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>
                    <select name="tahun" id="tahun">
                        <option value="">-pilih tahun-</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                    <input type="radio" name="genre" value="fiksi">Fiksi
                    <input type="radio" name="genre" value="nonfiksi">Nonfiksi
                </td>
            </tr>
            <tr>
                <td>Jumlah Buku</td>
                <td><input type="number" name="jumlah_buku"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Save">
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>