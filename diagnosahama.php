<html>
<body>
<table>
<form action="hasildiagnosahama.php" method="post">
<p> Jawablah Pertanyaan Berikut dengan Memilih ComboBox yang Tersedia</p>
<br>
<?php
include("koneksi.php");
//$i=1;
//$query=mysql_query("select count(*) as jum from gejala",$conn);
//$hasil=mysql_fetch_assoc($query);
//$jum=$hasil['jum'];
//echo $jum;
//for($i=1;$i<=$jum;$i++) {
 $gjla1=mysql_query("select * from gejalahama where noid=1",$conn);
 $tmpil1=mysql_fetch_array($gjla1);
 echo "<tr>";
 echo "<td>";
 echo "1";
 echo "</td>";
 echo "<td>";
 echo $tmpil1["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj1">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
<?php
 $gjla2=mysql_query("select * from gejalahama where noid=2",$conn);
 $tmpil2=mysql_fetch_array($gjla2);
 echo "<tr>";
 echo "<td>";
 echo "2";
 echo "</td>";
 echo "<td>";
 echo $tmpil2["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj2">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla3=mysql_query("select * from gejalahama where noid=3",$conn);
 $tmpil3=mysql_fetch_array($gjla3);
 echo "<tr>";
 echo "<td>";
 echo "3";
 echo "</td>";
 echo "<td>";
 echo $tmpil3["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj3">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla4=mysql_query("select * from gejalahama where noid=4",$conn);
 $tmpil4=mysql_fetch_array($gjla4);
 echo "<tr>";
 echo "<td>";
 echo "4";
 echo "</td>";
 echo "<td>";
 echo $tmpil4["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj4">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla5=mysql_query("select * from gejalahama where noid=5",$conn);
 $tmpil5=mysql_fetch_array($gjla5);
 echo "<tr>";
 echo "<td>";
 echo "5";
 echo "</td>";
 echo "<td>";
 echo $tmpil5["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj5">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla6=mysql_query("select * from gejalahama where noid=6",$conn);
 $tmpil6=mysql_fetch_array($gjla6);
 echo "<tr>";
 echo "<td>";
 echo "6";
 echo "</td>";
 echo "<td>";
 echo $tmpil6["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj6">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla7=mysql_query("select * from gejalahama where noid=7",$conn);
 $tmpil7=mysql_fetch_array($gjla7);
 echo "<tr>";
 echo "<td>";
 echo "7";
 echo "</td>";
 echo "<td>";
 echo $tmpil7["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj7">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla8=mysql_query("select * from gejalahama where noid=8",$conn);
 $tmpil8=mysql_fetch_array($gjla8);
 echo "<tr>";
 echo "<td>";
 echo "8";
 echo "</td>";
 echo "<td>";
 echo $tmpil8["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj8">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla9=mysql_query("select * from gejalahama where noid=9",$conn);
 $tmpil9=mysql_fetch_array($gjla9);
 echo "<tr>";
 echo "<td>";
 echo "9";
 echo "</td>";
 echo "<td>";
 echo $tmpil9["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj9">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla10=mysql_query("select * from gejalahama where noid=10",$conn);
 $tmpil10=mysql_fetch_array($gjla10);
 echo "<tr>";
 echo "<td>";
 echo "10";
 echo "</td>";
 echo "<td>";
 echo $tmpil10["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj10">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla11=mysql_query("select * from gejalahama where noid=11",$conn);
 $tmpil11=mysql_fetch_array($gjla11);
 echo "<tr>";
 echo "<td>";
 echo "11";
 echo "</td>";
 echo "<td>";
 echo $tmpil11["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj11">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla12=mysql_query("select * from gejalahama where noid=12",$conn);
 $tmpil12=mysql_fetch_array($gjla12);
 echo "<tr>";
 echo "<td>";
 echo "12";
 echo "</td>";
 echo "<td>";
 echo $tmpil12["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj12">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla13=mysql_query("select * from gejalahama where noid=13",$conn);
 $tmpil13=mysql_fetch_array($gjla13);
 echo "<tr>";
 echo "<td>";
 echo "13";
 echo "</td>";
 echo "<td>";
 echo $tmpil13["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj13">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla14=mysql_query("select * from gejalahama where noid=14",$conn);
 $tmpil14=mysql_fetch_array($gjla14);
 echo "<tr>";
 echo "<td>";
 echo "14";
 echo "</td>";
 echo "<td>";
 echo $tmpil14["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj14">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla15=mysql_query("select * from gejalahama where noid=15",$conn);
 $tmpil15=mysql_fetch_array($gjla15);
 echo "<tr>";
 echo "<td>";
 echo "15";
 echo "</td>";
 echo "<td>";
 echo $tmpil15["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj15">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
 <?php
 $gjla16=mysql_query("select * from gejalahama where noid=16",$conn);
 $tmpil16=mysql_fetch_array($gjla16);
 echo "<tr>";
 echo "<td>";
 echo "16";
 echo "</td>";
 echo "<td>";
 echo $tmpil16["pertanyaangejala"];
 echo "</td>"; 
 ?>
 <td>
<select name="gj16">
<option value="0">-pilih-</option>
<option value="0.2">Tidak tahu</option>
<option value="0.4">Mungkin</option>
<option value="0.6">Kemungkinan besar</option>
<option value="0.8">Hampir pasti</option>
<option value="1">Pasti</option>
</select>
</td>
 </tr>
<tr>
<td><input type="submit" value="Hitung" /></td>
</tr>
</form>
</table>
</body>
</html>