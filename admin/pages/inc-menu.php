  
<?php 


if(@$_SESSION['girisKontrol']!=1){//eğer kullanıcı giriş yapmamış ise login.php e gider
    header("Location:login.php?info=cikis");
}
?>




  <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="anasayfa.php"><?= $lang["panel"];?></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i><?= $lang["cikis"];?></a>
                        </li>

                    </ul>


 <li><a href="diller/dil.php?lang=tr"><?= $lang["trdil"];?></a></li>
 <li><a href="diller/dil.php?lang=en"><?=  $lang["ingdil"];?></a></li>

  

                    <!-- /.dropdown-user -->
                </li>

   

                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="<?= $lang["search"] ?>">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="anasayfa.php"><i class="fa fa-dashboard fa-fw"></i> <?= $lang["anasayfa"];?></a>
                        </li>
                      
                        <li>
                            <a href="blog.php"><i class="fa fa-table fa-fw"></i> <?= $lang["bloglar"];?></a>
                        </li>
                         <li>
                            <a href="blog_details.php"><i class="fa fa-table fa-fw"></i> <?= $lang["details"];?></a>
                        </li>
                        <li>
                            <a href="hakkimizda.php"><i class="fa fa-table fa-fw"></i> <?= $lang["hakkimizda"];?></a>
                        </li>
                        <li>
                            <a href="project.php"><i class="fa fa-table fa-fw"></i><?= $lang["project"];?></a>
                        </li>
                        <li>
                            <a href="renk.php"><i class="fa fa-table fa-fw"></i><?= $lang["renkler"];?></a>
                        </li>
                       
                      
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
