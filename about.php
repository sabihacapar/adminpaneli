

<?php
 require_once 'admin/pages/inc-functions.php';
    $page_title = 'About Arch';//Names page and <h1>
    $thisPage='about';//Gives the page an indentifier
    include ('header.php');



@$id=intval($_GET["id"]);


$cek=$db->prepare("SELECT * FROM `hakkimizda` WHERE dil=1");

//$cek->bindValue(":dil",$id,PDO::PARAM_INT);
$cek->execute();
$row = $cek->fetch(PDO::FETCH_ASSOC);



?>

<div class="layout">

<main class="main main-inner bg-about" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1><?= $lang["hakkimizdabaslik"]?></h1>
</header>
</div>

<div class="page-lines">
<div class="container">

<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
</div>
<div class="col-line col-xs-4">
<div class="line"></div>
<div class="line"></div>
</div>
</div>
</div>
</main>
<div class="content">

<section id="about" class="about section">
<div class="container">

<div class="entry">
 <?
 
 ?>
<h3 class="entry-title"><?=$lang["hakkimizdaaltbaslik"]?><span class="text-primary">.</span></h3>
<p class="entry-text" style="color:black;">  <?= $row["aciklama"]?></p>

</div>
</div>
</section>

<section id="services" class="services section">
<div class="container">

<header class="section-header">
<h2 class="section-title"><span class="text-primary"><?= $lang["our"] ?></span><?= $lang["services"] ?></h2>
</header>
<div class="section-content">
<div class="row-services row-base row">
  <?php while ($row = $cek->fetch(PDO::FETCH_ASSOC)) {?><!--veritabanındaki verileri çekmek için döngüye alıyoruz
    
  -->
<div class="col-base col-service col-sm-6 col-md-4 wow fadeInUp">
<div class="service-item">
<img alt="" src="img/img-icon/icon-architecture.png">

<h4><?= $lang["hakkimizdaaltbaslik"]?></h4>
<p><?= htmlspecialchars_decode($row["aciklama"])?></p>
</div>
</div>
<?php }?>

</div>
</div>
 </div>
</section>


<section id="objects" class="objects section">
<div class="container">

<header class="section-header">
<h2 class="section-title"><?= $lang["biz"]?> <span class="text-primary"><?= $lang["dunya"] ?></span></h2>
</header>
<div class="section-content">
<div class="objects">
<img alt="" class="img-responsive" src="img/map.png">

<div class="object-label" style="left:12.6%; top:42%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f7919b96839b928ed9939899b780929e8484999683d99a92">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 25.7%; top: 39.1%;">
<div class="object-info in">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85e3e9e4f1e9e0fcabe1eaebc5f2e0ecf6f6ebe4f1abe8e0">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 32.2%; top: 80.6%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c5a505d48505945125853527c4b59554f4f525d48125159">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 47.3%; top: 34.5%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4a2c262b3e262f33642e25240a3d2f233939242b3e64272f">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 50.7%; top: 20.4%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ccaaa0adb8a0a9b5e2a8a3a28cbba9a5bfbfa2adb8e2a1a9">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 64.4%; top: 22.4%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5a3a9a4b1a9a0bceba1aaab85b2a0acb6b6aba4b1eba8a0">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 82.2%; top: 32.6%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9afcf6fbeef6ffe3b4fef5f4daedfff3e9e9f4fbeeb4f7ff">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 84.4%; top: 82.3%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1b7bdb0a5bdb4a8ffb5bebf91a6b4b8a2a2bfb0a5ffbcb4">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="contacts section">
<div class="container">

 <header class="section-header">
<h2 class="section-title"><?= $lang["get"] ?><span class="text-primary"><?= $lang["iletisim"] ?></span></h2>
</header>
<div class="section-content">
<div class="row-base row">
<div class="col-address col-base col-md-4">
+7 (212) 654-33-35<br>
+7 (212) 287-85-22<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6a03040c052a0d050b18090244090507">[email&#160;protected]</a><br>
USA, New York, 57 Quigley Bridge
</div>
<div class="col-base  col-md-8">
<form class="js-ajax-form">
<div class="row-field row">
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="<?= $lang["ad"] ?>">
</div>
<div class="form-group">
<input type="email" class="form-control" name="email" required placeholder="<?= $lang["email"] ?> *">
</div>
</div>
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="tel" class="form-control" name="phone" placeholder="<?= $lang["telefon"] ?>">
</div>
<div class="form-group">
<input type="text" class="form-control" name="company" placeholder="<?= $lang["sirket"] ?>">
</div>
</div>
<div class="col-field col-sm-12 col-md-4">
<div class="form-group">
<textarea class="form-control" name="message" placeholder="<?= $lang["mesaj"] ?>"></textarea>
</div>
</div>
<div class="col-message col-field col-sm-12">
<div class="form-group">
<div class="success-message"><i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...</div>
<div class="error-message">We're sorry, but something went wrong</div>
</div>
</div>
</div>
<div class="form-submit text-right"><button class="btn btn-shadow-2 wow swing">Send <i class="icon-next"></i></button></div>
</form>
</div>
</div>
</div>
</div>
</section>
<?php include('footer.php')?>