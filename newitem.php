<meta name="theme-color" content="gray"/>
<link rel="shortcut icon" href="favicon.ico"/>
<title>Varasto v12 by: jaakkagames</title>
<style>
body{background-color:gray;}
#blah
{
background-image: url("uuskuva.png");
position:absolute;
border:solid black 10px;
width:50%;
height:40%;
right:3%;
top:2%;
}

#filebtn
{

border:solid black 10px;
background-color:red;
position:absolute;
width:51%;
height:41%;
right:3%;
top:2%;
z-index:20;
opacity:0;
}
</style>

<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src',e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

<img src="jgvarasto.png" style="border:solid black 10px; height:18%; width:40%; position:absolute; top:2%; left:2%;" />

<form action="upload.php" method="POST" enctype="multipart/form-data" >
<input id="filebtn" onchange="readURL(this);" type="file" name="file" required />
<img id="blah" src="uuskuva.png" alt="your image" />

<input type="number" name="maara" min="1" style="width:39%; height:10%; position:absolute; top:22%; left:5%; font-size:750%; border: solid black 10px;" placeholder="KPL" required>

<select name="varastopaikka" value="0" style="width:39%; height:10%; position:absolute; top:33%; left:5%; font-size:650%; border: solid black 10px;" placeholder="Paikka" required>
<option disabled selected value>Paikka</option>
<option value="PHA1">PHA1</option>
<option value="PHA2">PHA2</option>
<option value="PHA3">PHA3</option>
<option value="PHA4">PHA4</option>
<option value="PHB1">PHB1</option>
<option value="PHB2">PHB2</option>
<option value="PHB3">PHB3</option>
<option value="PHB4">PHB4</option>
<option value="PHC1">PHC1</option>
<option value="PHC2">PHC2</option>
<option value="PHC3">PHC3</option>
<option value="PHC4">PHC4</option>
<option value="PHD1">PHD1</option>
<option value="PHD2">PHD2</option>
<option value="PHD3">PHD3</option>
<option value="PHD4">PHD4</option>
<option value="PHE1">PHE1</option>
<option value="PHE2">PHE2</option>
<option value="PHE3">PHE3</option>
  <option value="PHE4">PHE4</option>
</select>

<input style="width:90%; height:8%; position:absolute; bottom:47%; left:5%; font-size:550%; border: solid black 10px;" type="itemname" name="itemname"  placeholder="Kirjoita tuotteen nimi" required />
<textarea style="width:90%; height:20%; position:absolute; bottom:25%; left:5%; font-size:550%; border: solid black 10px;"  type="itemdesc" name="itemdesc" placeholder="Kirjoita tietoja tuotteesta"></textarea>
<button style="height:20%; width:47%; position:absolute; bottom:2%; right:2%; background-color:lime; border:solid black 10px; font-size:750%;" type="submit" name="submit">L&aumlhet&auml</button>
</form>
<form action="index.php" method="POST">
<button style="height:20%; width:47%; position:absolute; bottom:2%; left:2%; background-color:red; border:solid black 10px; font-size:750%;" type="submit" name="submit">Peruuta</button>
</form>