 
<?php
session_start();
require('session.php');
require('pdf/WriteHTML.php');
require('connect.php');

		$select_query = "SELECT `images_path` FROM  `images_tbl` where cid=$id";
		$sql = mysql_query($select_query) or die(mysql_error());	
		$data_comm=mysql_fetch_assoc($sql);
		mysql_free_result($sql);
		$_SESSION['images_path'] = $data_comm['images_path'];

$pdf=new PDF_HTML();

$pdf->AliasNbPages();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
$pdf->Image($data_comm['images_path'],18,13,33);
$pdf->SetFont('Arial','B',14);
$pdf->WriteHTML('<para><h1>Document Bill</h1><br></para><br><br>');
$pdf->SetFont('Arial','B',12);
$pdf->WriteHTML('<para><h1>Sandh No</h1><br></para><br><br>');
$pdf->WriteHTML('<para><h3>On ' . $_GET['stdatee'] . 'The owner Identification Number '. $_GET['emiid'] .' and Mobile Number  '.$_GET['mobile'].' leased units</h3><br></para>');
$pdf->SetFont('Arial','B',12); 
$htmlTable='<TABLE dir=rtl>
<TR>
<TD>Property Name:</TD>
<TD>Unit Number:</TD>
<TD>Unit Type:</TD>
<TD>Annual Rent Price</TD>
</TR>
<TR>
<TD>'.$_GET['propname'].'</TD>
<TD>'.$_GET['unit'].'</TD>
<TD>'.$_GET['ptype'].'</TD>
<TD>'.$_GET['price'].'</TD>
</TR>

</TABLE>';


$pdf->WriteHTML2("<br><br><br>$htmlTable");


$pdf->WriteHTML('<para><h3>The Tenant Identification Number '. $_GET['temiid'] .' and Mobile Number  '.$_GET['tmob'].' duration of '.$_GET['fromm']. ' to '.$_GET['too'].'</h3><br></para>');

$pdf->SetFont('Arial','B',10);
$pdf->WriteHTML('<para><div><h3>Name and signature of the Editor</h3></div> </para><br><br>');
$pdf->WriteHTML('<para><div><h3>Name and signature of the owner</h3></div>  </para><br><br>');
$pdf->WriteHTML('<para><div><h3>Name and signature of the tenant</h3></div> </para><br><br>');
$pdf->WriteHTML('<para><div><h3>Name and signature of the witness first</h3></div> </para><br><br>');
$pdf->WriteHTML('<para><div><h3>Name and signature of the witness second</h3></div> </para><br><br>');
$pdf->Output(); 
?>
 