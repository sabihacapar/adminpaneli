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

    <title><?= $lang["details"] ?> <?= $lang["ekle"] ?> | <?= $lang["panel"] ?></title>

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



$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // dosyanın türleri
$path = 'admin/uploads/'; // dosyanın kaydedileceği yol
$baslik = htmlspecialchars($_POST["baslik"],ENT_QUOTES,"UTF-8");
$alt_baslik = htmlspecialchars($_POST["alt_baslik"],ENT_QUOTES,"UTF-8");
$aciklama = htmlspecialchars($_POST["aciklama"],ENT_QUOTES,"UTF-8");
$aktif = htmlspecialchars($_POST["aktif"],ENT_QUOTES,"UTF-8");


$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
$final_image = $img;
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) 
{
echo "<img src='$path' />";
}
} 

    //blog sayfasına eklenmek istenen veri için kod blokları
    //veritabanına veri eklemek için sorgu
    $ekle =$db->prepare("INSERT INTO `blog_details` (`baslik`,`alt_baslik`,`aciklama`,`aktif`,`file_name`) VALUES (:baslik, :alt_baslik, :aciklama, :aktif,:file_name)");

    $ekle->bindValue(":baslik",$baslik,PDO::PARAM_STR);
     $ekle->bindValue(":alt_baslik",$alt_baslik,PDO::PARAM_STR);
    $ekle->bindValue(":aciklama",$aciklama,PDO::PARAM_STR);
    $ekle->bindValue(":aktif",$aktif,PDO::PARAM_INT);
    $ekle->bindValue(":file_name",$path,PDO::PARAM_STR);
 

    if($ekle->execute()){
        //çalışıp çalışmadığını kontrol etmek için
        header("Location: blog_details.php?info=ekle");

    }else{
       // print_r($ekle->errorInfo());
        header("Location: blog_details.php?info=hata");

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
                          <a href="blog_details.php" class="btn btn-primary"><?= $lang["don"] ?></a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                                       
                                        <div class="form-group">
                                            <label><?= $lang["baslik"] ?></label>
                                            <input class="form-control" name="baslik" placeholder="Başlık Giriniz...">
                                        </div>
                                        <div class="form-group">
                                            <label><?= $lang["altbaslik"] ?></label>
                                            <input class="form-control" name="alt_baslik" placeholder=" Alt Başlık Giriniz...">
                                        </div>
                                       
                                        
                                        <div class="form-floating">
                                            <label><?= $lang["aciklama"] ?></label>
                                    <textarea rows="3" class="form-control" name="aciklama" placeholder="Enter your message here..." style="height: 12rem" required></textarea>
                                  
                                    
                                </div>
                                       
                                        <div class="form-group">
                                            <label><?= $lang["aktif"] ?></label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif"  value="1" checked><?= $lang["aktif"] ?>
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif" value="0"><?= $lang["pasif"] ?>
                                                </label>
                                            </div>
                                           <input id="uploadImage" type="file" accept="image/*" name="image" />
                                           <div id="preview"><img src="filed.png" /></div><br>
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
