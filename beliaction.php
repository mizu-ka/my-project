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
    <?php
    $jmlmawar=$_POST['mawar'];
    $jmlmelati=$_POST['melati'];
    $jmlkrisan=$_POST['krisan'];
    $jmllily=$_POST['lily'];
    $mawar=$jmlmawar * 10000;
    $melati=$jmlmelati * 8000;
    $krisan=$jmlkrisan * 7000;
    $lily=$jmllily * 15000;
    $jumlah = $mawar + $melati + $krisan + $lily
    ?>
    <a href="beli.php">Kembali</a>
    <h1 style = "text-align:center">Halo!!! Kita jumlah pembeliannya yaa ^_^</h1>
    <ul>
    <li><h4><?php echo "Mawar = ".$_POST['mawar']." x Rp.10.000 = Rp.".$mawar; ?></h4></li>
    <li><h4><?php echo "Melati = ".$_POST['melati']." x Rp.8.000 = Rp.".$melati; ?></h4></li>
    <li><h4><?php echo "Krisan = ".$_POST['krisan']." x Rp.7.000 = Rp.".$krisan; ?></h4></li>
    <li><h4><?php echo "Lily = ".$_POST['lily']." x Rp.15.000 = Rp.".$lily; ?></h4></li>
    <li><h4><?php echo "Jadi jumlahnya adalah Rp.".$jumlah; ?></h4></li>

    </ul>
</body>
</html>