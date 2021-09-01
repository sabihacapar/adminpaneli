  <?php require_once 'inc-functions.php';   

if(!isset($_SESSION['anasayfadil'])){
    $_SESSION['anasayfadil']=1;

}
 if(isset($_GET['dildegistir'])){
    $dil=$_GET['dildegistir'];
    $_SESSION['anasayfadil']=$dil;
    header("Location:".$_SERVER["HTTP_REFERER"]);
  }


 if (@!$_SESSION["lang"]){
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

    <title><?= $lang["bloglar"]  ?> | <?= $lang["panel"]  ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
    
//aktiflik durumunu değiştirmek için kullanılır
$id=intval(@$_GET["id"]);//id nin int olduğunu belirtmek için kullanılır
    if(@$_GET["is"] == "aktif"){

        if(@$_GET["durum"]==1){
            $durum=0;
        }else{
              $durum=1;
        }
        $aktif=$db->prepare("UPDATE `blog` SET `aktif`= :aktiflik WHERE `id`= :i");
        $aktif->bindValue(":aktiflik",$durum,PDO::PARAM_INT);//aktiflik durumunun güvenliği için
          $aktif->bindValue(":i",$id,PDO::PARAM_INT);//aktiflik durumunun güvenliği için

        if($aktif->execute()){
            //eğer başarılı bir şekilde çalıştıysa
             header("Location: blog.php?info=basarili");
        }else{
             header("Location: blog.php?info=ekle");

        }
    }
    //silme işlemi için kod blokları
    if(@$_GET["silme"]=="sil"){
        $sil=$db->prepare("DELETE FROM `blog` WHERE `id`= :i");
        $sil->bindValue(":i",$id,PDO::PARAM_INT);
        if($sil->execute()){
            header("Location: blog.php?i=ekle");
        }else{
             header("Location: blog.php?info=ekle");

        }
    }




    ?>





    <div id="wrapper">
<?php  require_once 'inc-menu.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?= $lang["blogyazi"]  ?></h1>

                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <a href="blog_ekle.php" class="btn btn-primary" style="margin-right: 15px;"><?= $lang["ekle"]  ?> +</a>

    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
      <?= $lang["dil"]  ?>
    </button>
    <div class="dropdown-menu">
     
      <?php 

      $diller=$db->prepare("SELECT * FROM `diller`");
      $diller->execute();
      if($diller->rowCount()){
        foreach ($diller as $row) {
            ?>
             <a class="dropdown-item" href="blog.php?dildegistir=<?php echo $row["dilid"] ?>"><?php echo $row["dilad"]?></a>
            <?php
        }
      }


      ?>
    </div>

  
                         <?php 
                    if(@$_GET["info"]=="ekle"){
                        echo "<span class='text-success'>Ekleme işlemi başarılı</span>";
                    }elseif(@$_GET["info"]=="hata"){
                         echo "<span class='text-danger'>Ekleme işlemi hatalı</span>";

                    }


                    ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>  <?= $lang["baslik"]  ?></th>
                                            <th>  <?= $lang["tarih"]  ?></th>
                                            <th>  <?= $lang["aktif"]  ?></th>
                                            <th>  <?= $lang["arac"]  ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $sql=$db->prepare("SELECT * FROM `blog` WHERE dilid=:dilid");
                                        $sql->execute([':dilid'=>$_SESSION['anasayfadil']]);
                                        if($sql->rowCount()){


                                        //while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
                                            foreach ($sql as $row) {   
                                            ?>
                                        
                                        
                                        <tr class="odd gradeX">
                                            <td><?= $row["id"]?></td>
                                            <td><?= $row["baslik"]?></td>
                                            <td><?= $row["tarih"]?></td>
                                            <td class="center">
                                                
                                                    <?php 
                                                     if($row["aktif"]==1){ ?>
                                                         <a href="blog.php?is=aktif&id=<?= $row["id"]?>&durum=<?= $row["aktif"] ?>" onclick="return confirm('aktiflik durumu değişsin mi ?')" class="btn btn-success btn-xs" style="margin-right: 15px;">Aktif</a>
                                                    <?php }else{?>

                                                    <?php }?>
                                                      <a href="blog.php?is=aktif&id=<?= $row["id"]?>&durum=<?= $row["aktif"] ?>" onclick="return confirm(' aktiflik durumu değişsin mi ?')" class="btn btn-danger btn-xs" style="margin-right: 15px;">Pasif</a>
                                            </td>
                                            <td class="center">
                                                <a href="blog_duzenle.php?id=<?= $row["id"]?>" class="btn btn-warning btn-xs" style="margin-right: 15px;">Düzenle</a>
                                            </td>
                                             <td class="center">
                                                <a href="blog.php?silme=sil&id=<?= $row["id"]?>" onclick="return confirm('silmek istediğinize emin misiniz?')" class="btn btn-danger btn-xs" style="margin-right: 15px;">Sil</a>
                                            </td>
                                        </tr>
                                       
                                        <?php }}?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
