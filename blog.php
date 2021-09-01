

<?php
    $page_title = 'Blog';//Names page and <h1>
    $thisPage='blog';//Gives the page an indentifier
    include ('header.php');
?>


<div class="layout">

<main class="main main-inner main-blog bg-blog" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1><?= $page_title ?></h1>
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

<section class="blog-list section">
<div class="container">
<article class="blog">
<div class="row">
<div class="blog-thumbnail col-md-8">
<div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(img/blog/1-760x514.jpg);"></div>
<div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="img/blog/1-760x514.jpg"></div>
</div>
<div class="blog-info col-md-4">
<div class="blog-tags">
<a href="#">marketing</a>
<a href="#">technology</a>
<a href="#">design</a>
<a href="#">technology</a>
<a href="#">design</a>
</div>
<h3 class="blog-title">
<a href="#">Advice for stirring your online community and fostering engagement</a>
</h3>
<p>Sticky note agile personas engaging ship it ideate disrupt earned media.</p>
<div class="blog-meta">
<div class="author">
by <a href="#">Craig David</a>
</div>
<div class="time">July, 26</div>
</div>
<div class="text-right"><a href="#" class="read-more">Read more</a></div>
</div>
</div>
</article>
<article class="blog">
<div class="row">
<div class="blog-thumbnail col-md-8">
<div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(img/blog/2-760x514.jpg);"></div>
<div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="img/blog/2-760x514.jpg"></div>
</div>
<div class="blog-info col-md-4">
<div class="blog-tags">
<a href="#">marketing</a>
<a href="#">technology</a>
<a href="#">design</a>
<a href="#">technology</a>
<a href="#">design</a>
</div>
<h3 class="blog-title">
<a href="#">Advice for stirring your online community and fostering engagement</a>
</h3>
<p>Sticky note agile personas engaging ship it ideate disrupt earned media.</p>
<div class="blog-meta">
<div class="author">
by <a href="#">Craig David</a>
</div>
<div class="time">July, 26</div>
</div>
<div class="text-right"><a href="#" class="read-more">Read more</a></div>
</div>
</div>
</article>
<article class="blog">
<div class="row">
<div class="blog-thumbnail col-md-8">
<div class="blog-thumbnail-bg col-md-8 visible-md visible-lg" style="background-image: url(img/blog/3-760x514.jpg);"></div>
<div class="blog-thumbnail-img visible-xs visible-sm"><img alt="" class="img-responsive" src="img/blog/3-760x514.jpg"></div>
</div>
<div class="blog-info col-md-4">
<div class="blog-tags">
<a href="#">marketing</a>
<a href="#">technology</a>
<a href="#">design</a>
<a href="#">technology</a>
<a href="#">design</a>
</div>
<h3 class="blog-title">
<a href="#">Advice for stirring your online community and fostering engagement</a>
</h3>
<p>Sticky note agile personas engaging ship it ideate disrupt earned media.</p>
<div class="blog-meta">
<div class="author">
by <a href="#">Craig David</a>
</div>
<div class="time">July, 26</div>
</div>
<div class="text-right"><a href="#" class="read-more">Read more</a></div>
</div>
</div>
</article>
<div class="section-content text-center">
<a href="#" class="btn btn-gray">Read more</a>
</div>
</div>
</section>

<section class="contacts section">
<div class="container">
<header class="section-header">
<h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
</header>
<div class="section-content">
<div class="row-base row">
<div class="col-address col-base col-md-4">
+7 (212) 654-33-35<br>
+7 (212) 287-85-22<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96fff8f0f9d6f1f9f7e4f5feb8f5f9fb">[email&#160;protected]</a><br>
USA, New York, 57 Quigley Bridge
</div>
<div class="col-base  col-md-8">
<form class="js-ajax-form">
<div class="row-field row">
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="Name" autocomplete="off">
</div>
<div class="form-group">
<input type="email" class="form-control" name="email" required placeholder="Email *" autocomplete="off">
</div>
</div>
<div class="col-field col-sm-6 col-md-4">
<div class="form-group">
<input type="tel" class="form-control" name="phone" placeholder="Phone" autocomplete="off">
</div>
<div class="form-group">
<input type="text" class="form-control" name="company" placeholder="Company" autocomplete="off">
</div>
</div>
<div class="col-field col-sm-12 col-md-4">
<div class="form-group">
<textarea class="form-control" name="message" placeholder="Message"></textarea>
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
<!DOCTYPE HTML>
<?= include('footer.php') ?>