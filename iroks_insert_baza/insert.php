
<?php


$con = mysqli_connect ('localhost','root');

if(!$con)
{
    echo 'Not Connect to server';
}

if (!mysqli_select_db($con,'dogodki'))
{
    echo 'Database not selected';
}

$Ime = $_POST['ime'];
$Opis = $_POST['opis'];
$Kraj = $_POST ['kraj_dogodka'];
$Cas = $_POST ['cas_dogodka'];




$sql = "INSERT INTO dogodek (Ime, Opis, Kraj, Cas) VALUES ('$Ime','$Opis', '$Kraj', '$Cas')";


if (!mysqli_query($con,$sql))
{
    echo 'Not inserted';
}
else
{
    echo 'Vaši podatki so se vnesli';
}


header('refresh:2; url=index.php');

?>


