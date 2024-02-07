<meta name="theme-color" content="gray"/>
<link rel="shortcut icon" href="favicon.ico"/>
<title>Varasto v12 by: jaakkagames</title>
<?php 
$id=$_POST["id"];
if (file_exists("item_names/".$id.".txt"))
{
header("Location: item.php?itemid=".$id);
}
else
{
header("Location: error.php?id=4");
}

?>