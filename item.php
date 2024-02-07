<meta name="theme-color" content="gray"/>
<link rel="shortcut icon" href="favicon.ico"/>
<title>Varasto v12 by: jaakkagames</title>

<?php $id= $_GET["itemid"];   
$count="";
$desc="";
$name="";
$vp="";

if (file_exists("item_place/".$id.".txt")){
$pfile= fopen("item_place/".$id.".txt","r");
$vp= fgets($pfile);
fclose($pfile);
}

if (file_exists("item_names/".$id.".txt")){
$nfile= fopen("item_names/".$id.".txt","r");
$name= fgets($nfile);
fclose($nfile);
}

if (file_exists("item_desc/".$id.".txt")){
$dfile= fopen("item_desc/".$id.".txt","r");
$desc= fgets($dfile);
fclose($dfile);
}

if (file_exists("item_count/".$id.".txt")){
$cfile= fopen("item_count/".$id.".txt","r");
$count= fgets($cfile);
fclose($cfile);
}
?>
<style>
body{background-color:gray;}
</style>



<div style="height:70%; width:90%; position:absolute; top:2%; right:4%; background-color:lightgray; border:solid black 10px; font-size:550%;" >
<img style="border:solid black 10px;  width:47%; height:40%; position:absolute; top:3%; left:26.5%; " src="item_images/<?php echo $id; ?>.jpg" />

<span style=" font-size:70%; position:absolute; top:44.5%;  left:2%;"><?php echo $name; ?></span>

<div style=" height:38%; width:90%; position:absolute; top:53%; right:4%; background-color:white; border:solid black 10px; font-size:100%;" >
<span style=" font-size:60%; position:absolute; top:1%;  left:1%;"><?php echo $desc; ?></span>
</div>

<span style="position:absolute; top:91.5%;  left:2%; font-size:70%;"><?php echo $count; ?> Kpl</span>
<span style="position:absolute; top:91.5%;  right:2%; font-size:70%;"><?php echo $vp; ?></span>
</div>


<form action="index.php" method="POST">
<button style="height:20%; width:90%; position:absolute; bottom:5%; right:5%; background-color:yellow; border:solid black 10px; font-size:750%;" type="submit" name="submit">Sulje</button>
</form>

