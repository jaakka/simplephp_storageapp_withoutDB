<meta name="theme-color" content="gray"/>
<link rel="shortcut icon" href="favicon.ico"/>
<title>Varasto v12 by: jaakkagames</title>

<style>
body{background-color:gray;}
</style>

<?php $id= $_GET["id"]; ?>

<div style="height:10%; width:90%; position:absolute; top:5%; right:4%; background-color:red; border:solid black 10px; font-size:750%;" >Poistit tuotteen #<?php echo $id; ?></div>
<div style="height:55%; width:90%; position:absolute; top:17%; right:4%; background-color:white; border:solid black 10px; font-size:500%;" >
Tuote on nyt piilotettu. Voit joko unohtaa t&aumlm&aumln tuotteen tai korvata sen muokkaamalla tuotetta <?php echo $id; ?>.


</div>

<form action="index.php" method="POST">
<button style="height:20%; width:90%; position:absolute; bottom:5%; right:5%; background-color:lime; border:solid black 10px; font-size:750%;" type="submit" name="submit">OK</button>
</form>

