<?php /* Template Name: خدماتنا */ ?>

<!-- جلب الهيدر -->
<?php  get_header();  ?>

<!-- جلب اعدادات القالب من ريداكس فريمورك -->
<?php global $theme_setting;  ?>
<?php global $vectors;  ?>

<!-- جلب محتوى الهيدر -->
<?php get_main_header(); ?>  


<style>
    .serviceBox .serviceDescription {
        height: 100px;
    }
    .ServicesPageHeader{
        border-bottom: 4px solid #FFBE2E;
        position: relative;
        top: -105px;
    }
    .ServicesPageHeader .container h2{
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%,-220%);
        color: #000;
    }
    .ServicesPageHeader .container h4{
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%,-220%);
        color: #000;
        text-align: center;
    }
</style>
  
 
<section class="ServicesPageHeader">
    <div class="container">
        <h2>
            <span class="title eskelah undelined">الخدمات</span>
        </h2>
        <h4 class="sub-title">
            نعمل كما يعمل ملاحو مقصورة، في تحديد الوجهات<br>
            الصحيحة، عبر هذه الخدمات:
        </h4>
        <img src="<?php echo $vectors; ?>/about/about_us_header.png"  />
    </div>
</section>

<section class="eskelahServicesBoxes">
    
    
    <div class="container">
        <div class="col-md-12">
           
           
            <div class="col-md-4">
                <div class="serviceBox">
                    <div class="serviceImg visual-production-serviceImg"><img src="<?php echo $vectors; ?>/services2/XMLID_1069_.png" alt=""></div>
                    <h3 class="serviceTitle">الإنتاج المرئي</h3>
                    <p class="serviceDescription">
                        نعاونك على حبك ظهورك المرئي، من الفكرة إلى الإخراج، بأفضل الطرق المتبعة في الكتابة و الإنتاج و بأحدث المعدات.
                    </p>
                    <div class="serviceButton">
                        <a href="http://eskelah.test/visual-production/" class="btn">اعرف المزيد عن الخدمة </a>
                    </div>
                </div>
           </div>

            <div class="col-md-4">
             <div class="serviceBox">
                <div class="serviceImg"><img src="<?php echo $vectors; ?>/mainservice/01.png" alt=""></div>
                <h3 class="serviceTitle">التسويق الرقمي</h3>
                <p class="serviceDescription">
                    نبني هنا تواجدك الرقمي، من الفكرة إلى الإحصاء و التطوير، بتفعيل منصاتك الرقمية: لتبقى دائما في ذهن فئتك المستهدفة.
                </p>
                <div class="serviceButton">
                    <a href="http://eskelah.test/digital-marketing/" class="btn">اعرف المزيد عن الخدمة </a>
                </div>
            </div>
           </div>
           
           <div class="col-md-4">
            <div class="serviceBox">
                <div class="serviceImg"><img src="<?php echo $vectors; ?>/mainservice/02.png" alt=""></div>
                <h3 class="serviceTitle">بناء الهوية التجارية</h3>
                <p class="serviceDescription">
                    نبني هنا روح علامتك التجارية، من الفلسفة إلى أسلوب الظهور للفئة المستهدفة.
                </p>
                <div class="serviceButton">
                    <a href="http://eskelah.test/branding/" class="btn">  اعرف المزيد عن الخدمة  </a>
                </div>
            </div>
           </div>
           
        </div>
        
        
    </div>
    
    
    <a href="<?php echo esc_url( get_page_link( 17 ) ); ?>">

</section>


<?php get_main_footer(); ?>
<?php get_footer(); ?>