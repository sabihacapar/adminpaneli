<?php 



  
require_once 'admin/pages/inc-functions.php';
// @$id=intval($_GET["id"]);
/*$cek=$db->prepare("SELECT * FROM `renkler` WHERE  `id` DESC");
$cek->bindValue(":color",$id,PDO::PARAM_STR);
$row2 = $cek->fetch(PDO::FETCH_ASSOC);
$cek->execute();

$kahve ="red";*/
/**/
$sql=$db->prepare("SELECT * FROM `renkler` WHERE id=10");
$sql->execute();
while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
	
		$row["id"];
		$renk =$row["color"];
	 

}
$sql=$db->prepare("SELECT * FROM `renkler` WHERE id=14");
$sql->execute();
while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
	
		$row["id"];
		$grey =$row["color"];
	 

}
$sql=$db->prepare("SELECT * FROM `renkler` WHERE id=15");
$sql->execute();
while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
	
		$row["id"];
		$siyah =$row["color"];
	 

}
$sql=$db->prepare("SELECT * FROM `renkler` WHERE id=16");
$sql->execute();
while ($row=$sql->fetch(PDO::FETCH_ASSOC)) {
	
		$row["id"];
		$beyaz =$row["color"];
	 

}

?>

<html>
<head>
	<style type="text/css">
		@import 'css/bootstrap.min.css';
@import 'css/font-awesome.min.css';
@import 'css/animate.css';
@import 'css/hover.css';
@import 'css/magnific-popup.css';
@import 'css/owl.carousel.css';
@import 'css/owl.transitions.css';
@import 'css/settings.css';
@import 'css/layers.css';
@import 'css/navigation.css';

html {
    font-size: 75%;
    -webkit-font-smoothing: antialiased
}

body {
    font-family: montserratlight, sans-serif;
    font-size: 1em;
    line-height: 1.65;
    color: <?= $grey ?>
}

::-webkit-scrollbar {
    width: 8px;
    height: 8px
}

::-webkit-scrollbar-thumb {
    cursor: pointer;
    background: <?= $renk ?>
}

::selection {
    background-color: <?= $renk ?>;
    color: <?= $beyaz ?>
}

-webkit-::selection {
    background-color: <?= $renk ?>;
    color: <?= $beyaz ?>
}

::-moz-selection {
    background-color: <?= $renk ?>;
    color: <?= $beyaz ?>
}

@font-face {
    font-family: montserratlight;
    src: url(fonts/montserrat/Montserrat-Light.ttf);
    font-weight: 400;
    font-style: normal
}

@font-face {
    font-family: montserratsemibold;
    src: url(fonts/montserrat/Montserrat-SemiBold.ttf);
    font-weight: 400;
    font-style: normal
}

h1, .h1 {
    font-family: oswald, sans-serif;
    font-weight: 400;
    font-size: 8vmin;
    line-height: 1.2;
    letter-spacing: .32em;
    text-transform: uppercase;
    color: <?= $siyah ?>
}

h2, .h2 {
    font-family: oswald, sans-serif;
    font-weight: 400;
    font-size: 2.1875em;
    letter-spacing: .32em;
    text-transform: uppercase;
    color: <?= $siyah ?>
}

h3, .h3 {
    font-family: montserratsemibold;
    font-size: 1.875em;
    line-height: 1.1;
    font-weight: 400;
    color: <?= $siyah ?>
}

h4, .h4 {
    font-family: montserratsemibold;
    font-size: 1.125em;
    line-height: 1.35;
    font-weight: 400;
    color: <?= $siyah ?>;
    letter-spacing: .2em;
    text-transform: uppercase
}

h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a {
    color: inherit
}

h1 a:hover, .h1 a:hover, h2 a:hover, .h2 a:hover, h3 a:hover, .h3 a:hover, h4 a:hover, .h4 a:hover {
    text-decoration: none
}

p {
    margin-bottom: 1.6em
}

b, strong {
    font-family: montserrat, sans-serif
}

ul {
    list-style: none;
    padding-left: 0
}

a {
    color: <?= $renk ?>;
    -webkit-transition: color .3s ease-out;
    -o-transition: color .3s ease-out;
    transition: color .3s ease-out
}

a:hover, a:focus {
    color: <?= $renk ?>;
    outline: none
}

a:focus {
    text-decoration: none
}

.form-control, textarea.form-control {
    font-size: 1em;
    height: 3.625em;
    border-radius: .75em;
    padding-left: 22px;
    color: <?= $gri ?>;
    background-color: #f3f3f3;
    border: 1px solid #f3f3f3;
    -webkit-box-shadow: none;
    box-shadow: none;
    -webkit-appearance: none;
    -webkit-transition: all .15s;
    -o-transition: all .15s;
    transition: all .15s
}

textarea.form-control {
    height: 7.9em;
    padding-top: 1.1em;
    resize: none
}

.form-control:focus {
    border-color: <?= $renk ?>;
    background-color: <?= $beyaz ?>;
    outline: 0;
    -webkit-box-shadow: none;
    box-shadow: none
}

.form-control::-moz-placeholder {
    color: <?= $gri ?>;
    opacity: 1
}

.form-control:-ms-input-placeholder {
    color: <?= $gri ?>
}

.form-control::-webkit-input-placeholder {
    color: <?= $gri ?>
}

.form-control.error {
    border-color:<?= $renk ?>
}

.form-group {
    margin-bottom: 10px
}

.wobble-error {
    -webkit-animation: hvr-wobble-horizontal 1s ease-in-out 0s 1 normal;
    animation: hvr-wobble-horizontal 1s ease-in-out 0s 1 normal
}

label.error {
    display: none !important
}

.btn {
    font-family: montserratsemibold;
    position: relative;
    display: inline-block;
    border: .2em solid <?= $renk ?>;
    border-radius: 30px;
    padding: 1.1em 2.2em 1.05em;
    font-size: .875em;
    color: <?= $beyaz ?>;
    letter-spacing: .15em;
    text-transform: uppercase;
    text-decoration: none;
    background-color: <?= $renk ?>;
    border: 0;
    -webkit-transition: all .3s ease-out !important;
    transition: all .3s ease-out !important
}

.btn:hover, .btn:focus {
    color: <?= $beyaz ?>;
    background-color: #cc9f6b;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: none !important
}

.btn .icon-next {
    position: relative;
    top: -.1em;
    margin-left: .6em;
    vertical-align: middle
}

.btn-gray {
    background-color: #f2f2f2;
    color: #a7a7a7
}

.btn-shadow-1 {
    box-shadow: 0 15px 34px rgba(0, 0, 0, .18)
}

.btn-shadow-2 {
    box-shadow: 0 15px 34px rgba(197, 164, 126, .5)
}

.icon-next {
    display: inline-block;
    width: .94em;
    height: .75em;
    background: url(img/img-icon/next.png) 0 0 no-repeat;
    background-size: .94em .75em
}

.loader {
    position: fixed;
    overflow: hidden;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: <?= $beyaz ?>;
    color: <?= $beyaz ?>;
    text-align: center
}

.loader .page-lines .line {
    background-color: #ededed
}

.loader-brand {
    position: absolute;
    left: 0;
    width: 100%;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%)
}

.sk-folding-cube {
    margin: 20px auto;
    width: 40px;
    height: 40px;
    position: relative;
    -webkit-transform: rotateZ(45deg);
    transform: rotateZ(45deg)
}

.sk-folding-cube .sk-cube {
    float: left;
    width: 50%;
    height: 50%;
    position: relative;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1)
}

.sk-folding-cube .sk-cube:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: <?= $renk ?>;
    -webkit-animation: sk-foldCubeAngle 2.4s infinite linear both;
    animation: sk-foldCubeAngle 2.4s infinite linear both;
    -webkit-transform-origin: 100% 100%;
    -ms-transform-origin: 100% 100%;
    transform-origin: 100% 100%
}

.sk-folding-cube .sk-cube2 {
    -webkit-transform: scale(1.1) rotateZ(90deg);
    transform: scale(1.1) rotateZ(90deg)
}

.sk-folding-cube .sk-cube3 {
    -webkit-transform: scale(1.1) rotateZ(180deg);
    transform: scale(1.1) rotateZ(180deg)
}

.sk-folding-cube .sk-cube4 {
    -webkit-transform: scale(1.1) rotateZ(270deg);
    transform: scale(1.1) rotateZ(270deg)
}

.sk-folding-cube .sk-cube2:before {
    -webkit-animation-delay: .3s;
    animation-delay: .3s
}

.sk-folding-cube .sk-cube3:before {
    -webkit-animation-delay: .6s;
    animation-delay: .6s
}

.sk-folding-cube .sk-cube4:before {
    -webkit-animation-delay: .9s;
    animation-delay: .9s
}

@-webkit-keyframes sk-foldCubeAngle {
    0%, 10% {
        -webkit-transform: perspective(140px) rotateX(-180deg);
        transform: perspective(140px) rotateX(-180deg);
        opacity: 0
    }
    25%, 75% {
        -webkit-transform: perspective(140px) rotateX(0deg);
        transform: perspective(140px) rotateX(0deg);
        opacity: 1
    }
    90%, 100% {
        -webkit-transform: perspective(140px) rotateY(180deg);
        transform: perspective(140px) rotateY(180deg);
        opacity: 0
    }
}

@keyframes sk-foldCubeAngle {
    0%, 10% {
        -webkit-transform: perspective(140px) rotateX(-180deg);
        transform: perspective(140px) rotateX(-180deg);
        opacity: 0
    }
    25%, 75% {
        -webkit-transform: perspective(140px) rotateX(0deg);
        transform: perspective(140px) rotateX(0deg);
        opacity: 1
    }
    90%, 100% {
        -webkit-transform: perspective(140px) rotateY(180deg);
        transform: perspective(140px) rotateY(180deg);
        opacity: 0
    }
}

.layout {
    position: relative;
    overflow: hidden
}

.text-primary {
    color: <?= $renk ?>
}

.page-lines {
    position: absolute;
    z-index: -1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%
}

.page-lines .col-line {
    padding: 0
}

.page-lines .line {
    position: absolute;
    left: 0;
    width: 1px;
    height: 50000px;
    background-color: #f4f4f4
}

.page-lines .col-line:last-child .line:last-child {
    left: auto;
    right: 0
}

.row-base {
    margin-top: -3em
}

.col-base {
    margin-top: 3em
}

.section {
    position: relative;
    margin-top: 7.1em;
    margin-bottom: 7.1em
}

.section-header {
    position: relative
}

.section-title {
    text-align: center;
    margin: 0;
    margin-left: .32em
}

.fade-title-left, .fade-title-right {
    font-family: montserrat, sans-serif;
    font-weight: 700;
    font-size: 10.8em;
    line-height: 1;
    color: #000;
    position: absolute;
    left: 0;
    top: .03em;
    opacity: .035;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.fade-title-right {
    left: 100%
}

.section-content {
    margin-top: 7.1em
}

.header-inner .vertical-panel-content {
    bottom: auto;
    top: 12.2vmin
}

.brand-panel {
    position: absolute;
    z-index: 4;
    left: 0;
    top: 0;
    width: 39.47vmin;
    height: 40.7vmin;
    padding: 4.8vmin 2em;
    background-color: #f6f5f3;
    text-align: center;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s
}

.brand {
    display: inline-block;
    font-family: montserrat, sans-serif;
    font-weight: 700;
    font-size: 4vmin;
    line-height: 1;
    color: <?= $siyah ?>
}

.brand:hover, .brand:focus {
    color: <?= $siyah ?>;
    text-decoration: none
}

.brand-name {
    position: absolute;
    z-index: -1;
    bottom: -.4em;
    right: -.37em;
    font-family: montserrat, sans-serif;
    font-weight: 700;
    font-size: 8.75em;
    line-height: 1;
    opacity: .05
}

.slide-number {
    font-family: oswald, sans-serif;
    margin-top: 8vmin
}

.slide-number .current-number {
    font-size: 8vmin;
    letter-spacing: .1em;
    line-height: 1
}

.slide-number sup {
    display: inline-block;
    position: relative;
    top: -3px;
    font-size: 2vmin;
    letter-spacing: .1em;
    color: <?= $siyah ?>;
    vertical-align: top;
    margin-left: .46em
}

.slide-number sup .delimiter {
    display: inline-block;
    margin-right: .4em
}

.header-phone {
    font-family: oswald, sans-serif;
    font-weight: 300;
    font-size: .81em;
    letter-spacing: .32em;
    position: absolute;
    z-index: 3;
    color: <?= $beyaz ?>;
    left: 50vmin;
    top: 5.9vmin
}

@media (max-width: 480px) {
    .header-phone {
        display: none
    }
}

@media (min-width: 992px) and (max-width: 1200px) {
    .header-phone {
        display: none
    }
}

.vertical-panel, .vertical-panel-content {
    position: absolute;
    width: 19.735vmin;
    left: 0;
    bottom: 0;
    text-align: center;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s
}

.vertical-panel {
    z-index: 3;
    height: 10000px;
    background-color: #f6f5f3
}

.vertical-panel-content {
    z-index: 4
}

.vertical-panel-info {
    margin-bottom: 3.5vmin
}

.vertical-panel-info .line {
    height: 5vmin;
    width: 1px;
    margin: 15px auto 0;
    background-color: #c5c4c2
}

.vertical-panel-title {
    font-family: montserratsemibold;
    font-size: 10px;
    white-space: nowrap;
    text-transform: uppercase;
    letter-spacing: 1em;
    color: <?= $siyah ?>;
    position: relative;
    left: -6px;
    margin: 0 auto;
    width: 1px;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0
}

@media (max-height: 850px) {
    .vertical-panel-title {
        display: none
    }
}

.social-list {
    margin-bottom: 3.5vmin
}

.social-list li {
    margin-top: 3.8vmin
}

.social-list .fa {
    font-size: 2.4vmin;
    color: #c5c4c2
}

.social-list .fa:hover {
    color: <?= $renk ?>;
    text-decoration: none
}

.navbar-desctop {
    display: none;
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0;
    width: 100%;
    padding: 5.9vmin 0 0
}

.navbar-desctop .brand {
    display: none;
    position: relative;
    float: left;
    top: -.22em;
    font-size: 1.6em
}

.navbar-desctop-menu {
    float: right;
    font-family: oswald, sans-serif;
    font-weight: 300;
    font-size: .81em;
    letter-spacing: .32em;
    text-transform: uppercase;
    margin-bottom: 0
}

.navbar-desctop-menu li {
    position: relative;
    -webkit-perspective: 2000px;
    perspective: 2000px
}

.navbar-desctop-menu li a {
    display: block;
    text-decoration: none;
    color: <?= $beyaz ?>
}

.navbar-desctop-menu li a:hover, .navbar-desctop-menu .active > a {
    color: <?= $renk ?>
}

.navbar-desctop-menu > li {
    float: left;
    margin-left: 5.1em
}

.navbar-desctop-menu > li > a {
    color: <?= $beyaz ?>;
    background-color: transparent;
    margin-bottom: 1.5em
}

.navbar-desctop-menu li ul {
    position: absolute;
    z-index: 10;
    left: 100%;
    top: 60%;
    visibility: hidden;
    min-width: 200px;
    opacity: 0;
    box-shadow: 0 15px 35px rgba(0, 0, 0, .1);
    background: rgba(255, 255, 255, .95);
    -webkit-transition: all .3s ease-out;
    -moz-transition: all .3s ease-out;
    transition: all .3s ease-out
}

.navbar-desctop-menu > li > ul {
    left: -20px;
    margin-top: 0
}

.navbar-desctop-menu li:hover > ul {
    top: 0;
    visibility: visible;
    opacity: 1
}

.navbar-desctop-menu > li:hover > ul {
    top: 100%
}

.navbar-desctop-menu li li {
    border-bottom: 1px solid rgba(0, 0, 0, .05)
}

.navbar-desctop-menu li li:last-child {
    border-bottom: 0
}

.navbar-desctop-menu li li a {
    color: #000;
    padding: 12px 20px 10px
}

.navbar-desctop.affix {
    position: fixed;
    z-index: 5;
    top: 0;
    background-color: rgba(255, 255, 255, .95);
    padding: 1.3em 0 0;
    box-shadow: 0 0 35px rgba(0, 0, 0, .1)
}

.navbar-desctop.affix.affix-top {
    padding-top: 2.2em
}

.navbar-desctop.affix .brand {
    display: inline-block
}

.navbar-desctop.affix .navbar-desctop-menu li a {
    color: #000
}

.navbar-desctop.affix .navbar-desctop-menu li > a:hover, .navbar-desctop.affix .navbar-desctop-menu .active > a {
    color: <?= $renk ?>
}

.navbar-mobile {
    position: absolute;
    z-index: 2;
    left: 0;
    top: 0;
    width: 100%;
    padding: 6vmin 0
}

.navbar-mobile .brand {
    display: none;
    margin-left: 15px;
    font-size: 1.6em
}

.navbar-collapse {
    background-color: <?= $beyaz ?>
}

@media (max-height: 320px) {
    .navbar-collapse {
        max-height: 240px
    }
}

.navbar-toggle {
    padding: 0;
    margin-top: 0;
    margin-bottom: 0;
    border-radius: 0;
    border: 0
}

.navbar-toggle .icon-bar {
    background-color: <?= $beyaz ?>;
    height: 2px;
    width: 30px
}

.navbar-toggle .icon-bar + .icon-bar {
    margin-top: 5px
}

.navbar-toggle.collapsed .icon-bar {
    background-color: <?= $beyaz ?>
}

.navbar-nav-mobile {
    font-family: oswald, sans-serif;
    font-weight: 300;
    font-size: .9em;
    letter-spacing: .32em;
    text-transform: uppercase;
    padding-top: 1.2em;
    margin-bottom: 0
}

.navbar-nav-mobile li {
    position: relative;
    border-top: 1px solid #ececec
}

.navbar-nav-mobile li a {
    display: block;
    padding: 1em;
    color: #000;
    text-decoration: none
}

.navbar-nav-mobile > .current > a {
    color: <?= $renk ?>
}

.navbar-nav-mobile li a .fa-angle-down {
    position: relative;
    display: inline-block;
    vertical-align: middle
}

.navbar-nav-mobile > .current > a .fa-angle-down {
    top: -.2em;
    left: -.3em;
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg)
}

.navbar-nav-mobile > .active > a, .navbar-nav-mobile > .active > a:hover {
    background-color: <?= $renk ?>;
    color: <?= $beyaz ?>;
    -webkit-transition: none;
    -o-transition: none;
    transition: none
}

.navbar-nav-mobile ul {
    display: none
}

.navbar-nav-mobile li a:hover, .navbar-nav-mobile li .active > a {
    color: <?= $renk ?>
}

.navbar-mobile.affix {
    position: fixed;
    z-index: 5;
    background-color: <?= $beyaz ?>;
    box-shadow: 0 0 35px rgba(0, 0, 0, .1);
    padding: 1.2em 0
}

.navbar-mobile.affix .brand {
    display: inline-block
}

.navbar-mobile.affix .navbar-toggle .icon-bar {
    background-color: <?= $renk ?>
}

.main {
    position: relative;
    overflow: hidden;
    min-height: 420px
}

.main-inner {
    position: relative;
    z-index: 1;
    min-height: 0;
    padding: 33.7vmin 0 17vmin
}

.main-inner:after {
    content: '';
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
    top: 0;
    background-color: #171717;
    opacity: .6
}

.main-projects, .main-contacts {
    padding: 34.2vmin 0 34vmin
}

.main-project {
    padding: 33.7vmin 0 11vmin;
    background-size: cover;
    background-position: center 0
}

.main-contacts:after {
    content: '';
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
    top: 0;
    opacity: 1;
    background: -webkit-linear-gradient(bottom, rgba(39, 39, 39, 0.95) 0%, rgba(39, 39, 39, 0.95) 26%, rgba(39, 39, 39, 0.6) 100%);
    background: linear-gradient(to top, rgba(39, 39, 39, 0.95) 0%, rgba(39, 39, 39, 0.95) 26%, rgba(39, 39, 39, 0.6) 100%)
}

.main-header {
    position: relative;
    z-index: 2;
    color: <?= $beyaz ?>;
    text-align: right;
    padding-left: 38.5vmin
}

.main-header h1 {
    color: <?= $beyaz ?>;
    margin: 0;
    margin-right: -.32em
}

.main-inner .page-lines {
    z-index: 1;
    opacity: .15
}

.main-inner .page-lines .line {
    border-color: <?= $beyaz ?>
}

.main-blog .page-lines, .main-projects .page-lines, .main-project .page-lines, .main-contacts .page-lines {
    opacity: .08
}

.rev_slider {
    color: <?= $beyaz ?>;
    min-height: 420px
}

.rev_slider .btn {
    -webkit-transition: background-color .3s ease-out !important;
    transition: background-color .3s ease-out !important
}

.tp-caption {
    padding: 0 20px;
    text-align: right
}

.arrow-left, .arrow-right {
    position: absolute;
    z-index: 4;
    bottom: 4vh;
    cursor: pointer;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s
}

.arrow-left {
    left: 22vmin
}

.arrow-right {
    right: 15px
}

.arrow-left:after, .arrow-right:before {
    content: '';
    display: inline-block;
    vertical-align: middle;
    background-color: transparent;
    font-family: oswald, sans-serif;
    font-size: 1em;
    line-height: 1;
    letter-spacing: .32em;
    text-transform: uppercase;
    color: <?= $beyaz ?>
}

.arrow-left:after {
    content: 'Prev'
}

.arrow-right:before {
    content: 'Next'
}

.arrow-left:before, .arrow-right:after {
    content: '';
    display: inline-block;
    vertical-align: middle;
    width: 1.3em;
    height: 1em;
    opacity: .25;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.arrow-left:hover:before, .arrow-right:hover:after {
    opacity: 1
}

.arrow-left:before {
    background: url(img/img-icon/prev.png) 0 0 no-repeat;
    background-size: 1.3em 1em;
    margin-right: .82em
}

.arrow-right:after {
    background: url(img/img-icon/next.png) 0 0 no-repeat;
    background-size: 1.3em 1em;
    margin-left: .72em
}

.slide-title {
    font-family: oswald, sans-serif;
    font-size: 50px;
    letter-spacing: .32em;
    text-transform: uppercase
}

.slide-subtitle {
    font-size: 18px;
    line-height: 1.7
}

.bg-about {
    background: url(img/bg/about.jpg) 50% 0 no-repeat;
    background-size: cover
}

.entry {
    margin: 3.2em 0
}

.entry-title {
    font-size: 3.6em;
    margin: 0 0 1em
}

.entry-text {
    font-size: 1.6em;
    line-height: 1.6
}

.about .fade-title-left {
    top: 1em
}

.col-about-title {
    margin-top: 0;
    margin-bottom: 1.1em
}

.col-about-info p:last-child {
    margin-bottom: 0
}

.col-about-img {
    position: relative
}

.col-about-img img {
    display: block;
    box-shadow: 0 8px 25px rgba(0, 0, 0, .2)
}

.row-services {
    margin-left: -4.1em;
    margin-right: -4.1em
}

.col-service {
    padding: 0 4.1em
}

.service-item {
    margin-bottom: 2em
}

.service-item:last-child {
    margin-bottom: 0
}

.service-item h4 {
    margin-top: .8em;
    margin-bottom: 1.1em
}

.services .service-item h4 {
    margin-top: 1.25em
}

.service-item p:last-child {
    margin-bottom: 0
}

.objects {
    position: relative
}

.object-label {
    position: absolute;
    width: 1em;
    height: 1em;
    background-color: #e5bf93;
    border-radius: 50%;
    cursor: pointer
}

.popover.top {
    margin-top: -20px
}

.object-info {
    position: absolute;
    display: none;
    z-index: 1;
    left: 50%;
    bottom: 40px;
    width: 12.4em;
    margin-left: -6.2em;
    padding: 1.1em 1.3em 3em;
    border: 0;
    background-color: rgba(0, 0, 0, .6);
    border-radius: 4px;
    -webkit-box-shadow: none;
    box-shadow: none
}

.object-info.in {
    display: block
}

.object-info:before {
    content: '';
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -16px;
    width: 0;
    height: 0;
    border: 16px solid transparent;
    border-top: 14px solid rgba(0, 0, 0, .6)
}

.object-title {
    font-size: 1em;
    font-family: montserratsemibold;
    font-weight: 400;
    letter-spacing: .16em;
    text-transform: uppercase;
    color: <?= $renk ?>;
    padding: 0 0 1em;
    border-bottom: 1px solid rgba(249, 249, 249, .2);
    margin: 0 0 .5em
}

.object-content {
    font-family: montserratlight, sans-serif;
    font-size: .75em;
    line-height: 2.6;
    color: <?= $beyaz ?>;
    padding: 0
}

.popover.top > .arrow {
    border-top-color: transparent
}

.popover.top > .arrow:after {
    border-top-color: rgba(0, 0, 0, .6)
}

.bg-projects {
    position: relative;
    background: url(img/bg/projects.jpg) 50% 0 no-repeat;
    background-size: cover
}

.project {
    padding: 0;
    overflow: hidden
}

.project figure {
    position: relative
}

.project figure img {
    display: block;
    width: 100%;
    -webkit-transition: all 8s linear;
    -o-transition: all 8s linear;
    transition: all 8s linear
}

.project figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #111;
    opacity: .7;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.project.project-light figure:after {
    opacity: .4
}

.project figcaption {
    position: absolute;
    z-index: 1;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    margin: 3.2em 3.6em
}

.project-title {
    position: relative;
    top: 0;
    left: 0;
    margin: 0;
    font-family: oswald, sans-serif;
    font-weight: 400;
    font-size: 1.56em;
    line-height: 1.45;
    letter-spacing: .07em;
    color: <?= $beyaz ?>;
    text-transform: uppercase;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.project-category {
    position: absolute;
    left: 0;
    bottom: 0;
    margin: 0 0 -.8em;
    font-family: oswald, sans-serif;
    font-weight: 400;
    font-size: 14px;
    color: <?= $beyaz ?>;
    letter-spacing: .8em;
    -webkit-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    transform: rotate(-90deg);
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.project-zoom {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 9em;
    height: 9em;
    margin: -4.5em;
    border-radius: 50%;
    background-color: rgba(197, 164, 126, .84);
    overflow: hidden;
    opacity: 0;
    -webkit-transform: scale(.5);
    -ms-transform: scale(.5);
    -o-transform: scale(.5);
    transform: scale(.5);
    -webkit-transition: all .7s;
    -o-transition: all .7s;
    transition: all .7s
}

.project-zoom:after {
    content: '';
    position: absolute;
    left: 50%;
    top: 50%;
    width: 2.625em;
    height: 2.625em;
    background: url(img/img-icon/zoom.png) 0 0 no-repeat;
    background-size: cover;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%)
}

.project figure:hover:after {
    opacity: 0
}

.project figure:hover img {
    -webkit-transform: scale(1.4);
    transform: scale(1.4)
}

.project figure:hover .project-title {
    top: 30px;
    opacity: 0
}

.project figure:hover .project-category {
    opacity: 0;
    letter-spacing: 2em
}

.project figure:hover .project-zoom {
    opacity: 1;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    -o-transform: scale(1);
    transform: scale(1)
}

.owl-prev, .owl-next {
    position: absolute;
    top: 50%;
    font-family: oswald, sans-serif;
    font-size: 1em;
    letter-spacing: .32em;
    text-transform: uppercase;
    color: <?= $beyaz ?>;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s;
    opacity: .7
}

.owl-prev:hover, .owl-next:hover {
    opacity: 1
}

.owl-prev {
    left: .8em;
    padding-left: 35px;
    background: url(img/img-icon/prev.png) left 50% no-repeat;
    background-size: 1.3em 1em
}

.owl-next {
    left: auto;
    right: .8em;
    padding-right: 35px;
    background: url(img/img-icon/next.png) right 50% no-repeat;
    background-size: 1.3em 1em
}

.mfp-figure {
    box-shadow: none
}

.mfp-iframe-scaler {
    overflow: visible
}

.mfp-image-holder .mfp-close, .mfp-iframe-holder .mfp-close {
    padding: 0;
    margin-top: -10px;
    font-family: inherit;
    font-size: 40px;
    font-weight: 300;
    line-height: 0
}

img.mfp-img {
    min-height: 460px
}

.mfp-title {
    padding-right: 40px;
    font-size: 1.2em;
    line-height: 1.2;
    margin-top: 3px;
    text-transform: uppercase;
    letter-spacing: .1em;
    padding-bottom: 10px
}

.mfp-counter {
    top: 5px
}

.mfp-bg {
    background-color: #141414
}

.mfp-arrow-left:before, .mfp-arrow-left .mfp-b {
    display: none
}

.mfp-arrow-right:before, .mfp-arrow-right .mfp-b {
    display: none
}

.mfp-wrap .mfp-content {
    -webkit-perspective: 1300px;
    perspective: 1300px
}

.mfp-wrap .mfp-figure, .mfp-wrap .mfp-iframe-scaler {
    opacity: 0;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transform: scale(0) rotateY(60deg);
    -o-transform: scale(0) rotateY(60deg);
    transform: scale(0) rotateY(60deg)
}

.mfp-bg {
    opacity: 0;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s
}

.mfp-wrap .mfp-figure, .mfp-wrap .mfp-iframe-scaler {
    opacity: 0;
    -webkit-transition: .3s ease-in-out;
    -o-transition: .3s ease-in-out;
    transition: .3s ease-in-out;
    -webkit-transform: rotateY(-60deg);
    -ms-transform: rotateY(-60deg);
    -o-transform: rotateY(-60deg);
    transform: rotateY(-60deg)
}

.mfp-bg {
    opacity: 0;
    -webkit-transition: .5s;
    -o-transition: .5s;
    transition: .5s
}

.mfp-wrap.mfp-ready .mfp-figure, .mfp-wrap.mfp-ready .mfp-iframe-scaler {
    opacity: 1;
    -webkit-transform: rotateX(0);
    -ms-transform: rotateX(0);
    -o-transform: rotateX(0);
    transform: rotateX(0)
}

.mfp-ready.mfp-bg {
    opacity: .8
}

.mfp-wrap.mfp-removing .mfp-figure, .mfp-wrap.mfp-removing .mfp-iframe-scaler {
    opacity: 0;
    -webkit-transform: rotateX(-60deg);
    -ms-transform: rotateX(-60deg);
    -o-transform: rotateX(-60deg);
    transform: rotateX(-60deg)
}

.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
    cursor: url(img/zoom-out.html), zoom-out
}

.mfp-removing.mfp-bg {
    opacity: 0
}

.project-title-info {
    font-family: montserrat, sans-serif;
    font-weight: 700;
    font-size: 2vmin;
    text-transform: uppercase;
    letter-spacing: .2em;
    margin-top: 2.2em;
    margin-left: -1.8em
}

.project-title-info .project-info-item {
    display: inline-block;
    margin-left: 1.8em
}

.project-details-item {
    position: relative
}

.project-details-img {
    position: relative;
    padding: 0
}

.project-details-info {
    background-color: <?= $renk ?>;
    padding: 4.8em 3.1em;
    color: <?= $beyaz ?>
}

.project-details-title {
    position: relative;
    font-family: oswald, sans-serif;
    font-weight: 400;
    font-size: 1.9em;
    line-height: 1.5;
    text-transform: uppercase;
    color: <?= $beyaz ?>;
    margin: 0 0 .7em
}

.project-details-title:before {
    content: '';
    position: absolute;
    bottom: -.35em;
    width: 10em;
    border-top: 1px solid #ededed;
    left: -4.4em;
    width: 5.5em
}

.project-details-descr {
    font-size: 1.1em;
    line-height: 1.62
}

.project-details-descr p:last-child {
    margin-bottom: 0
}

.project-details-item:nth-child(even) .project-details-info {
    right: 0;
    left: auto;
    top: 13%;
    background-color: #212121
}

.experience {
    text-align: center
}

.text-parallax {
    background: no-repeat 0 0;
    display: inline-block
}

.text-parallax-content {
    font-family: oswald, sans-serif;
    font-weight: 700;
    font-size: 21.8em;
    line-height: 1;
    overflow: hidden;
    margin-bottom: 0;
    background: <?= $beyaz ?>;
    color: #363636;
    mix-blend-mode: lighten
}

.experience-info {
    position: relative;
    top: -.75em;
    font-family: oswald, sans-serif;
    font-size: 1.5625em;
    line-height: 1.45;
    letter-spacing: .06em;
    display: inline-block;
    text-align: left;
    margin: 0 0 0 .5em
}

.clients {
    text-align: center
}

.clients-list {
    margin: -3.8em -1.95em 0
}

.clients-list .client {
    display: inline-block;
    vertical-align: middle;
    padding: 3.8em 1.95em 0;
    margin: 0
}

.clients-list .client img {
    opacity: .2;
    display: block;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s
}

.clients-list .client a:hover img {
    opacity: 1
}

.bg-blog {
    background: url(img/bg/blog.jpg) 50% 0 no-repeat;
    background-size: cover
}

.blog {
    position: relative;
    margin-bottom: 3em;
    margin-right: 1px;
    background-color: <?= $beyaz ?>;
    box-shadow: 0 1px 15px rgba(0, 0, 0, .08)
}

.blog:last-child {
    margin-bottom: 0
}

.blog-thumbnail {
    position: static
}

.blog-thumbnail-bg {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 5px;
    padding: 0;
    border-radius: .25em 0 0 .25em;
    overflow: hidden;
    background-size: cover;
    background-position: 50% 0
}

.blog-thumbnail-img img {
    border-radius: .25em .25em 0 0
}

.blog-info {
    padding: 3.3em 3em
}

.blog-tags {
    font-family: montserratsemibold;
    margin-top: -.8em
}

.blog-tags a {
    display: inline-block;
    font-size: .75em;
    line-height: 1;
    padding: .77em 1.1em;
    border-radius: 2em;
    background-color: #ededed;
    text-transform: uppercase;
    color: #6f6f6f;
    margin-top: .8em;
    margin: .8em .7em 0 0;
    -webkit-transition: all .2s;
    transition: all .2s
}

.blog-tags a:hover {
    background-color: <?= $renk ?>;
    text-decoration: none;
    color: <?= $beyaz ?>
}

.blog-title {
    font-family: oswald, sans-serif;
    font-weight: 400;
    font-size: 1.5em;
    line-height: 1.333;
    margin: 1.8em 0 .8em
}

.blog-info p {
    margin-bottom: 0
}

.blog-meta {
    font-size: .88em;
    color: #b4b4b4;
    overflow: hidden
}

.blog-meta .author {
    float: left
}

.blog-meta .author a {
    font-family: montserratsemibold;
    color: #b4b4b4
}

.blog-meta .author a:hover {
    text-decoration: none;
    color: <?= $renk ?>
}

.blog-meta .time {
    float: right
}

.blog-info .blog-meta {
    border-top: 1px solid #ededed;
    margin-top: 1.7em;
    padding-top: 1.7em
}

.read-more {
    display: inline-block;
    font-family: montserratsemibold;
    font-size: .88em;
    letter-spacing: .1em;
    text-transform: uppercase
}

.read-more {
    padding-right: 2em;
    background: url(img/img-icon/read-more.png) right 50% no-repeat;
    -webkit-transition: all .3s;
    -o-transition: all .3s;
    transition: all .3s
}

.read-more:hover {
    text-decoration: none;
    background-position: 95% 50%
}

.blog-info .read-more {
    margin-top: 2.8em
}

.blog-details {
    margin: 10.2em 0 8.3em
}

.col-secondary {
    margin-top: 7.1em
}

.post-header {
    margin-bottom: 5em
}

.post-header h3 {
    font-family: oswald, sans-serif;
    font-weight: 400;
    font-size: 2.2em;
    line-height: 1.43;
    margin: 0
}

.post-header .blog-meta {
    margin-top: 2.45em
}

.post-thumbnail {
    margin-bottom: 2.5em
}

.post-thumbnail img {
    width: 100%;
    border-radius: .25em
}

.post .blog-tags {
    margin-top: 5.4em
}

.widget {
    margin-bottom: 3.65em
}

.widget-title {
    font-family: montserratsemibold;
    font-weight: 400;
    font-size: 1.3em;
    text-transform: uppercase;
    text-align: center;
    margin: 0 0 2.25em
}

.recent-post {
    margin-bottom: 1.7em;
    overflow: hidden
}

.recent-post:last-child {
    margin-bottom: 0
}

.recent-post-thumbnail {
    width: 9.32em;
    float: left
}

.recent-post-thumbnail img {
    border-radius: .25em;
    max-width: 100%
}

.recent-post-body {
    padding-left: 11.2em
}

.recent-post-title {
    font-family: oswald, sans-serif;
    font-weight: 400;
    font-size: 1.1em;
    line-height: 1.45;
    text-transform: none;
    letter-spacing: 0;
    margin: 0;
    position: relative
}

.recent-post-time {
    font-size: .88em;
    color: #b4b4b4;
    margin-top: .9em
}

.bg-contacts {
    background: url(img/bg/contacts.jpg) 50% 0 no-repeat;
    background-size: cover
}

.contacts .fade-title-right {
    left: 90%
}

.row-field {
    margin-left: -5px;
    margin-right: -5px
}

.col-field {
    padding: 0 5px
}

.col-message {
    display: none;
    margin-top: 20px
}

.col-address {
    font-size: 1.125em;
    line-height: 2.1;
    margin-top: 2em
}

.form-submit {
    margin-top: 1.2em
}

.success-message {
    display: none
}

.error-message {
    display: none
}

.success-message .fa {
    margin-right: 7px;
    font-size: 1.5em
}

.contact-details {
    position: relative;
    overflow: hidden;
    margin-top: -1px
}

.col-map {
    height: 35em
}

.gmap {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    padding: 0;
    height: 100%
}

.map-info {
    padding: 1.2em
}

.map-title {
    margin-bottom: 2em
}

.map-title h3 {
    margin: 0
}

.map-address-row {
    margin-top: 1em
}

.map-address-row .fa {
    float: left;
    margin: .35em .6em 0 0;
    width: 1.1em;
    text-align: center;
    color: <?= $renk ?>;
    font-size: 1.2em
}

.map-address-row .text {
    display: block;
    overflow: hidden;
    font-size: 1.15em
}

.contact-info {
    color: <?= $beyaz ?>;
    padding: 0;
    background: url(img/bg/contact-details.jpg) 50% no-repeat;
    background-size: cover
}

.contact-info-content {
    padding: 5.5em 5.6em;
    background-color: rgba(197, 164, 125, .95)
}

.contact-info-title {
    font-family: oswald, sans-serif;
    font-size: 80px;
    letter-spacing: .32em;
    text-transform: uppercase;
    color: <?= $beyaz ?>;
    opacity: .1;
    position: absolute;
    top: 100%;
    left: 100%;
    margin-top: -.5em;
    margin-left: -2.3em;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    -webkit-transform-origin: 0 0;
    transform-origin: 0 0
}

.contact-row {
    position: relative;
    z-index: 1;
    margin-bottom: 2.3em
}

.contact-row:last-child {
    margin-bottom: 0
}

.contact-row h4 {
    margin: 0 0 .8em;
    color: <?= $beyaz ?>
}

.contact-row .fa {
    float: left;
    width: 1.1em;
    margin-top: -.15em;
    padding: 1px;
    text-align: center;
    font-size: 1.3em;
    line-height: 1.25
}

.contact-body {
    padding-left: 2.6em
}

.contact-content {
    font-size: 1.3em
}

.phone-row {
    font-size: 1.3em;
    letter-spacing: .2em;
    margin-top: .5em
}

.footer {
    text-align: center;
    margin: 7.1em 0 5.5em;
    font-size: 12px;
    color: #aaa
}

.footer .brand {
    margin-top: -.45em;
    font-size: 3.4em
}

.author-link {
    font-family: montserrat, sans-serif;
    color: #d0d0d0
}

.author-link:hover {
    text-decoration: none
}

@media (min-width: 768px) {
    html {
        font-size: 85%
    }

    .arrow-left {
        top: 43.5vmin;
        bottom: auto
    }

    .arrow-right {
        left: 28vmin;
        right: auto;
        margin-left: 5em;
        top: 43.5vmin;
        bottom: auto
    }

    .entry {
        padding: 0 7.5em
    }

    .col-about-spec {
        padding: 0 4.4em
    }

    .owl-prev {
        left: 3.6em
    }

    .owl-next {
        right: 3.6em
    }

    .project-details {
        margin-top: 7.1em
    }

    .project-details-item {
        margin-bottom: 7.1em
    }

    .project-details-info {
        position: absolute;
        z-index: 1;
        left: 0;
        top: 13%;
        bottom: 13%;
        width: 55%
    }

    .project-details-item:nth-child(odd) .project-details-img {
        padding-left: 15px;
        padding-right: 15px
    }

    .project-details-item:nth-child(even) .project-details-img {
        padding-right: 15px;
        padding-left: 15px
    }
}

@media (min-width: 992px) {
    html {
        font-size: 92%
    }

    .text-center-md {
        text-align: center
    }

    .text-right-md {
        text-align: right
    }

    .text-left-md {
        text-align: left
    }

    .navbar-mobile {
        position: absolute;
        left: -50000px;
        top: -50000px
    }

    .col-about-img {
        padding-left: 0;
        left: -5px
    }

    .col-about-img img {
        max-width: calc(100% + 5px)
    }

    .project-details-item:nth-child(odd) .project-details-img {
        padding-left: 5px;
        padding-right: 15px
    }

    .project-details-item:nth-child(even) .project-details-img {
        padding-right: 5px;
        padding-left: 15px
    }

    .col-primary {
        padding-right: 2.2em
    }

    .col-secondary {
        margin-top: 10.62em;
        margin-left: -5px;
        padding: 0 10px 0 0
    }

    .row-field {
        margin-left: -15px
    }

    .col-map {
        position: static;
        height: 100%
    }
}

@media (min-width: 1200px) {
    html {
        font-size: 100%
    }

    .main-header {
        padding-left: 0
    }

    .project-details-info {
        width: 44%
    }
}

@media (max-height: 480px) {
    .arrow-left {
        top: 43.5vmin;
        bottom: auto
    }

    .arrow-right {
        left: 28vmin;
        right: auto;
        margin-left: 5em;
        top: 43.5vmin;
        bottom: auto
    }
}
	</style>
</head>
</html>
