<?php /* Template Name: خدماتنا */ ?>

<!-- جلب الهيدر -->
<?php  get_header();  ?>

<!-- جلب اعدادات القالب من ريداكس فريمورك -->
<?php global $theme_setting;  ?>
<?php global $vectors;  ?>

<!-- جلب محتوى الهيدر -->
<?php get_main_header(); ?>  



<style>
section.Error404 {
    text-align: center;
    padding: 45px 0;
    overflow: hidden;
    margin-bottom: 95px;
}
section.Error404 h1 {
    font-size: 165px;
}

section.Error404 h3 {
    margin-bottom: 25px;
}
</style>


<section class="Error404">
<h1 class="raleway">404</h1>
<h3>الصفحة غير موجودة</h3>
<a href="<?php echo get_home_url();  ?>" class="btn btn-call-to-action">العودة للرئيسية</a>

</section>




<?php get_main_footer(); ?>
<?php get_footer(); ?>