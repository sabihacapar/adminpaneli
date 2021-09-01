
 <?php require_once 'inc-functions.php'; 

require_once 'diller/tr.php';

if(isset($_GET['dildegistir'])){
    $dil=$_GET['dildegistir'];
    $_SESSION['anasayfadil']=$dil;
    header("Location:".$_SERVER['HTTP_REFERER']);
  }



  if (!@$_SESSION["lang"]){
        require("diller/tr.php");
    }else {
        require("diller/".$_SESSION["lang"].".php");
    }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

</head>

<body>
 <!-- menu kodlarını buradan taşıdığımız için taşıdığımız sayfanın uzantısını buraya veriyoruz -->
    <div id="wrapper">

      <?php require_once 'inc-menu.php';  

      //kaç tane  okunmamış mesaj olduğunu söyler  

      $okunmamış=$db->prepare("SELECT * FROM `iletisim` WHERE `okundu`=:okundu");
      $okunmamış->bindValue(":okundu",0,PDO::PARAM_INT);//iletişim sayfasında okunmamış mesajlar 0 okunmuş olanlar 1 olur
      //böylelikle eğer okunmamış mesaj varsa bunları yazdırır
      $okunmamış->execute();
      $cntMesaj=$okunmamış->rowCount();

      //kaç tane blog yazısı olduğunu söyler  
      $bloglar=$db->prepare("SELECT * FROM `blog`");
      $bloglar->execute();
      $cntBlog=$bloglar->rowCount();

      //kaç tane blog-details yazısı olduğunu söyler  
      $details=$db->prepare("SELECT * FROM `blog_details`");
      $details->execute();
      $cntDetails=$details->rowCount();


      //veritabanında kaç tane renk olduğunu gösterir
      $color=$db->prepare("SELECT * FROM `renkler`");
      $color->execute();
      $cntcolor=$color->rowCount();

  ?> 

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> <?= $lang["anasayfa"];?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $cntMesaj ?></div>
                                    <div><?= $lang["okunmamismesaj"];?></div>
                                </div>
                            </div>
                        </div>
                        <a href="mesajlar.php">
                            <div class="panel-footer">
                                <span class="pull-left"><?= $lang["detaygor"] ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $cntBlog ?></div>
                                    <div><?= $lang["bloglar"] ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="bloglar.php">
                            <div class="panel-footer">
                                <span class="pull-left"><?= $lang["details"] ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $cntDetails ?></div>
                                    <div><?= $lang["detaygor"] ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="details.php">
                            <div class="panel-footer">
                                <span class="pull-left"><?= $lang["detaygor"] ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
               <div class="row" >
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?= $cntcolor ?></div>
                                    <div><?= $lang["renkler"] ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="renkler.php">
                            <div class="panel-footer">
                                <span class="pull-left"><?= $lang["detaygor"] ?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
