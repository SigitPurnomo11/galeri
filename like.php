<?php
    include "koneksi.php";
    session_start();

    if(isset($_SESSION['userid'])){

        header("Location:index.php");
    }else{
        $fotoid=$_GET['$fotoid'];
        $userid=$_SESSION['userid'];

        $sql=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid' and userid='$userid'");

        if(mysqli_num_rows($sql)==1){
            header("Location:index.php");
        }else{
            $tanggallike=date("Y-m-d");
            $sql=mysqli_query($conn,"insert into likefoto values('','$fotoid','$userid','$tangallike')");
            header("Location:index.php");
        }
    }
?>