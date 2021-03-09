<?php /* Template Name: التسويق الرقمي */ ?>

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
            <h1 class="main-title ">التسويق الرقمي</h1>
            
            <h3 class="text-right">
            نبني هنا تواجدك الرقمي، من الفكرة إلى الإحصاء و التطوير، بتفعيل منصاتك الرقمية: لتبقى دائما في ذهن فئتك المستهدفة، ضمن هذه الخدمات:
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
            <h3 class="service-divider">صناعة الأفكار الإبداعية</h3>
        </div>
        <div class="col-md-8">
            <div class="service-paragraphe">
                <p>
                تصنع الأفكار العظيمة هنا، لترويج رسائلك أو منتجك في إطار فكرة إبداعية، غير مسبوقة. من خلال المنشورات اليومية أو الحملات الرقمية.
                </p>
            </div>
        </div>
         </div>
    </section>
 
    <section class="service-section">
        <div class="col-md-8 col-md-offset-2">
        <div class="col-md-4">
            <div class="service-img"><img src="<?php echo $vectors; ?>/services1/icons-06.png" alt=""></div>
            <span class="service-divider"></span>
            <h3 class="service-divider">كتابة المحتوى الإبداعي</h3>
        </div>
        <div class="col-md-8">
            <div class="service-paragraphe">
                <p>
                 نطوق أنفسنا هنا وفق رسائلك و نرتدي خوذة مشروعك، لكتابة محتوى نصي إبداعي، أصيل، يتحدث بلغة جمهورك و بروح علامتك التجارية.
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
            <h3 class="service-divider">إدارة مواقع التواصل</h3>
        </div>
        <div class="col-md-8">
            <div class="service-paragraphe">
                <p>
                نعيش في العالم الرقمي، نفهم متطلباته المتجددة، لذلك دعنا نساعدك على إدارة مواقع التواصل الإجتماعي و تحسين التفاعل مع مجتمعك الرقمي.
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
            <h3 class="service-divider">الترويج الرقمي</h3>
        </div>
        <div class="col-md-8">
            <div class="service-paragraphe">
                <p>
                إن كنت تود أن يصل محتواك الإعلاني لشرائح جديدة في منصات التواصل الإجتماعي، نستطيع في هذه المحطة مساعدتك على إعداد حملة ترويجية على المنصات الرقمية ، مع إعداد تقارير و إحصائيات لأداء حملتك.
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
