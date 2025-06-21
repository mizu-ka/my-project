<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <style>
body {
  background-color: pink;
}

</style>
</head>
<body>
    <a href="index.php">Kembali</a>
    <h1>Pemesanan</h1>
    <form action="beliaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan pembelian mawar</td>
                <td>:</td>
                <td><input type="number" name="mawar" id="" required> <br></td>
            </tr>
            <tr>
                <td>Masukkan pembelian melati</td>
                <td>:</td>
                <td><input type="number" name="melati" id="" required> <br></td>
            </tr>
            <tr>
                <td>Masukkan pembelian krisan</td>
                <td>:</td>
                <td><input type="number" name="krisan" id=""required></td>
            </tr>
            <tr>
                <td>Masukkan pembelian lily</td>
                <td>:</td>
                <td><input type="number" name="lily" id="" required></td>
            </tr>
            
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" value="Submit">Total</button></td>
            </tr>
        
        </table>
    </form>
</body>
</html>