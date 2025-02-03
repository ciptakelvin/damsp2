 <?php
    include "../../conn.php";
    
    //proses ganti password
    $username        = $_POST['user'];
    $password_lama    = $_POST['lama'];
    $password_baru    = $_POST['baru'];
    $konf_password    = $_POST['baru2'];
    //cek old password
    $query = "SELECT * FROM pegawai WHERE nip9='$username' AND pass='$password_lama'";
    $sql = mysqli_query($konek,$query);
    $hasil = mysqli_num_rows($sql);
	$data = mysqli_fetch_array($sql);
    if ($hasil <> 1) {
        ?>
            <script language="JavaScript">
            alert('Password lama tidak sesuai!, silahkan ulang kembali!');
            document.location='../../dams.php?module=profil#password';
            </script>
        <?php
    }
    //validasi input konfirm password
    else if (($_POST['password_baru']) != ($_POST['konf_password'])) {
            echo "<h3><font color=red><center>Ganti Password Gagal! Password dan Konfirm Password Harus Sama.</center></font></h3>";    
    }
    else {
    //update data
    $query = "UPDATE pegawai SET pass='$password_baru' WHERE nip9='$username'";
    $sql = mysqli_query ($konek,$query);
    //setelah berhasil update
    if ($sql) {
	?>
		<script language="JavaScript">
            alert('Password Berhasil Diubah');
            document.location='../../dams.php?module=profil#password';
        </script>
    <?php  
    } else {
	?>
		<script language="JavaScript">
            alert('Password GAGAL Diubah');
            document.location='../../dams.php?module=profil#password';
        </script>  
    <?php
	}
    }
	?>
    