<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
include ("conn.php");
$q = intval($_GET['q']);
$sql="SELECT * FROM tb_kandidat WHERE id = '".$q."'";
$result = mysqli_query($konek,$sql);

while($row = mysqli_fetch_array($result)) {
  echo "<b style='color:DodgerBlue;'>Pilihan pertama Anda adalah : " . $row['nama_pegawai'] . "</b>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>