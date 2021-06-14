<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>İstifadəçi Qeydiyyatı</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row d-flex justify-content-center align-items-center">
                    
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Yeni İstifadəçi Qeydiyyatı!</h1>
                            </div>
                            <form class="user" action="controller/controller.php" method='post'>
                                <div class="form-group ">
                                 <input type="text" name="stifadeci_ad" class="form-control form-control-user" id="exampleFirstName" placeholder="Adınız...">   
                                </div>
                                <div class="form-group">
                                    <input type="email"  name="stifadeci_mail" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address...">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="stifadeci_parol" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Parol">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password"  name="stifadeci_parol2" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Təkrar parol">
                                    </div>
                                    <small style="margin-left:23px;margin-top:10px;">Təkrar parol istəməyimizin məqsədi sifrənizin doğruluğunu müəyyənləşdirmək üçündür.</small>
                                </div>
                                <button type="submit" name="qeydiyyat" class="btn btn-primary btn-user btn-block">Qeydiyyatdan Keç</button>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                        <a class="small" href="login.php">Login səhifəsi !</a>
                                    </div>
                            <?php
                                 extract($_GET);
                                 if(isset($register)){
                                     if($register == "yes"){?>
                                          <div class="alert alert-success">Tebrikler.Qeydiyyat işləmi müfəvvəqiyyətlə sonladı.Anasəhifəyə yönləndirilirsiz.</div>
                                        <script>
                                            setInterval(() => {
                                                window.location.href="index.php";
                                            }, 2000);
                                        </script>
                                   <?php }
                                     else if($register == "bos"){ 
                                         echo '<div class="alert alert-warning">Xeberdarliq.Xanalari bos buraxmaq olmaz.</div>';
                                     }
                                     else if($register == "xeta"){ 
                                        echo '<div class="alert alert-warning">Xeberdarliq.Şifrələr eyni deyil.Şifrələrin eyniliyinə diqqət yetirin. </div>';
                                    }
                                     else if($register == "no"){
                                         echo '<div class="alert alert-danger">Xeta.Bu Maillə artıq qeydiyyat olunub.Başqa mail adresiyle qeydiyyat olun.</div>';
                                         
                                     }
                                 }
                                 else{
                                     echo "";
                                 }
                            ?>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>