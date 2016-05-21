<?php
session_start();
$varr=$_GET['id'];
urldecode($varr);
if($_SESSION['language']=='Arabic')
{
    echo $_SESSION['rtl']='rtl';
    $_SESSION['language']='ENGLISH';
header('Location:'.urldecode($varr) );
 }
else {
        echo $_SESSION['rtl']='';
    $_SESSION['language']='Arabic';
header('Location:'.urldecode($varr) );
 }


?>