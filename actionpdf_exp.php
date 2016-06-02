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
$pdf->SetFont('Arial','B',18);
$pdf->WriteHTML('<para><h1>Expense Document</h1><br></para><br><br>');
$pdf->SetFont('Arial','B',12);
$pdf->WriteHTML('<para><h1>Sandh No</h1><br></para><br><br>');

$pdf->SetFont('Arial','B',7); 
$htmlTable='<TABLE>
<TR>
<TD>Customer:</TD>
<TD>'.$_GET['vendor'].'</TD>
</TR>
<TR>
<TD>About:</TD>
<TD>'.$_GET['type'].'</TD>
</TR>
<TR>
<TD>Amount:</TD>
<TD>'.$_GET['amount'].'</TD>
</TR>
<TR>
<TD>Date:</TD>
<TD>'.$_GET['datee'].'</TD>
</TR>
<TR>
<TD>For Lease:</TD>
<TD>'.$_GET['id'].'</TD>
</TR>

</TABLE>';


$pdf->WriteHTML2("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',8);
$pdf->WriteHTML('<para><div><h3>Client Signing</h3></div></para><br><br>');
$pdf->WriteHTML('<para><div><h3>Recipients signature</h3></div></para><br><br>');
$pdf->Output(); 
?>