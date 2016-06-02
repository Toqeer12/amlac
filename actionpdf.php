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
$pdf->WriteHTML('<para><h1>Document Bill</h1><br></para><br><br>');
$pdf->SetFont('Arial','B',12);
$pdf->WriteHTML('<para><h1>Sandh No</h1><br></para><br><br>');

$pdf->SetFont('Arial','B',7); 
$htmlTable='<TABLE>
<TR>
<TD>Name:</TD>
<TD>'.$_GET['rent'].'</TD>
</TR>
<TR>
<TD>Amount:</TD>
<TD>'.$_GET['amount'].'</TD>
</TR>
<TR>
<TD>Amount in Words:</TD>
<TD>'.$_GET['amountword'].'</TD>
</TR>
<TR>
<TD>Recving Date:</TD>
<TD>'.$_GET['recdate'].'</TD>
</TR>
<TR>
<TD>For Lease:</TD>
<TD>'.$_GET['flease'].'</TD>
</TR>
<TR>
<TD>For Property:</TD>
<TD>'.$_GET['fproperty'].'</TD>
</TR>
<TR>
<TD>For Unit:</TD>
<TD>'.$_GET['funit'].'</TD>
</TR>
</TABLE>';


$pdf->WriteHTML2("<br><br><br>$htmlTable");
$pdf->SetFont('Arial','B',8);
$pdf->WriteHTML('<para><div><h3>Client Signing</h3></div></para><br><br>');
$pdf->WriteHTML('<para><div><h3>Recepit Signing</h3></div></para><br><br>');
$pdf->Output(); 
?>