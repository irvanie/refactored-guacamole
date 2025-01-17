﻿<?php
session_start();
//koneksi ke database
include "koneksi.php";    

if (!isset($_SESSION['Admin']))
{
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventaris Karang Taruna</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />



</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">KATAR 14</a> 
            </div>
  <div style=" color: #000000;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li><a href="index.php"><i class="fa fa-dashboard fa-3x"></i>Gateway</a></li>
                    <li><a href="index.php?halaman=cekbarang"><i class="fa fa-dashboard fa-3x"></i>Cek Barang Pengembalian</a></li>
                    <li><a href="index.php?halaman=menu"><i class="fa fa-barcode fa-3x"></i>Barang Jual</a></li>
                    <li><a href="index.php?halaman=menu2"><i class="fa fa-barcode fa-3x"></i>Barang Peminjaman</a></li>
                    <li><a href="index.php?halaman=menu3"><i class="fa fa-barcode fa-3x"></i>Paket Jasa Karang Taruna</a></li>
                    <li><a href="index.php?halaman=pemesanan"><i class="fa fa-book fa-3x"></i>Rekap Pinjaman Barang</a></li>
                    <li><a href="index.php?halaman=pemesanan2"><i class="fa fa-book fa-3x"></i>Rekap Jual Barang</a></li>
                    <li><a href="index.php?halaman=pemesanan3"><i class="fa fa-book fa-3x"></i>Penyewaan Jasa</a></li>
                    <li><a href="index.php?halaman=rekapkeuangan"><i class="fa fa-book fa-3x"></i>Rekap Keuangan</a></li>
                    <li><a href="index.php?halaman=user_temp"><i class="fa fa-book fa-3x"></i>User Verifikasi</a></li>
                    <li><a href="index.php?halaman=userall"><i class="fa fa-book fa-3x"></i>Semua User</a></li>
                </li>                     
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="menu")
                    {
                        include 'menu.php';
                    }
                    elseif ($_GET['halaman']=="menu2")
                    {
                        include 'menu2.php';
                    }
                    elseif ($_GET['halaman']=="menu3")
                    {
                        include 'menu3.php';
                    }
                    elseif ($_GET['halaman']=="user_temp")
                    {
                        include 'user_temp.php';
                    }
                    elseif ($_GET['halaman']=="pemesanan")
                    {
                        include 'pemesanan.php';
                    }
                    elseif ($_GET['halaman']=="pemesanan2")
                    {
                        include 'pemesanan2.php';
                    }
                    elseif ($_GET['halaman']=="pemesanan3")
                    {
                        include 'pemesanan3.php';
                    }
                    else if ($_GET['halaman']=="hapusmenu")
                    {
                            include 'hapusmenu.php';
                    }
                    else if ($_GET['halaman']=="hapusmenu2")
                    {
                            include 'hapusmenu2.php';
                    }                    
                    else if ($_GET['halaman']=="hapusmenu3")
                    {
                            include 'hapusmenu3.php';
                    }
                    else if ($_GET['halaman']=="hapuspemesanan")
                    {
                            include 'hapuspemesanan.php';
                    }
                    else if ($_GET['halaman']=="hapuspemesanan2")
                    {
                            include 'hapuspemesanan2.php';
                    }
                    else if ($_GET['halaman']=="hapuspemesanan3")
                    {
                            include 'hapuspemesanan3.php';
                    }
                    elseif ($_GET['halaman']=="ubahmenu") 
                    {
                        include 'ubahmenu.php';
                    }
                    else if ($_GET['halaman']=="ubahmenu2")
                    {
                        include 'ubahmenu2.php';
                    } 
                    else if ($_GET['halaman']=="ubahmenu3")
                    {
                        include 'ubahmenu3.php';
                    } 
                    else if ($_GET['halaman']=="tambahmenu")
                    {
                        include 'tambahmenu.php';
                    } 
                    else if ($_GET['halaman']=="tambahmenu2")
                    {
                        include 'tambahmenu2.php';
                    }
                    else if ($_GET['halaman']=="tambahmenu3")
                    {
                        include 'tambahmenu3.php';
                    } 
                    else if ($_GET['halaman']=="cekbarang")
                    {
                        include 'cekbarang.php';
                    } 
                    else if ($_GET['halaman']=="verifkerusakan")
                    {
                        include 'verifkerusakan.php';
                    } 
                    else if ($_GET['halaman']=="detailuser")
                    {
                            include 'detailuser.php';
                    }
                    else if ($_GET['halaman']=="detailuser2")
                    {
                            include 'detailuser2.php';
                    }
                    else if ($_GET['halaman']=="accuser")
                    {
                            include 'accuser.php';
                    }
                    else if ($_GET['halaman']=="hapususer")
                    {
                            include 'hapususer.php';
                    }
                    else if ($_GET['halaman']=="rekapkeuangan")
                    {
                            include 'rekapkeuangan.php';
                    }
                    else if ($_GET['halaman']=="userall")
                    {
                            include 'userall.php';
                    }                }
                else 
                {
                    include "home.php";
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>

   
</body>
</html>