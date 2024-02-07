<meta name="theme-color" content="gray"/>
<link rel="shortcut icon" href="favicon.ico"/>
<title>Varasto v12 by: jaakkagames</title>
<style>
body{background-color:gray;}
</style>

<div style="left:5%; top:5%; position:absolute; width:90%; height:75%">
<?php
$idfile= fopen("data/lastid.txt","r");
$test= fgets($idfile);
fclose($idfile);
$total=$test-1;

for ($x = 0; $x <= $total; $x++) {
$id=$x;
$disable=0;
if (file_exists("item_place/".$id.".txt")){
$pfile= fopen("item_place/".$id.".txt","r");
$place= fgets($pfile);
fclose($pfile);
} else {$disable=1;}
if (file_exists("item_names/".$id.".txt")){
$nfile= fopen("item_names/".$id.".txt","r");
$itemname=fgets($nfile);
fclose($nfile);
} else {$disable=1;}
if (file_exists("item_desc/".$id.".txt")){
$dfile= fopen("item_desc/".$id.".txt","r");
$itemdesc= fgets($dfile);
fclose($dfile);
} else {$disable=1;}
if (file_exists("item_count/".$id.".txt")){
$cfile= fopen("item_count/".$id.".txt","r");
$itemcount= fgets($cfile);
fclose($cfile);
if($itemcount<1){$disable=1;}
} else {$disable=1;}

if($disable===0){
echo "
<div style='height:27%; width:98%; display:block; position:relative; background-color:lightgray; border:solid black 10px;' >
<img src='item_images/".$id.".jpg' style='position:absolute;  width:30%; height:90%; top:3%; left:1%; z-index:5; border:solid black 5px;' ></img>
<span style='position:absolute; top:3%; left:35%; font-size:300%'>".$itemname." <a href='item.php?itemid=".$id."' style='font-size:50%;'>avaa tuotesivu</a></span>

<div style='border:solid black 5px; height:59%; width:60%; position:absolute;  background-color:white; left:35%; top:23%; '>
<span style='position:absolute; top:4%; left:3%; font-size:200%'>".$itemdesc."</span>
</div>
<span style='position:absolute; bottom:2%; right:60%; font-size:200%; color:green;'>id".$id."</span>
<span style='position:absolute; bottom:2%; right:30%; font-size:200%; color:red;'>".$itemcount."kpl</span>
<span style='position:absolute; bottom:2%; right:1%; font-size:200%; color:blue;'>".$place."</span>
</div>
<br>";
}}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>

</div>

<form action="find.php" method="POST">
<button style="height:18%; width:47%; position:fixed; bottom:2%; right:2%; z-index:20; background-color:lime; border:solid black 10px; font-size:750%;" type="submit" name="submit">Etsi</button>
</form>
<form action="index.php" method="POST">
<button style="height:18%; width:47%; position:fixed; bottom:2%; left:2%;  z-index:20;  background-color:yellow; border:solid black 10px; font-size:750%;" type="submit" name="submit">Palaa</button>
</form>