<?php require_once 'inc-functions.php'; ?>
<?php 

if(@$_SESSION['girisKontrol']==1){//eğer kullanıcı giriş yapmışsa tekrar index sayfasına gitmemesi için bu kullanılır
    header("Location:anasayfa.php");
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

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Giriş Yap</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="******" name="password" type="password" required>
                                </div>
                                <input type="submit" name="submit" value="Giriş" class="btn btn-lg btn-success btn-block">
                                <!-- Change this to a button or input when using this as a form -->
                               
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 


        if(@$_POST["submit"]){
 $email = $_POST['email'];
$password = $_POST['password'];
            if($_POST["email"]==$email && $_POST["password"]==$password){

                $sql_check = $db->query("SELECT * FROM admin WHERE email='".$email."' AND password='".$password."' ");
                //giris yap
                
                $_SESSION["email"]=$_POST[ "email"];

if($sql_check->rowCount())  {
   $_SESSION["girisKontrol"]=1;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
   header("Location:anasayfa.php");
}
else {
    if($email=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}

                

                
                return true;
            }else{
                echo "<p style='text-align:center;color:red;'>kullanıcı adı veya şifre hatalı</p>";
                return false;
            }

        }
        if(@$_GET['info']=="cikisbasarili"){
            echo "<p style='text-align:center;color:green;'>Başarılı bir şekilde çıkış yaptınız</p>";

        }elseif(@$_GET['info']=="cikis"){
            echo "<p style='text-align:center;color:red;'>Lütfen öncelikle giriş yapınız</p>";

        }
    ?>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
