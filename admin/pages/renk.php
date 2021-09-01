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

    <title><?= $lang["renkler"] ?> | <?= $lang["panel"] ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php 
if(@$_POST["submit"]){
    $color = htmlspecialchars($_POST["color"],ENT_QUOTES,"UTF-8");

    
    $ekle =$db->prepare("INSERT INTO `renkler` (`color`) VALUES (:color)");

    $ekle->bindValue(":color",$color,PDO::PARAM_STR);
  

    if($ekle->execute()){
        //çalışıp çalışmadığını kontrol etmek için
        header("Location: renkler.php?info=ekle");

    }else{
       // print_r($ekle->errorInfo());
        header("Location: renkler.php?info=hata");

    }


}


?>

    <div id="wrapper">

      <?php require_once 'inc-menu.php';    ?> <!-- menu kodlarını buradan taşıdığımız için taşıdığımız sayfanın uzantısını buraya veriyoruz -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?= $lang["ekle"] ?> </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <a href="renkler.php" class="btn btn-primary"><?= $lang["renkler"] ?></a>
                          <a href="renkler.php" class="btn btn-default"><?= $lang["update"] ?></a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                                       
                                        <div class="form-group">
                                            <label><? $lang["renkler"] ?></label>
                                            <input type="color" id="renk" name="color">
                                         :  <input type="text" id="renkalani" name="navbar">

                                        </div>
                                       
                                        
                                       
                                        
                                        <input type="submit" name="submit" value="<?= $lang["kaydet"]?>" class="btn btn-default">
                                        <button type="reset" class="btn btn-default"><?= $lang["temizle"]?></button>
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
     <script>
    //Color nesnesinden seçilen renk sayfanın rengi olsun
    $(document).ready(function() {
        $("#renk").on("change",function(){
          var secilenrenk = $("#renk").val();         
          $("p").css("color",secilenrenk);
          document.getElementById("renkalani").value=secilenrenk;//seçilen rengi text input alanına atar

        });
    });
    
  </script>
</body>

</html>
