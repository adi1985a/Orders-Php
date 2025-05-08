<!<!DOCTYPE HTML5>

<html lang="pl">

<head>

    <meta charset="UTF-8" />
    
    <title> Podsumowanie zamowienia </title>
</head>

<body>

<?php

$paczkow=$_POST['paczkow'];
$grzebieni=$_POST['grzebieni'];
$suma=0.99*$paczkow + 1.29*$grzebieni;
$password=$_POST['haslo'];

echo<<<END

<h2>Podsumowanie zamowienia</h2>

<table border="1" cellpadding="10" cellspacing="0">

<tr> 
    <td>Paczek (0.99 PLN/szt)</td> <td>$paczkow szt</td> 
</tr>

<tr> 
    <td>Grzebien (1.29 PLN/szt)</td> <td>$grzebieni szt</td> 
</tr>

<tr> 
    <td>SUMA</td> <td>$suma PLN</td> 
</tr>

</table>
<br/></br>
<a href="/php zelent/zelent 1/index.php">Powrot do strony glownej</a>
 

<br/><br/>
<img src="/php zelent/zelent 1/paczek.jpg" />;


END;

?>

</body>

</html>
