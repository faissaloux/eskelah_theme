<?php /* Template Name: الهوية التجارية */ ?>

<!-- جلب الهيدر -->
<?php  get_header();  ?>

<!-- جلب اعدادات القالب من ريداكس فريمورك -->
<?php global $theme_setting;  ?>
<?php global $vectors;  ?>

<!-- جلب محتوى الهيدر -->
<?php get_main_header(); ?>  

<style>
    a.btn.btn-call-to-action {
        position: relative;
        top: -29px;
    }

    .service-section:nth-child(even) {
        background: #FAFBFD;
    }
</style>
<div style="margin-bottom: 100px;">
    <!-- about us eskelah team -->
    <section class="service-tite services1">
        <div class="col-md-6 col-md-offset-3 col-sm-12 text-center">
           <img src="<?php echo $vectors; ?>/services1/icons-04.png" alt="">
           
           <div class="page-title">
            <h1 class="main-title ">بناء الهوية التجارية</h1>
            
            <h3 class="text-right">
            نبني هنا روح علامتك التجارية، من الفلسفة إلى أسلوب الظهور للفئة المستهدفة، ضمن هذه الخدمات:
            </h3>
            </div>
        </div>
    </section>
    <!--// about us eskelah team -->

  
    <section class="service-section">
        <div class="col-md-8 col-md-offset-2">
        <div class="col-md-4">
            <div class="service-img"><img src="<?php echo $vectors; ?>/services1/icons-06.png" alt=""></div>
            <span class="service-divider"></span>
            <h3 class="service-divider">صناعة الهوية البصرية</h3>
        </div>
        <div class="col-md-8">
            <div class="service-paragraphe">
                <p>
                نصنع هنا الوجود المرئي لشركتك من الشعار، الألوان، الخطوط و كافة الوسائل المرئية. لتواجه علامتك التجارية السوق وفق رؤيتك و رسالتك و قيمتك.
                </p>
            </div>
        </div>
         </div>
    </section>
 
    <section class="service-section">
        <div class="col-md-8 col-md-offset-2">
        <div class="col-md-4">
            <div class="service-img"><img src="<?php echo $vectors; ?>/services1/icons-08.svg" alt=""></div>
            <span class="service-divider"></span>
            <h3 class="service-divider">صناعة الإسم التجاري</h3>
        </div>
        <div class="col-md-8">
            <div class="service-paragraphe">
                <p>
                نختار لك هنا إسما جاذبا و فريدا ينمو معك و يتناسب مع موقعك الحالي، و توسعاتك المستقبلية، و يعكس أفكارك.
                </p>
            </div>
        </div>
         </div>
    </section>
    <section class="service-section">
       <div class="col-md-8 col-md-offset-2">
        <div class="col-md-4">
            <div class="service-img"><img src="<?php echo $vectors; ?>/services1/icons-07.png" alt=""></div>
            <span class="service-divider"></span>
            <h3 class="service-divider">تطوير دليل الهوية</h3>
        </div>
        <div class="col-md-8">
            <div class="service-paragraphe">
                <p>
                    نعمل هنا على تطوير أدلة الهوية البصرية، تناسب توسعك، و تعزز قيمة علامتك التجارية. لتحظى بقيمة سوقية إضافية.
                </p>
            </div>
        </div>
        </div>
    </section>

    <div class="col-md-12 text-center">
        <div class="button-service-contact">
            <a href='javascript:;' id="demandeNow" class="btn btn-call-to-action">
               أطلب الخدمة الآن
            </a>
        </div>
    </div>
</div>

<?php get_main_footer(); ?>
<?php get_footer(); ?>
