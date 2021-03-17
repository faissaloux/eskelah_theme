<?php /* Template Name: المدونة */ ?>


<!-- جلب الهيدر -->
<?php  get_header();  ?>

<!-- جلب اعدادات القالب من ريداكس فريمورك -->
<?php global $theme_setting;  ?>
<?php global $vectors;  ?>

<!-- جلب محتوى الهيدر -->
<?php get_main_header(); ?>


<style>
img.blog-icon {
    width: 150px;
    display: flex;
    margin: 0 auto;
}

section.about-page-tite.blog-title .col-md-12.text-center {
    display: inline-block;
}
</style>


<!-- about us eskelah team -->
<section class="about-page-tite blog-title">
    <div class="col-md-12 text-center">
        <img src="<?php echo $vectors; ?>albato.png" class="blog-icon">
        <h1 class="main-title"><span class='eskelah undelined'>المدونة</span></h1>

    </div>
</section>
<!--// about us eskelah team -->



<section class="blog">
    <div class="col-md-10 auto-center">

        <?php 

        $args = array(
        'numberposts' => 6,
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'suppress_filters' => true 
    );
    $blogPosts = get_posts( $args );    
    ?>


        <?php foreach($blogPosts as $post): setup_postdata($post); ?>
        <div class="col-md-4">
            <div class="PostBox">
                <a href="<?php the_permalink(); ?>">

                    <div class="PostImg"><img src="<?php echo get_the_post_thumbnail_url() ;?>" alt=""></div>
                </a>
                <div class="Post-Info">
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="PostTitle"><?php the_title(); ?></h3>
                    </a>
                    <p class="PostDescription"><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                    <div class="PostButton">
                        <a href='<?php the_permalink(); ?>' class="btn readmoreBtn">اقرأ المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</section>
















<?php get_main_footer(); ?>
<?php get_footer(); ?>