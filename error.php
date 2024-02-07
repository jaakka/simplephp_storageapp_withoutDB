<meta name="theme-color" content="gray"/>
<link rel="shortcut icon" href="favicon.ico"/>
<title>Varasto v12 by: jaakkagames</title>

<style>
body{background-color:gray;}
</style>

<?php $id= $_GET["id"]; ?>

<div style="height:10%; width:90%; position:absolute; top:5%; right:4%; background-color:red; border:solid black 10px; font-size:750%;" >Virhe! <?php echo "#".$id ?></div>
<div style="height:55%; width:90%; position:absolute; top:17%; right:4%; background-color:white; border:solid black 10px; font-size:500%;" >
<?php
if($id==0)
{
echo "Virheellinen virhe koodi!";
}
if($id==1)
{
echo "Kuva on liian iso! Palvelin on pian t&aumlynn&auml jos kaikki laittaisi noin isoja kuvia.";
}
if($id==2)
{
echo "Kuvan l&aumlhett&aumlmisess&auml tapahtui virhe. Yrit&auml uudestaan, ja jossei muuten onnistu niin ota ensiksi kameralla kuva ja valitset sitten galleriasta kuvan t&aumlnne.";
}
if($id==3)
{
echo "Emme vastaanota t&aumlm&aumln tiedostotyypin tiedostoja!";
}
if($id==4)
{
echo "Tuotetta ei ole olemassa!";
}
if($id>4)
{
echo "Virheellinen virhe koodi!";
}
?>

</div>

<form action="index.php" method="POST">
<button style="height:20%; width:90%; position:absolute; bottom:5%; right:5%; background-color:lime; border:solid black 10px; font-size:750%;" type="submit" name="submit">OK</button>
</form>

