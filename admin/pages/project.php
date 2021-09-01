
  <?php require_once 'inc-functions.php';  
  if (!$_SESSION["lang"]){
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

    <title><?= $lang["project"] ?> | <?= $lang["panel"] ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

</head>

<body>

    <?php







if(@$_POST["submit"]){
  
    $baslik = htmlspecialchars($_POST["baslik"],ENT_QUOTES,"UTF-8");
    $alt_baslik = htmlspecialchars($_POST["alt_baslik"],ENT_QUOTES,"UTF-8");
    $aciklama = htmlspecialchars($_POST["aciklama"],ENT_QUOTES,"UTF-8");


    //tabloya yeni veri eklemek için bu kod blogu

    $ekle =$db->prepare("INSERT INTO `projects` (`baslik`,`alt_baslik`,`aciklama`) VALUES (:baslik,:alt_baslik, :aciklama)");

    $ekle->bindValue(":baslik",$baslik,PDO::PARAM_STR);
    $ekle->bindValue(":alt_baslik",$alt_baslik,PDO::PARAM_STR);
    $ekle->bindValue(":aciklama",$aciklama,PDO::PARAM_STR);
    
  

    if($ekle->execute()){
        //çalışıp çalışmadığını kontrol etmek için
        header("Location:project.php?info=ekle");

    }else{
       // print_r($ekle->errorInfo());
        header("Location:project.php?info=hata");

    }


}
$id=@$_GET["id"];
//değerleri çekmek için
$cek = $db->prepare("SELECT * FROM `projects` ORDER BY `id` DESC LIMIT 1");
$cek->execute();
$row = $cek->fetch(PDO::FETCH_ASSOC);//TABLODAN GELEN VERİLRİ ELE ALIR 

?>

    <div id="wrapper">

      <?php require_once 'inc-menu.php';    ?> <!-- menu kodlarını buradan taşıdığımız için taşıdığımız sayfanın uzantısını buraya veriyoruz -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?= $lang["project"] ?> <?= $lang["ekle"] ?> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <a href="anasayfa.php" class="btn btn-primary"><?= $lang["anasayfa"] ?></a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="">
                                        <div class="form-group">
                                            <label><?= $lang["baslik"]  ?></label>
                                            <input class="form-control" name="baslik" placeholder="Başlık Giriniz...">
                                        </div>
                                       
                                       <div class="form-group">
                                            <label><?= $lang["altbaslik"] ?></label>
                                            <input class="form-control" name="alt_baslik" placeholder="Alt Başlık Giriniz...">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label><?= $lang["aciklama"] ?></label>
                                            <textarea class="form-control" name="aciklama"  rows="3" id="mytextarea">
                                                <?= $row["aciklama"] ?></textarea>
                                        </div>
                                      
                                       

                                       
                                       
                                        
                                         <input type="submit" name="submit" value="<?= $lang["kaydet"] ?>" class="btn btn-default">

                                        
                                        <button type="reset" class="btn btn-default"><?= $lang["temizle"] ?></button>
                                    </form>
                                </div>
                              
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src='../js/tinymce.min.js'></script>
    <script>
        tinymce.init({
        selector: '#mytextarea'
      });
    </script>
</body>

</html>
