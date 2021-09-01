
<?php
require_once 'admin/pages/inc-functions.php';
  if (!$_SESSION["lang"]){
        require("diller/tr.php");
    }else {
        require("diller/".$_SESSION["lang"].".php");
    }


    ?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from paul-themes.com/html/go-arch/demo/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Apr 2021 12:15:55 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Go.arch - Architecture HTML Template</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

    <link href="../../../../../fonts.googleapis.com/css757b.css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="../../../../../fonts.googleapis.com/csse3e5.css?family=Montserrat:400,700" rel="stylesheet">
   <?php require_once 'css/style.php' ?>

</head>
<body>

<div class="loader">
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
    <div class="loader-brand">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</div>

<header id="top" class="header-home">
  

    <div class="brand-panel">
        <a href="#top" class="brand js-target-scroll">
            go<span class="text-primary">.</span>arch
        </a>
        <div class="brand-name">Go.arch</div>
        <div class="slide-number">
            <span class="current-number text-primary">0<span class="count">1</span></span>
            <sup><span class="delimiter">/</span> 0<span class="total-count"></span></sup>
        </div>
    </div>
    <div class="header-phone">+7 (212) 674-25-10</div>
    <div class="vertical-panel"></div>
    <div class="vertical-panel-content">
        <div class="vertical-panel-info">
            <div class="vertical-panel-title">Architecture buro</div>
            <div class="line"></div>
        </div>
        <ul class="social-list">
            <li><a href="#" class="fa fa-instagram"></a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-behance"></a></li>
            <li><a href="#" class="fa fa-facebook"></a></li>
        </ul>
    </div>

    <nav class="navbar-desctop visible-md visible-lg">
        <div class="container">
            <a href="#top" class="brand js-target-scroll">
                go<span class="text-primary">.</span>arch
            </a>
            <ul class="navbar-desctop-menu">
                <li class="active">
                    <a href="index.php"><?= $lang["anasayfa"]?></a>
                    <ul>
                        <li class="active"><a href="index.php"><?= $lang["anasayfa-light"]?></a></li>
                        <li>
                            <a href="http://paul-themes.com/html/go-arch/demo/dark/index.php"><?= $lang["anasayfa-dark"]?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="about.php"><?= $lang["hakkimizda"]?></a>
                </li>
                <li>
                    <a href="projects.php"><?= $lang["project"]?></a>
                    <ul>
                        <li><a href="projects.php"><?= $lang["project-list"]?></a></li>
                        <li>
                            <a href="project.php"><?= $lang["project-details"]?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="blog.php"><?= $lang["bloglar"]?></a>
                    <ul>
                        <li><a href="blog.php"><?= $lang["bloglist"]?></a></li>
                        <li>
                            <a href="blog-details.php"><?= $lang["blogpost"]?></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contacts.php">Contacts</a>
                </li> 
                
                <li><a href="diller/dil.php?lang=tr"><?= $lang["trdil"];?></a></li>
                <li><a href="diller/dil.php?lang=en"><?=  $lang["ingdil"];?></a></li>

            </ul>
           

        </div>

    </nav>


    <nav class="navbar-mobile">
        <a href="#top" class="brand js-target-scroll">
            go<span class="text-primary">.</span>arch
        </a>

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav-mobile">
                <li class="active">
                    <a href="#">Home <i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li class="active"><a href="index.php">— Home - Light</a></li>
                        <li>
                            <a href="http://paul-themes.com/html/go-arch/demo/dark/index.php">Home - Dark</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="about.php">About us</a>
                </li>
                <li>
                    <a href="#">Projects <i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li><a href="projects.php">Projects - List</a></li>
                        <li>
                            <a href="project.php">Project - details</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog <i class="fa fa-angle-down"></i></a>
                    <ul>
                        <li><a href="blog.php">Blog - List</a></li>
                        <li>
                            <a href="blog-details.php">Blog - Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="contacts.php">Contacts</a>
                </li>
            </ul>
             
        </div>
    </nav>
</header>