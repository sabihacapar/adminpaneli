
<?php
    $page_title = '';//Names page and <h1>
    $thisPage='index';//Gives the page an indentifier
    
    include ('header.php');
    require_once 'admin/pages/inc-functions.php';
  if (!$_SESSION["lang"]){
        require("diller/tr.php");
    }else {
        require("diller/".$_SESSION["lang"].".php");
    }

?>

    <main class="main">
        <div class="arrow-left"></div>
        <div class="arrow-right"></div>

        <div class="rev_slider_wrapper">
            <div id="rev_slider" class="rev_slider fullscreenbanner">
                <ul>

                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                        data-fsmasterspeed="1000">

                        <img src="img/slider/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']"
                             data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                             data-lineheight="['80','75', '65']" data-width="['1100','700','450']" data-height="none"
                             data-whitespace="normal" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             data-elementdelay="0.05">Concert hall in new york
                        </div>

                        <div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']"
                             data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none">Concert Hall is the architecture of a new generation, a building<br>
                            that exists not only in the dimension of space,<br>
                            but also in the dimension of time and communication.
                        </div>

                        <div class="tp-caption" data-x="['right','right','right','right']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on"><a href="#about"
                                                                                 class="btn js-target-scroll">Look more
                            <i class="icon-next"></i></a>
                        </div>
                    </li>

                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000">

                        <img src="img/slider/slide2.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']"
                             data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-35','-35', '-55']" data-fontsize="['50','45', '35']"
                             data-lineheight="['80','75','65']" data-width="['1100','700','500']" data-height="none"
                             data-whitespace="normal" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             data-elementdelay="0.05">Exhibition center in boston
                        </div>

                        <div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']"
                             data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none">
                            Modern Hotel is the architecture of a new generation, a building<br> that exists not only in
                            the dimension of space,<br>
                            but also in the dimension of time and communication.
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['right','right','right','right']"
                             data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['195','210']" data-width="none" data-height="none" data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#about"
                                                                                                     class="btn js-target-scroll">Look
                            more <i class="icon-next"></i></a>
                        </div>
                    </li>

                    <li data-transition="slotzoom-horizontal" data-slotamount="7" data-easein="Power3.easeInOut"
                        data-easeout="Power3.easeInOut" data-masterspeed="1000">

                        <img src="img/slider/slide3.jpg" alt="" data-bgposition="center center" data-bgfit="cover"
                             data-bgrepeat="no-repeat" class="rev-slidebg">

                        <div class="slide-title tp-caption tp-resizeme" data-x="['right','right','right','right']"
                             data-hoffset="['-18','-18','-18','-18']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['-35','-35', '-25']" data-fontsize="['50','45', '35']"
                             data-lineheight="['80','75', '65']" data-width="['1000','700','450']" data-height="none"
                             data-whitespace="normal" data-transform_idle="o:1;"
                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                             data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                             data-elementdelay="0.05">Modern hotel in london
                        </div>

                        <div class="slide-subtitle tp-caption tp-resizeme" data-x="['right','right','right','right']"
                             data-hoffset="['0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['75','105']" data-fontsize="['18']" data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;"
                             data-transform_out="opacity:0;s:1000;s:1000;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none">Exhibition Center is the architecture of a new generation,<br>
                            a building that exists not only in the dimension of space,<br>
                            but also in the dimension of time and communication.
                        </div>

                        <div class="tp-caption tp-resizeme" data-x="['right','right','right','right']"
                             data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']"
                             data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                             data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);"
                             data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none"
                             data-splitout="none" data-responsive_offset="on" style="z-index: 8;"><a href="#about"
                                                                                                     class="btn js-target-scroll">Look
                            more <i class="icon-next"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <div class="content">

        <section id="about" class="about section">
            <div class="container">
                <header class="section-header">
                    <h2 class="section-title">About <span class="text-primary">go.arch</span></h2>
                    <strong class="fade-title-left">About</strong>
                </header>
                <div class="section-content">
                    <div class="row-base row">
                        <div class="col-base col-sm-6 col-md-4">
                            <h3 class="col-about-title">we turn ideas into works of art<span
                                    class="text-primary">.</span></h3>
                            <div class="col-about-info">
                                <p>For each project we establish relationships with partners who we know will help us
                                    create added value for your project. As well as bringing together the public and
                                    private sectors, we make sector-overarching links to gather knowledge and to learn
                                    from each other. The way we undertake projects is based on permanently applying
                                    values that reinforce each other: socio-cultural value, experiental value,
                                    building-technical value and economical value.</p>
                            </div>
                        </div>
                        <div class="col-base col-about-spec col-sm-6 col-md-4">
                            <h3 class="col-about-title">our<br> specialization<span class="text-primary">:</span></h3>
                            <div class="service-item">
                                <img alt="" width="46" src="img/img-icon/icon-architecture.png">
                                <h4>Architecture</h4>
                            </div>
                            <div class="service-item">
                                <img alt="" width="58" src="img/img-icon/icon-interiors.png">
                                <h4>Interiors</h4>
                            </div>
                            <div class="service-item">
                                <img alt="" width="58" src="img/img-icon/icon-planing.png">
                                <h4>Planing</h4>
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-base col-about-img col-sm-6 col-md-4">
                            <img alt="" class="img-responsive" src="img/380x370.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="projects section">
           <div class="container">
                <h2 class="section-title">Our <span class="text-primary">projects</span></h2>
            </div>
            <div class="section-content">
                <div class="projects-carousel js-projects-carousel js-projects-gallery">
                    <div class="project project-light">
                        <a href="img/projects/1-480x880.jpg" title="project 1">
                            <figure>
                                <img alt="" src="img/projects/1-480x880.jpg">
                                <figcaption>
                                    <h3 class="project-title">
                                        Residential care<br> project in Paris
                                    </h3>
                                    <h4 class="project-category">
                                        Architecture
                                    </h4>
                                    <div class="project-zoom"></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="project project-light">
                        <a href="img/projects/2-480x880.jpg" title="project 2">
                            <figure>
                                <img alt="" src="img/projects/2-480x880.jpg">
                                <figcaption>
                                    <h3 class="project-title">
                                        Concert hall<br> in New york
                                    </h3>
                                    <h4 class="project-category">
                                        Architecture
                                    </h4>
                                    <div class="project-zoom"></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="project">
                        <a href="img/projects/3-480x880.jpg" title="project 3">
                            <figure>
                                <img alt="" src="img/projects/3-480x880.jpg">
                                <figcaption>
                                    <h3 class="project-title">
                                        Modern hotel<br>in London
                                    </h3>
                                    <h4 class="project-category">
                                        Architecture
                                    </h4>
                                    <div class="project-zoom"></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="project">
                        <a href="img/projects/4-480x880.jpg" title="project 4">
                            <figure>
                                <img alt="" src="img/projects/4-480x880.jpg">
                                <figcaption>
                                    <h3 class="project-title">
                                        Modern hotel<br>in London
                                    </h3>
                                    <h4 class="project-category">
                                        Architecture
                                    </h4>
                                    <div class="project-zoom"></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="project">
                        <a href="img/projects/5-480x880.jpg" title="project 5">
                            <figure>
                                <img alt="" src="img/projects/5-480x880.jpg">
                                <figcaption>
                                    <h3 class="project-title">
                                        Residential care<br> project in Paris
                                    </h3>
                                    <h4 class="project-category">
                                        Architecture
                                    </h4>
                                    <div class="project-zoom"></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="project">
                        <a href="img/projects/6-480x880.jpg" title="project 6">
                            <figure>
                                <img alt="" src="img/projects/6-480x880.jpg">
                                <figcaption>
                                    <h3 class="project-title">
                                        Residential care<br> project in Paris
                                    </h3>
                                    <h4 class="project-category">
                                        Architecture
                                    </h4>
                                    <div class="project-zoom"></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="project">
                        <a href="img/projects/7-480x880.jpg" title="project 7">
                            <figure>
                                <img alt="" src="img/projects/7-480x880.jpg">
                                <figcaption>
                                    <h3 class="project-title">
                                        Residential care<br> project in Paris
                                    </h3>
                                    <h4 class="project-category">
                                        Architecture
                                    </h4>
                                    <div class="project-zoom"></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="project">
                        <a href="img/projects/8-480x880.jpg" title="project 8">
                            <figure>
                                <img alt="" src="img/projects/8-480x880.jpg">
                                <figcaption>
                                    <h3 class="project-title">
                                        Residential care<br> project in Paris
                                    </h3>
                                    <h4 class="project-category">
                                        Architecture
                                    </h4>
                                    <div class="project-zoom"></div>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="experience section">
    <div class="container">
                <div class="text-parallax" data-stellar-background-ratio="0.85"
                     style="background-image: url('img/bg/text-1.jpg');">
                    <div class="text-parallax-content">12</div>
                </div>
                <h4 class="experience-info wow fadeInRight"><span
                        class="text-primary">Years of successful work</span><br> in the market</h4>
            </div>
        </section>

      

       
<?php require_once 'footer.php';?>
     
