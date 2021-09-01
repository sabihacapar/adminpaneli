<?php require_once 'admin/pages/inc-functions.php';  
 
 if(@$_POST["submit"]){
   //mesaj gönderebilmek için kod blokları
    $name = htmlspecialchars($_POST["name"],ENT_QUOTES,"UTF-8");
    $email = htmlspecialchars($_POST["email"],ENT_QUOTES,"UTF-8");
    $phone = htmlspecialchars($_POST["phone"],ENT_QUOTES,"UTF-8");
    $company= htmlspecialchars($_POST["company"],ENT_QUOTES,"UTF-8");
    $message= htmlspecialchars($_POST["message"],ENT_QUOTES,"UTF-8");

    $ekle =$db->prepare("INSERT INTO `iletisim` (`ad`,`email`,`telefon`,`sirket`,`mesaj`) VALUES (:ad, :email, :telefon,:sirket, :mesaj)");

    $ekle->bindValue(":ad",$name,PDO::PARAM_STR);
    $ekle->bindValue(":email",$email,PDO::PARAM_STR);
    $ekle->bindValue(":telefon",$phone,PDO::PARAM_STR);
    $ekle->bindValue(":sirket",$company,PDO::PARAM_STR);
    $ekle->bindValue(":mesaj",$message,PDO::PARAM_STR);

    if($ekle->execute()){
        //çalışıp çalışmadığını kontrol etmek için
        header("Location: contacts.php?info=ekle");

    }else{
       // print_r($ekle->errorInfo());
        header("Location: contacts.php?info=hata");

    }


}
require_once 'header.php';
?>



<div class="layout">

<main class="main main-inner main-contacts bg-contacts" data-stellar-background-ratio="0.6">
<div class="container">
<header class="main-header">
<h1>Contacts</h1>
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

<section class="contact-details">
<div class="col-map col-md-7">
<div id="map" class="gmap col-md-7"></div>
</div>
<div class="contact-info col-md-5 col-md-offset-7">
<div class="contact-info-content">
<div class="contact-info-title">Contacts</div>
<div class="phone contact-row">
<i class="fa fa-phone"></i>
<div class="contact-body">
<h4>Phone</h4>
<div class="phone-row">+0 543 554 44-25</div>
<div class="phone-row">+0 543 554 44-25</div>
<div class="phone-row">+0 543 554 44-25</div>
</div>
</div>
<div class="contact-row">
<i class="fa fa-envelope"></i>
<div class="contact-body">
<h4>Email</h4>
<div class="contact-content"><a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4720282635242f0723282a262e296924282a">[email&#160;protected]</a></div>
</div>
</div>
<div class="contact-row">
<i class="fa fa-map-marker"></i>
<div class="contact-body">
<h4>Address</h4>
<div class="contact-content">USA, New York,<br>648 Ivah Street Apt. 375</div>
</div>
</div>
</div>
</div>
</section>

<section id="objects" class="objects section">
<div class="container">
<header class="section-header">
<h2 class="section-title">We are <span class="text-primary">worldwide</span></h2>
</header>
<div class="section-content">
<div class="objects">
<img alt="" class="img-responsive" src="img/map.png">

<div class="object-label" style="left:12.6%; top:42%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="452329243129203c6b212a2b0532202c36362b24316b2820">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 25.7%; top: 39.1%;">
<div class="object-info in">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a7c767b6e767f63347e75745a6d7f736969747b6e34777f">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 32.2%; top: 80.6%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="56303a37223a332f783239381621333f2525383722783b33">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 47.3%; top: 34.5%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87e1ebe6f3ebe2fea9e3e8e9c7f0e2eef4f4e9e6f3a9eae2">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 50.7%; top: 20.4%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a5c3c9c4d1c9c0dc8bc1cacbe5d2c0ccd6d6cbc4d18bc8c0">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 64.4%; top: 22.4%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bddbd1dcc9d1d8c493d9d2d3fdcad8d4ceced3dcc993d0d8">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 82.2%; top: 32.6%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dfb9b3beabb3baa6f1bbb0b19fa8bab6acacb1beabf1b2ba">[email&#160;protected]</a><br>
713 Dibbert Bridge
</div>
</div>
</div>
<div class="object-label" style="left: 84.4%; top: 82.3%;">
<div class="object-info">
<h3 class="object-title">New York</h3>
<div class="object-content">
+0 595-510-1352<br>
<a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="11777d70657d74683f757e7f5166747862627f70653f7c74">[email&#160;protected]</a><br>
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
                    <h2 class="section-title">Get <span class="text-primary">in touch</span></h2>
                    <strong class="fade-title-right">contacts</strong>
                </header>
                <div class="section-content">
                    <div class="row-base row">
                        <div class="col-address col-base col-md-4">
                            +7 (212) 654-33-35<br>
                            +7 (212) 287-85-22<br>
                            <a href="http://paul-themes.com/cdn-cgi/l/email-protection" class="__cf_email__"
                               data-cfemail="761f1810193611191704151e5815191b">[email&#160;protected]</a><br>
                            USA, New York, 57 Quigley Bridge
                        </div>
                        <div class="col-base  col-md-8">
                            <form class="js-ajax-form">
                                <div class="row-field row">
                                    <div class="col-field col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" required
                                                   placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-field col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="company"
                                                   placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-field col-sm-12 col-md-4">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message"
                                                      placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-message col-field col-sm-12">
                                        <div class="form-group">
                                            <div class="success-message"><i class="fa fa-check text-primary"></i> Thank
                                                you!. Your message is successfully sent...
                                            </div>
                                            <div class="error-message">We're sorry, but something went wrong</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-submit text-right">
                                    <input type="submit" class="btn btn-shadow-2 wow swing" value="Send">
                                    <i class="icon-next"></i></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php require_once 'footer.php' ?><!-- footer dosyasının uzantısı -->