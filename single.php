<!-- جلب الهيدر -->
<?php  get_header();  ?>

<!-- جلب اعدادات القالب من ريداكس فريمورك -->
<?php global $theme_setting;  ?>

<!-- جلب محتوى الهيدر -->
<?php get_main_header(); ?>  



<?php

	// Get the metaBoxes 
        $meta_data = get_post_meta( get_the_ID(), 'post_info', true );

      
        $writer = $meta_data['writer'];

?>



<style>
.no-post-thumbnail.text-center {
    background: #ffbe2e;
    height: 150px;
    text-align: center;
    color: white;
    line-height: 150px;
    font-size: 31px;
}
</style>

<?php if ( has_post_thumbnail() ) : ?>
<section class="PostHeader">
   <div class="container">
    <div class="postitle">
        <h1 class="col-md-8 col-md-offset-2"><?php the_title(); ?></h1>
    </div>
    </div>
</section>
<?php else: ?>
<div class="no-post-thumbnail text-center">
<?php the_title(); ?>
</div>
<?php endif; ?>

<style>
.btn-social {
    color: white !important;
    height: 45px;
    line-height: 30px;
}
</style>
<!-- Modal -->
<div class="modal fade" id="socialModal" tabindex="-1" role="dialog" aria-labelledby="socialModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">مشاركة الصفحة</h4>
      </div>
      <div class="modal-body">
        <a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>" class="btn btn-block btn-social btn-facebook">
            مشاركة عبر الفيسبوك
          </a>

<a  href="https://twitter.com/intent/tweet?text=<?php echo get_permalink(); ?>" class="btn btn-block btn-social btn-twitter">
            مشاركة عبر تويتر
          </a>

<a href="whatsapp://send?text=<?php echo get_permalink(); ?>" data-action="share/whatsapp/share" class="btn btn-block btn-social btn-whatsapp" style='background:#25d366;color:white;'>
            مشاركة عبر الواتساب
          </a>
      </div>
      
    </div>
  </div>
</div>

<section class="post-meta">
    <ul>
        <li><a href="javascript:;" id='print_it'><img src="<?php echo $vectors; ?>/post/print.png" alt=""> طباعة </a></li>
        <li><a href="javascript:;"  type="button" data-toggle="modal" data-target="#socialModal"><img src="<?php echo $vectors; ?>/post/share.png" alt=""> مشاركة </a></li>
        <li><a href="javascript:;" class="raleway"><img src="<?php echo $vectors; ?>/post/time.png" alt=""> <?php the_time('F j, Y'); ?> </a></li>
<li><a href="#"><img style='     margin-top: -3px; width: 23px;' src="<?php echo $vectors; ?>/post/paper-and-pencil.svg" alt=""> <?php echo $writer; ?></a></li>






    </ul>
</section>

<section class="post">
   <div class="container">
   
    <div class="col-md-8 col-md-offset-2 post-content">
    <!-- المحتوى -->
    <?php if ( have_posts() ) { while ( have_posts() ) { the_post();  ?>

<?php the_content(); ?>
    
    <?php }  wp_reset_postdata(); } ?>
    
     </div>
    </div>
</section>







<!-- جلب محتوى الفوتر -->
<?php get_main_footer(); ?>

<!-- جلب الفوتر -->
<?php get_footer(); ?>