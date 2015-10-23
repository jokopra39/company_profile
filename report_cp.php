<?php
require_once('tcpdf/config/lang/eng.php');
require_once('tcpdf/tcpdf.php');
error_reporting (0);
// create new PDF document
 include "koneksi.php";
$bln = 7;
$thn = 2015; 
$jumHari = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);

//echo $jumHari.' hari dalam bulan juli tahun 2015';

  //$bulan = $_GET[BULAN];
 // $tahun = $_GET[TAHUN];
  // $sql = "SELECT * FROM tb_qc_baku WHERE status_reject = 'REJECT' AND bln = '$bulan' AND thn = '$tahun'";
   //$hasil = mysql_query($sql);
   
   $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
   //$pdf = new CUSTOMPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false); 

   // set font
   $pdf->SetFont('helvetica', '',6);
//Add a custom size  
//$width = 21.59; 
//$height = 27.94;
$width = 210; 
$height = 297;

$resolution= array($width, $height);
$pdf->AddPage('P', $resolution);
//////akhir add
   // add a page
  // $pdf->AddPage(); 
// landscape
  // $pdf->addPage(L);
   $pdf->SetAlpha(0.25);
   $bMargin = $pdf->getBreakMargin();
// get current auto-page-break mode
$auto_page_break = $pdf->getAutoPageBreak();
// disable auto-page-break
$pdf->SetAutoPageBreak(false, 0);
// set bacground image
//$img_file = K_PATH_IMAGES.'images/index.jpg';
//$pdf->Image($img_file, 0, 0, 300, 297, '', '', '', false, 300, '', false, false, 0);
//$pdf->Image('images/index.jpg', 0, 0, 300, 297, '', 'http://www.tcpdf.org', '', true, 72);
//$pdf->Image('images/okk1.jpg', 0, 0, 297, 210, '', false, 300, '', false, false, 0);
// restore auto-page-break status
$pdf->SetAutoPageBreak($auto_page_break, $bMargin);
// set the starting point for the page content
$pdf->setPageMark();
$pdf->SetAlpha(1);



 //////////////////awal program 
// $html = '<div align="center"><strong> erhrehrejhrewjrewj</strong></div>';
$id= $_GET[ID];
 $sql = "SELECT * FROM comp_pro WHERE ID = '$id'";
		 //echo $sql;
		 $hasil = mysql_query($sql);
		 $data = mysql_fetch_array($hasil);

$html = '
 <style>
	td.border_bottom {
  border-bottom:1pt solid black;
}
	</style>


<table border="1" cellpadding="2" cellspacing="0"><tr><td>
<table border="0" cellpadding="2">
         <tr >
           <td align="center" bgcolor="blue" style="color:black" colspan="4" ><strong>SUPPLIER PROFILE</strong></td>
         </tr>
         <tr > 
		 <td ><strong>Supplier name :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[SUPPLIER1].'</td>
		 </tr>
		
		 <tr> 
		 <td colspan="0"><strong>Address 1 :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[ADDRESS11].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Address 2 :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[ADDRESS21].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Village/ town/ district :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[VILLAGE1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>City/ province/ state :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[CITY1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Country :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[COUNTRY1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Postal code :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[POSTAL_CODE1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Contact name/ title :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[CONTACT_NAME1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Contact phone :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[CONTACT_PHONE1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Contact fax :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[CONTACT_FAX1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Email address :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[EMAIL1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Official website :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[OFFICIAL1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Owner name :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[OWNER1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Business licence no. :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[BUSINESS1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Export licence no. :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[EXPORT1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Import licence no. :</strong></td>
		 <td class="border_bottom" colspan="3">'.$data[IMPORT1].'</td>
		 </tr>
         <tr> 
		 <td colspan="0"><strong>Year established :</strong></td>
		 <td  colspan="3">'.$data[YEAR_ESTABLISHED1].'</td>
		 </tr>
         <tr> 
		 <td colspan="4" align="center" bgcolor="blue" style="color:black"><strong>PRODUCT/ MARKET PROFILE</strong></td>
		 </tr>
		 
		 <tr> 
		 <td colspan="0"><strong>Supplier name :</strong></td>
		 <td colspan="3">'.$data[SUPPLIER1].'</td>
		 </tr>
		 
		 <tr> 
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 </tr>
		 
		 <tr> 
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 </tr>
		 
		 <tr> 
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 <td>eghjnwetyhll.nbvjflikmbhnj</td>
		 </tr>
		 </table>
</td></tr></table>';
   
/////////////////////////akhir program   	 
 $pdf->writeHTML($html, false, true, false, true, '');
// $pdf->writeHTML($tbl, true, false, false, false, '');
   $pdf->Output('Ceklist Inspeksi harian.pdf', 'I');

?>
