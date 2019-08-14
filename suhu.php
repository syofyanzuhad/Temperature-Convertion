<html>


<h3>Hitung Konverensi Suhu Celsius</h3>
<body> 
<p>Masukkan Suhu dalam Celsius</p>
<form action="suhu.php" method="post">
	<table>
		<tr>
  <td>Suhu dalam Celcius : </td><td><input type="text" name="suhu"><br></td>
</tr>
  <tr><td><input strtoupper type="submit" name="submit" value="Hitung"></td></tr>
</table>
</form>
 
<?php


if($_POST['suhu'] = $_POST['suhu']){
	
	$Reamur = ($_POST['suhu'] * 4 / 5)  ;
	$Fahrenheit = ($_POST['suhu'] * 9 / 5 + 32 ) ;
	$Kelvin = ($_POST['suhu'] += 273) ;
	
	
	echo "<br>";
	echo "Hasilnya adalah "."$Kelvin"." Derajat Kelvin<br>";
	echo "Hasilnya adalah "."$Fahrenheit". " Derajat Fahrenheit <br>";
	echo "Hasilnya adalah "."$Reamur"." Derajat Reamur";
}

?>
</body>
</html>



