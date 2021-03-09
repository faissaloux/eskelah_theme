<?php  get_header();  ?>


<?php global $theme_setting;  ?>
<?php global $vectors;  ?>


<?php get_main_header(); ?>


<section class="main-hero">
    <div class="container">
        <div class="col-md-6">
            <div class="hero-content">


                <style>
                @media screen and (min-width: 800px) {
                    .dlkdlkdldkldkdlkd {
                        display: none !important;
                    }
                }

                .icon {
                    height: 100px;
                }

                .icon-box .content {
                    line-height: 22px;
                }

                .showreal {
                    text-transform: uppercase !important;
                    font-family: 'Nexa';
                }

                section.main-hero {
                    height: inherit !important;
                    padding-bottom: 100px;
                }

                section.maintestimenials {
                    margin-top: -60px !important;
                    padding-bottom: 20px;
                    padding-top: 0;
                    position: relative;
                }

                .hero-content {
                    margin-top: 110px;
                }

                section.why-esklah {
                    padding-top: 40px !important;
                    padding-bottom: 70px !important;
                }

                .eskelah-team.home_team {
                    padding-top: 50px;
                }

                .service-home-content {
                    margin-top: 0;
                }

                section.service_home.circle_shape.right_shape {
                    padding-top: 60px;
                }
                </style>
                <div class="logo-phone-main hidden-md hidden-lg hidden-sm">
                    <img class='dlkdlkdldkldkdlkd' src="<?php echo $vectors; ?>logo-main-header.png" alt="">
                </div>


                <h2>
                    <span class="header-title-element underline-animation">إبداع،</span>
                    <span class="header-title-element underline-animation">انتشار،</span>
                    <span class="header-title-element underline-animation">انبهار</span>
                    <span class="header-title-element">...</span>
                </h2>
                <p>
                    هذا ما ستأخذه من عملك معنا في الإنتاج المرئي و التسويق الرقمي
                </p>
                <div class="take_action">
                    <a href="javascript:;" data-toggle="modal" data-target="#video_show" class="btn">شاهد <span
                            class="showreal">show real</span></a>
                    <a id="demandeNow" href="javascript:;" class="btn">اطلب عرض</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="hero-img"><img src="<?php echo $vectors; ?>/home/hero.png" alt=""></div>
        </div>
    </div>
</section>


<section class="about-home">
    <div class="container">
        <div class="col-md-6">
            <div class="about-right">
                <a href="javascript:;" data-toggle="modal" data-target="#video_show">
                    <span class="videoplay"><img src="<?php echo $vectors; ?>/play.png" class="videoplayimg"></span>
                    <img src="<?php echo $vectors; ?>/home/man.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="col-md-6" id="counters-eskelah">
            <div class="col-md-12">
                <div class="about-left">
                    <h3 class="about-left-title">نبحر لالتقاط الكنوز!</h3>
                    <h5 class="about-left-subtitle">نحن هنا لركوب موجة جديدة</h5>
                    <p class="about-left-text">
                        نصنع في إسكلة حلولا متكاملة من خدمات الإنتاج المرئي و التسويق الرقمي و تطوير الهويات التجارية،
                        من البحث و الإعداد إلى الإنتاج و الإطلاق!
                    </p>
                </div>
            </div>
            <div class="col-md-12 about-left-bottom">
                <div class="col-md-4 text-right" style="padding-right: 0;">
                    <div class="about-left-stats">
                        <span class="col-12 nexa" id="first-counter">50</span>
                    </div>
                    <div>تحد كون خبرتنا</div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="about-left-stats">
                        <span class="col-12 nexa" id="second-counter">44</span>
                    </div>
                    <div>شريك راض</div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="about-left-stats">
                        <span class="col-12 nexa" id="third-counter">10</span>
                    </div>
                    <div>قطاعات مدركينها!</div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
.serviceImg img {
    max-width: 150px;
}
</style>

<section class="service_home circle_shape right_shape">
    <div class="container">
        <div class="col-md-12">
            <div class="service-home-content">
                <h3 class="text-center">خدماتنا</h3>
                <p class="text-center">
                    يعمل طاقمنا على ثلاث أرصفة أساسية<br>
                    في المرفأ
                </p>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 20px;">

            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="<?php echo $vectors; ?>/services2/XMLID_1069_.png" alt="Image"></figure>
                    <h3> الإنتاج المرئي</h3>
                    <small>
                        <ul>
                            <li>الأفلام الإعلانية</li>
                            <li>الأفلام الوثائقية</li>
                            <li>التصوير الفوتوغرافي</li>
                            <li>الرسوم المتحركة</li>
                        </ul>
                    </small>
                    <a href="/visual-production/">
                        <span class="plus">+</span>
                        <span class="text">اعرف المزيد</span>
                    </a>
                </div>
                <!-- end icon-content -->
            </div>

            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="<?php echo $vectors; ?>/mainservice/01.png" alt="Image"></figure>
                    <h3> التسويق الرقمي</h3>
                    <small>
                        <ul>
                            <li>صناعة المحتوى الإبداعي</li>
                            <li>صناعة الحملات الإعلانية</li>
                            <li>إدارة منصات التواصل</li>
                            <li>الترويج الرقمي</li>
                        </ul>
                    </small>
                    <a href="/digital-marketing/">
                        <span class="plus">+</span>
                        <span class="text">اعرف المزيد</span>
                    </a>
                </div>
                <!-- end icon-content -->
            </div>

            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="https://eskelah.com/wp-content/uploads/2019/05/service1.png" alt="Image"></figure>
                    <h3>بناء الهوية التجارية</h3>
                    <small>
                        <ul>
                            <li>صناعة الهوية البصرية و إعادة بنائها</li>
                            <li>صناعة الإسم التجاري و تطويره</li>
                            <li>تطوير دليل الهوية</li>
                        </ul>
                    </small>
                    <a href="/digital-marketing/">
                        <span class="plus">+</span>
                        <span class="text">اعرف المزيد</span>
                    </a>
                </div>
                <!-- end icon-content -->
            </div>

        </div>
    </div>
</section>



<section class="why-esklah">
    <div class="container">
        <div class="title-section text-center">
            <h2>ما الذي يميّز إسكلة؟</h2>
            <span class="diviWhy"></span>
        </div>
        <div class="col-md-4">
            <div class="icon-box">
                <div class="icon">
                    <img class="index-creative-img" src="<?php echo $vectors; ?>/home/a1.png" alt="" />
                </div>
                <div class="heading">
                    <h2>الإبداع</h2>
                </div>
                <div class="content">
                    التجديد و الإبتكار من شيمنا<br> و اتقائهما بالهدف و الأثر أصل<br> نحرص عليه!
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="icon-box">
                <div class="icon">
                    <img class="index-rot-img" src="<?php echo $vectors; ?>/home/a2.png" alt="" />
                </div>
                <div class="heading">
                    <h2>المحلية</h2>
                </div>
                <div class="content">
                    يفهم طاقم عملنا<br> البيئة السعودية جيدا،<br> فهو منها و لها يعمل!
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="icon-box">
                <div class="icon">
                    <img class="index-heart-img" src="<?php echo $vectors; ?>/home/a3.png" alt=""
                        style="margin-top: 24px;" />
                </div>
                <div class="heading">
                    <h2>الشغف</h2>
                </div>
                <div class="content">
                    قادنا شغفنا إلى تحديات <br>كبيرة، و كانت ثقة شركائنا<br> و مهارات طاقمنا مصدر نجاحنا!
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Eskelah Team -->
<section class="eskelah-team home_team">
    <div class="container">
        <div class="title-section text-center">
            <h2>فريق اسكلة</h2>
            <h3 class="light">جنود الخفاء الذي يخرجون الإبداع الى أرض الواقع</h3>
        </div>
        <div class="row">
            <div class="row team-row">
                <div class="team-col col-md-2">
                    <div class="sales-team">
                        <figure><img src="<?php echo $vectors ?>/team/Abdullah.jpg" alt="Abdullah"></figure>
                        <div class="infos">
                            <h6>عبد الله التركي</h6>
                            <small class="light">المؤسس و المدير التنفيذي</small>
                        </div>
                        <!-- end infos -->
                    </div>
                    <!-- end sales-team -->
                </div>

                <div class="team-col col-md-2">
                    <div class="sales-team">
                        <figure><img src="<?php echo $vectors ?>/team/Ola.jpg" alt="Ola"></figure>
                        <div class="infos">
                            <h6>علا عامر</h6>
                            <small class="light">مدير قسم التسويق الرقمي</small>
                        </div>
                        <!-- end infos -->
                    </div>
                    <!-- end sales-team -->
                </div>

                <div class="team-col col-md-2">
                    <div class="sales-team">
                        <figure><img src="<?php echo $vectors ?>/team/Bassam.jpg" alt="Bassam"></figure>
                        <div class="infos">
                            <h6>بسام الشرعبي</h6>
                            <small class="light">مدير قسم الإنتاج المرئي</small>
                        </div>
                        <!-- end infos -->
                    </div>
                    <!-- end sales-team -->
                </div>

                <div class="team-col col-md-2">
                    <div class="sales-team">
                        <figure><img src="<?php echo $vectors ?>/team/Bayader.jpg" alt="Bayader"></figure>
                        <div class="infos">
                            <h6>بيادر ثامر</h6>
                            <small class="light">مدير محتوى</small>
                        </div>
                        <!-- end infos -->
                    </div>
                    <!-- end sales-team -->
                </div>
            </div>

            <div class="row team-row" style="margin-top: 20px;">

                <div class="team-col col-md-2">
                    <div class="sales-team">
                        <figure><img src="<?php echo $vectors ?>/team/Saeed.jpg" alt="Saeed"></figure>
                        <div class="infos">
                            <h6>سعيد قايد</h6>
                            <small class="light">مدير إنتاج</small>
                        </div>
                        <!-- end infos -->
                    </div>
                    <!-- end sales-team -->
                </div>

                <div class="team-col col-md-2">
                    <div class="sales-team">
                        <figure><img src="<?php echo $vectors ?>/team/default-female-avatar.jpg" alt="Ruba"></figure>
                        <div class="infos">
                            <h6>ربى الغامدي</h6>
                            <small class="light">مدير مشاريع</small>
                        </div>
                        <!-- end infos -->
                    </div>
                    <!-- end sales-team -->
                </div>

                <div class="team-col col-md-2">
                    <div class="sales-team sales-team-new" id="sendcv">
                        <div class="infos new-member">
                            <h6>
                                <span class="you">أنت</span><br>
                                <span class="text light">أرسل لنا سيرتك الذاتية</span>
                            </h6>
                        </div>
                        <!-- end infos -->
                    </div>
                    <!-- end sales-team -->
                </div>
            </div>

        </div>
    </div>
</section>
<!--// Eskelah Team -->


<section class="clients ">
    <?php
        global $wpdb;
        $t_name = $wpdb->prefix.'images_gallery';
        $images = $wpdb->get_results("SELECT * FROM $t_name");
    ?>

    <div class="container text-center">
        <div class="title-section">
            <h2>
                شركاؤنا أصدقاؤكم
            </h2>
            <span class="divi"></span>
        </div>

        <!-- For the Phone-->
        <div class=" hidden-md hidden-sm hidden-lg">
            <div class="owl-carousel owl-theme ">
                <?php foreach($images as $image): $image = unserialize($image->image);   ?>
                <div class="item">
                    <div class="clientBox">
                        <a href="javascript:;">
                            <img src="<?php echo $image['logo'] ?>" alt="">
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- For the Computer -->
        <div class="col-md-12 hidden-xs">
            <div class="owl-carousel owl-theme ">
                <?php foreach($images as $image): $image = unserialize($image->image);   ?>
                <div class="item">
                    <div class="clientBox">
                        <a href="javascript:;">
                            <img src="<?php echo $image['logo'] ?>" alt="">
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="maintestimenials ">
    <div class="container text-center">

        <div class="title-section">
            <h2>نياشين فخر و اعتزاز</h2>
            <span class="divi"></span>
        </div>



        <div class="col-sm-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">




                    <?php

                    global $wpdb;
                    $t_name = $wpdb->prefix.'clients_testimonials';
                    $clients = $wpdb->get_results("SELECT * FROM $t_name");


                    ?>




                    <?php $i = 0; ?>
                    <?php foreach($clients as $image): $image = unserialize($image->image);   ?>

                    <div class="item carousel-item <?php echo ($i == 0 ) ? 'active' : '' ?>">

                        <div class="col-sm-6 col-md-offset-3">
                            <div class="testimonial">
                                <p>
                                    <?php echo $image['description'] ?>
                                </p>
                            </div>
                            <div class="media">
                                <div class="media-left d-flex mr-3">
                                    <img src="<?php echo $image['logo'] ?>" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="overview">

                                        <div class="details"> <?php echo $image['title'] ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <?php $i++; ?>
                    <?php endforeach; ?>


                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-chevron-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>







    </div>
</section>

<?php get_simple_contact(); ?>

<!-- جلب محتوى الفوتر -->
<?php get_main_footer(); ?>

<!-- جلب الفوتر -->
<?php get_footer(); ?>