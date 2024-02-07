<meta name="theme-color" content="gray"/>
<link rel="shortcut icon" href="favicon.ico"/>
<title>Varasto v12 by: jaakkagames</title>

<style>
body{background-color:gray;}
</style>

<?php $id= $_GET["item"]; $place= $_GET["place"];  ?>
<div style="height:25%; width:90%; position:absolute; top:2%; right:5%; background-color:white; border:solid black 10px; font-size:550%;" >Liimaa alla olevan mukainen tarra tuotteeseen</div>
<div style="height:13%; width:90%; position:absolute; top:30%; right:5%; background-color:yellow; border:solid black 10px; font-size:750%;" ><center><?php echo $id; ?><center></div>
<div style="height:25%; width:90%; position:absolute; top:46%; right:5%; background-color:white; border:solid black 10px; font-size:500%;" >Sitten voit vieda tuotteen varastopaikkaan <?php echo $place; ?></div>

<form action="index.php" method="POST">
<button style="height:20%; width:90%; position:absolute; bottom:5%; right:5%; background-color:lime; border:solid black 10px; font-size:750%;" type="submit" name="submit">OK</button>
</form>

