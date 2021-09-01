<?php 
require_once 'admin/pages/inc-functions.php';
    $page_title = 'Project in Paris';
    $thisPage='project';
    include ('header.php');

@$id=intval($_GET["id"]);
$cek=$db->prepare("SELECT * FROM `projects` WHERE `aciklama`=:aciklama ORDER BY `id` DESC");
$cek->bindValue(":aciklama",$id,PDO::PARAM_INT);
$row = $cek->fetch(PDO::FETCH_ASSOC);
$cek->execute();



?>

<div class="layout">

<main class="main main-inner main-project" style="background-image:url('img/bg/project.jpg');" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1><?php echo $page_title?></h1>
<div class="project-title-info">
<div class="project-info-item"><span class="text-primary">Client</span>: Modernize ltd.</div>
<div class="project-info-item"><span class="text-primary">Scale:</span> 3500 km<sup>2</sup></div>
</div>
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
<section class="project-details">
<div class="container">

<?php while($row = $cek->fetch(PDO::FETCH_ASSOC)){?>
<div class="project-details-item">
     
<div class="row">
   
<div class="project-details-info wow fadeInLeft">
<h3 class="project-details-title">
<?= htmlspecialchars_decode($row["baslik"])?><br> <?= htmlspecialchars_decode($row["alt_baslik"])?>
</h3>
<p class="project-details-descr"><?= htmlspecialchars_decode($row["aciklama"])?></p>
</div>
<div class="project-details-img col-md-8 col-md-offset-4">
<img alt="" class="img-responsive" src="img/projects/1-780x668.jpg">
</div>
</div>


</div>
<?php }?>
<!-- <div class="project-details-item">
<div class="row">
<div class="project-details-info wow fadeInRight">
<h3 class="project-details-title">
Project description<br> is here #2
</h3>
<p class="project-details-descr">It is a good idea to think of your PC as an office. It stores files, programs, pictures.
This can be compared to an actual office’s files, machines and decorations.
The operating system is the boss. With this image in mind, think of an office you’ve visited that was slow and inefficient.</p>
</div>
<div class="project-details-img col-md-8">
<img alt="" class="img-responsive" src="img/projects/2-780x668.jpg">
</div>
</div>
</div>


<div class="project-details-item">
<div class="row">
<div class="project-details-info wow fadeInLeft">
<h3 class="project-details-title">
Project description<br> is here #3
</h3>
<p class="project-details-descr">It is a good idea to think of your PC as an office. It stores files, programs, pictures.
This can be compared to an actual office’s files, machines and decorations.
The operating system is the boss. With this image in mind, think of an office you’ve visited that was slow and inefficient.</p>
</div>
<div class="project-details-img col-md-8 col-md-offset-4">
<img alt="" class="img-responsive" src="img/projects/3-780x668.jpg">
</div>
</div>
</div> -->
</div>
</section>
<?php   include ('footer.php');?>