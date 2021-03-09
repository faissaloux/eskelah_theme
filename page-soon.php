<?php /* Template Name: قريبا */ ?>

<?php  get_header();  ?>


<?php global $theme_setting;  ?>

<style>
    .soon-page{
        overflow: hidden;
    }
    .soon-page .hero-img{
        margin-top: 0;
    }
    .soon-page .soon-text{
        position: absolute;
        right: 50%;
        top: 50%;
        z-index: 0;
    }
    .soon-page .soon-title{
        font-size: 100px;
    }
    .soon-page .hero-img-container{
        position: absolute;
        z-index: 9999;
    }
</style>

    
<section class="soon-page">
    <div class="col-md-12 soon-text">
        <p class="soon-title">قريبا</p>
    </div>
    <div class="hero-img-container">
        <div class="hero-img"><img src="<?php echo $vectors; ?>/home/hero.png" alt=""></div>
    </div>
</section>


<!-- جلب الفوتر -->
<?php get_footer(); ?>