<meta name="theme-color" content="gray"/>
<link rel="shortcut icon" href="favicon.ico"/>
<title>Varasto v12 by: jaakkagames</title>

<?php
$testi=$_POST["oldimage"];
$lastid=$_POST["itemid"];


if(isset($_POST['submit'])){
	
	$itemname= $_POST["itemname"];
	$itemdesc = $_POST["itemdesc"];
	$itemplace = $_POST["varastopaikka"];
	$itemcount = $_POST["maara"];

if($testi=="false"){
	
	$file = $_FILES['file'];

	$fileName = $_FILES['file']['name'];	
	$fileTmpname = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg');

if (in_array($fileActualExt , $allowed)){
	if ($fileError === 0) {
		if ($fileSize < 10000000){
			//$fileNameNew = uniqid('', true).".".$fileActualExt;
			$fileNameNew = $lastid.".".$fileActualExt;
			$fileDestination = 'item_images/'.$fileNameNew;
			move_uploaded_file($fileTmpname,$fileDestination);
			
			$myfile = fopen("data/lastid.txt", "w");
			$newdata=$lastid+1;
			fwrite($myfile,$newdata);
			fclose($myfile);
			
			$desc = fopen("item_desc/".$lastid.".txt", "w");
			fwrite($desc,$itemdesc);
			fclose($desc);

			$nam = fopen("item_names/".$lastid.".txt", "w");
			fwrite($nam,$itemname);
			fclose($nam);

			$vf = fopen("item_place/".$lastid.".txt", "w");
			fwrite($vf,$itemplace);
			fclose($vf);

			$cf = fopen("item_count/".$lastid.".txt", "w");
			fwrite($cf,$itemcount);
			fclose($cf);
	
			header("Location: success.php?item=".$lastid."&place=".$itemplace);
		} 
		else
		{
			//echo "File is too big!";
			header("Location: error.php?id=1");
		}
	}
	else
	{
		//echo "Error uploading file!";
		header("Location: error.php?id=2");
	}
}
else
{
	header("Location: error.php?id=3");
	//echo "Wrong type files!";
}
		
}

else
	{

			$desc = fopen("item_desc/".$lastid.".txt", "w");
			fwrite($desc,$itemdesc);
			fclose($desc);

			$nam = fopen("item_names/".$lastid.".txt", "w");
			fwrite($nam,$itemname);
			fclose($nam);

			$vf = fopen("item_place/".$lastid.".txt", "w");
			fwrite($vf,$itemplace);
			fclose($vf);

			$cf = fopen("item_count/".$lastid.".txt", "w");
			fwrite($cf,$itemcount);
			fclose($cf);
			
			header("Location: success.php?item=".$lastid."&place=".$itemplace);

	}
if($itemcount<1)
	{
		header("Location: deleted.php?id=".$lastid);
	}
}
else
{

header("Location: index.php");
}


?>

