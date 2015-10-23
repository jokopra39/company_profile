<?php 
include "koneksi.php";

date_default_timezone_set("Asia/Jakarta");
	   		        $tgl = date('Y')."-".date('m')."-".date('d');
					$wkt = date('H:i:s'); 


$id = $_GET['ID'];
$nama = $_GET['SOP'];
//////BATAS FORM 1

$query = " DELETE from comp_pro where ID   = '$id'";

$simpan = mysql_query($query);
if(! $simpan )
{
   echo "<script language=\"Javascript\">\n";
   echo "window.alert('Data Supplier $nama gagal dihapus!');";
   echo "window.location.href = 'data.php'";
   echo "</script>";
}
else
{
   echo "<script language=\"Javascript\">\n";
   echo "window.alert('Data Supplier $nama telah dihapus!');";
   echo "window.location.href = 'data.php'";
   echo "</script>";
}
?>