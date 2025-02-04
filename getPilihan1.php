<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
include ("conn.php");
$q = intval($_GET['q']);
$sql="SELECT * FROM kapasitas_ruang WHERE id = '".$q."'";
$result = mysqli_query($konek,$sql);

while($row = mysqli_fetch_array($result)) {
  echo "<b style='color:Red;'>Harap Memperhatikan Kapasitas Max : " . $row['kapasitas'] . " Orang</b>";
}
echo "";
mysqli_close($konek);
?>
</body>
</html>