<?php
session_start();

if($_SESSION['language']=='Arabic')
{
    echo $_SESSION['rtl']='rtl';
    $_SESSION['language']='ENGLISH';
    header('location:index.php');
}
else {
        echo $_SESSION['rtl']='';
    $_SESSION['language']='Arabic';
      header('location:index.php');
}


?>