<?php
$szam1 = rand(1, 100);
$szam2 = rand(1, 100);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="SEO.php" method="GET">
        Név:                <input type="text" name="name" >         <br>
        Születésiév:        <input type="date" name="szé">       <br>
        E-mail:             <input type="text" name="e-male">         <br>
        Telefonszáma:       <input type="number" name="tsz">       <br>
        Munkahelye neve:    <input type="text" name="Mhn">         <br>
        Munkahelye címe:    <input type="text" name="Mhc">         <br>
        Munkaköre:          <input type="text" name="Mk">         <br>
        Beosztása:          <input type="text" name="Beosztás">         <br>
        Arcképe:            <input type="file" name="kép">         <br>
        <br>
        <br>
        CAPTCHA test:   <?php echo $szam1 ?> + <?php echo $szam2 ?>  : <input type="number" name="CAPTCHA">
        <br>
    <input type="submit">
    </form>
</body>
</html>
<?php
$CAPTCHA = $_GET["CAPTCHA"];
if  (($szam1 + $szam2) == $CAPTCHA){
    $név = $_GET["name"];
    $születési_ev = $_GET["szé"];
    $e_male = $_GET["e-male"];
    $Telefonszam = $_GET["tsz"];
    $Munkahely_nev = $_GET["Mhn"];
    $Munkahely_cím = $_GET["Mhc"];
    $Munkakör = $_GET["Mk"];
    $Beosztás = $_GET["Beosztás"];
    $Arckép = $_GET["kép"];
}   else    {
 
}

?>