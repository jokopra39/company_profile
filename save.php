<?php 
include "koneksi.php";

date_default_timezone_set("Asia/Jakarta");
	   		        $tgl = date('Y')."-".date('m')."-".date('d');
					$wkt = date('H:i:s'); 

$Y1 = $_POST['Y1'];
$Y2 = $_POST['Y2'];
$Y3 = $_POST['Y3'];
$Y4 = $_POST['Y4'];
$Y5 = $_POST['Y5'];
$Y6 = $_POST['Y6'];
$Y7 = $_POST['Y7'];
$Y8 = $_POST['Y8'];
$Y9 = $_POST['Y9'];
$Y10 = $_POST['Y10'];

$Y11 = $_POST['Y11'];
$Y12 = $_POST['Y12'];
$Y13 = $_POST['Y13'];
$Y14 = $_POST['Y14'];
$Y15 = $_POST['Y15'];
$Y16 = $_POST['Y16'];
$Y17 = $_POST['Y17'];
//////BATAS FORM 1

$query = " INSERT INTO comp_pro SET SUPPLIER1           = '$Y1',
                                    ADDRESS11           = '$Y2',
									ADDRESS21           = '$Y3',
									VILLAGE1            = '$Y4',
									CITY1               = '$Y5',
									COUNTRY1            = '$Y6',
									POSTAL_CODE1        = '$Y7',
									CONTACT_NAME1       = '$Y8',
									CONTACT_PHONE1      = '$Y9',
									CONTACT_FAX1        = '$Y10',
									
									EMAIL1              = '$Y11',
									OFFICIAL1           = '$Y12',
									OWNER1              = '$Y13',
									BUSINESS1           = '$Y14',
									EXPORT1             = '$Y15',
									IMPORT1             = '$Y16',
                                    YEAR_ESTABLISHED1   = '$Y17',
									
									NOW                 = '$tgl $wkt'";

$simpan = mysql_query($query);
if(! $simpan )
{
   echo "<script language=\"Javascript\">\n";
   echo "window.alert('Data gagal disimpan!');";
   echo "window.location.href = 'index.php'";
   echo "</script>";
}
else
{
   echo "<script language=\"Javascript\">\n";
   echo "window.alert('Data sukses disimpan!');";
   echo "window.location.href = 'index.php'";
   echo "</script>";
}
?>