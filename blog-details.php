<?php
require_once 'admin/pages/inc-functions.php';


    $page_title = 'Blog details';//Names page and <h1>
    $thisPage='blogdetails';//Gives the page an indentifier
include ('header.php');


@$id=intval($_GET["id"]);
$cek=$db->prepare("SELECT * FROM `blog_details` WHERE `aciklama`=:aciklama  ORDER BY `id`");
$cek->bindValue(":aciklama",$id,PDO::PARAM_INT);

$cek->execute();
$row = $cek->fetch(PDO::FETCH_ASSOC);

    
?>




<div class="layout">

<main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1><?= $row["baslik"]?></h1>
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

<section class="blog-details">
<div class="container">
<div class="row">
<div class="col-primary col-md-8">
<article class="post">
<header class="post-header">
<h3><?= $row["alt_baslik"] ?></h3><!-- başlığı veritabanından çeker -->
<div class="blog-meta">
<div class="author">
by <a href="#">Craig David</a>
</div>
<div class="time">July, 26</div>
</div>
</header>
<div class="post-thumbnail">
<img alt="" class="img-responsive" src="<?= htmlspecialchars_decode($row["file_name"])?>">

</div>
<?= $row["aciklama"] ?>
<div class="blog-tags">

<a href="#">marketing</a>
<a href="#">technology</a>
<a href="#">design</a>
<a href="#">technology</a>
<a href="#">design</a>
</div>
</article>
</div>
<div class="col-secondary col-md-4">
<div class="widget widget_recent_post">
<h3 class="widget-title">Recent Post</h3>
<article class="recent-post">
<div class="recent-post-thumbnail">
<a href="#"><img alt="" src="img/blog/1-149x108.jpg" class="wp-post-image"></a>
</div>
 <div class="recent-post-body">
<h4 class="recent-post-title">
<a href="#">Creativity can provide all that which is required make your advertising an</a>
</h4>
<div class="recent-post-time">June, 16</div>
</div>
</article>
<article class="recent-post">
<div class="recent-post-thumbnail">
<a href="#"><img alt="" src="img/blog/2-149x108.jpg" class="wp-post-image"></a>
</div>
<div class="recent-post-body">
<h4 class="recent-post-title">
<a href="#">Creativity can provide all that which is required make your advertising an</a>
</h4>
<div class="recent-post-time">June, 16</div>
</div>
</article>
<article class="recent-post">
<div class="recent-post-thumbnail">
<a href="#"><img alt="" src="img/blog/3-149x108.jpg" class="wp-post-image"></a>
</div>
<div class="recent-post-body">
<h4 class="recent-post-title">
<a href="#">Creativity can provide all that which is required make your advertising an</a>
</h4>
<div class="recent-post-time">June, 16</div>
</div>
</article>
</div>
<div class="widget">
<div class="blog-tags">
<a href="#">marketing</a>
<a href="#">technology</a>
<a href="#">design</a>
<a href="#">technology</a>
<a href="#">design</a>
</div>
</div>
</div>
</div>
</div>
</section>
<?php include('footer.php') ?>