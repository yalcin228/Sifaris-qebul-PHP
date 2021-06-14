<?php 
require("controller/config.php");
$ayar=$conn->prepare("SELECT * FROM ayarlar");
$ayar->execute();
$ayar_cek=$ayar->fetch(PDO::FETCH_ASSOC);

if(empty($_SESSION['mail'])){
    header("Location:login.php");
    exit;
}
else{

    $giris=$conn->prepare("SELECT * FROM istifadeci WHERE istifadeci_mail=?");
    $giris->execute(array($_SESSION['mail']));
    $netice=$giris->rowCount();

   
    if($netice == 0){
       header("Location:login.php");
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $ayar_cek['sayt_desc']; ?>">
    <meta name="keywords" content="<?php echo $ayar_cek['sayt_keyw']; ?>">
    <meta name="author" content="<?php echo $ayar_cek['sayt_author']; ?>">

    <title><?php echo $ayar_cek['sayt_title']; ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['ad']; ?></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Ana Səhife</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Bölmə
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Proyekt</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Proyekt:</h6>
                        <a class="collapse-item" href="insert_project.php">Əlave Et</a>
                        <a class="collapse-item" href="project.php">Düzənlə</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Sifarişlər</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sifarişləri:</h6>
                        <a class="collapse-item" href="insert_sifaris.php">Əlave Et</a>
                        <a class="collapse-item" href="sifaris.php">Düzənlə</a>
                        
                    </div>
                </div>
            </li>

         


         

            <li class="nav-item">
                <a class="nav-link" href="ayarlar.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Gənəl Ayarlar</span></a>
            </li>


           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                  

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                     
                     

                        <!-- Nav Item - Messages -->
                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['ad']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                              
                               
                                <a class="dropdown-item" href="ayarlar.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ayarlar
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"  href="cixis.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Çıxış
                                    
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
              
                <!-- /.container-fluid -->



            <!-- End of Main Content -->
