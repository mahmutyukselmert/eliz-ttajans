<?php require 'init.php'; ?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TT Ajans</title>
    <?php include 'include/head.html'; ?>
</head>

<body>
    <?php include 'include/header.html'; ?>
    <?php include 'include/hero-section.html'; ?>

    <section class="page-one-section homepage-first-bg pt-5">
        <div class="bg-icon"></div>
        <div class="container pt-5">
            <div class="row justify-content-between first-content-box">
                <div class="col-lg-6">
                    <h2 class="section-title scroll-reveal-left">Profesyonel Hava Çekimi, Etkileyici Sunum!</h2>
                    <div class="content scroll-reveal-bottom">
                        <p>
                            Ülkenin dört bir yanında son derece yetenekli hava kameramanları aracılığıyla her şeyi
                            erişilebilir hale getiriyor. Spesifikasyonlarınıza göre uygun fiyatlandırmayla, nefes kesici
                            havai videoları sizin için kullanıma sunuyoruz.
                        </p>
                    </div>
                    <a href="#" class="btn btn-custom scroll-reveal-left">Hakkımızda</a>
                </div>
                <div class="col-lg-5">
                    <video class="loop-video" src="./assets/media/profesyonel-hava-cekimi-dron.mp4" autoplay muted
                        loop></video>
                </div>
            </div>
            <div class="left-cloud"></div>
            <div class="right-cloud"></div>
        </div>

        <div class="home-page-story-image-section">
            <div class="container py-5">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <img src="./assets/images/gorsel-hikayeniz-dron.webp" class="img-fluid drone" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="section-title scroll-reveal-right">Görsel Hikayenizi Yüksekten Yazıyoruz!</h2>
                        <div class="content scroll-reveal-bottom">
                            <p>Filme alınmasını veya yukarıdan çekilmesini istediğiniz proje veya etkinlik ne olursa olsun,
                                bizimle temasa geçerek sipariş verebilir ve projenizi bizimle planlayabilirsiniz.
                                Sadece paket, tarihi ve yeri seçin, ayrıca istediğiniz özel talimatları da ekleyin. Gerisini
                                biz halledeceğiz. Çekimde hazır bulunmanıza bile gerek yok. </p>
                        </div>
                        <a href="#" class="btn btn-custom scroll-reveal-right">NASIL ÇALIŞIYORUZ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-services-section py-5">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-12">
                    <h3>Servis ve Hizmetlerimiz</h3>
                </div>
            </div>
            <div class="row g-4">
                <?php include 'include/services-section.html'; ?>
            </div>
        </div>
    </section>

    <section class="home-pagevideo-section py-lg-5">
        
        <?php include 'include/video-section.html'; ?>

        <div class="container py-lg-5">
            <div class="row footer-contact-row align-items-center justify-content-center">
                <div class="col-lg-12 text-center">
                    <p>Hizmetlerimiz hakkında bilgi almak için bize ulaşın.</p>
                    <a href="bize-ulasin.php" class="btn btn-custom">Bize Ulaşın</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'include/footer.html'; ?>


</body>
</html>