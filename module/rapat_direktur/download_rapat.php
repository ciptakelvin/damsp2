<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
include("../../conn.php");
    if (isset($_GET['filename'])) {
    $filename    = $_GET['filename'];

    $back_dir    = "../../document/rapat/";
    $file = $back_dir.$_GET['filename'];
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Content-Type: application/pdf');
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: private');
            header('Pragma: private');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            
            exit;
        } 
       }
else{
echo "File does not exist.";
}
?>