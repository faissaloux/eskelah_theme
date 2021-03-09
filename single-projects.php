<!-- جلب الهيدر -->
<?php  get_header();  ?>

<!-- جلب اعدادات القالب من ريداكس فريمورك -->
<?php global $theme_setting;  ?>
<?php global $vectors;  ?>

<!-- جلب محتوى الهيدر -->
<?php get_main_header(); ?>

<?php
	// Get the metaBoxes 
    $meta_data = get_post_meta( get_the_ID(), 'project_info', true );
    // Get the metaBoxes Content Fields
    $video_link = $meta_data['video_link'];
    $video_thumbnail = $meta_data['video_thumbnail'];
    $list_of_company = $meta_data['list_of_company'];
    $agent = $meta_data['agent'];
    $challenge = $meta_data['challenge'];
    $year = $meta_data['year'];
    $duration = $meta_data['duration'];
    $little_description = $meta_data['little_description'];
    $writer = $meta_data['writer'];
?>

<?php if(!empty($video_link)): ?>
<div class="modal fade" id="video_project" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <?php echo video::iframe($video_link); ?>
            </div>

        </div>
    </div>
</div>
<?php endif; ?>

<style>
.projectInfo pre {
    background: none;
    border: 0;
    color: white;
    font-family: 'SWISSRA-BOLD';
    font-size: 16px;
    margin-top: -20px;
    line-height: 36px;
}

[style="font-weight: 400;"] {
    font-family: 'SWISSRA-light';
}
</style>

<section class="projectHeader">
    <div class="container">
        <div class="col-md-7">
            <div class="projectInfo">
                <h1><?php the_title(); ?></h1>
                <p>
                <pre><?php  echo $little_description; ?></pre>
                </p>
                <ul>
                    <li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_permalink(); ?>"><img
                                src="<?php echo $vectors; ?>/projectShare/facebook.png" alt=""></a></li>
                    <li><a href="https://twitter.com/intent/tweet?text=<?php echo get_permalink(); ?>"><img
                                src="<?php echo $vectors; ?>/projectShare/twitter.png" alt=""></a></li>



                    <li><a href="whatsapp://send?text=<?php echo get_permalink(); ?>"
                            data-action="share/whatsapp/share"><img
                                src="<?php echo $vectors; ?>/projectShare/whatsapp.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-5">

            <style>
            .projectVideo {
                background: url('');
                background-repeat: no-repeat;
                background-size: cover;
            }
            </style>

            <div class="projectVideo" style="background-image:url('<?php echo get_the_post_thumbnail_url() ;?>');">
                <?php if(!empty($video_link)): ?>
                <a href="javascript:;" data-toggle="modal" data-target="#video_project">
                    <span class="videoplay"><img src="<?php echo $vectors; ?>/play.png" alt=""></span>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="projectInfo">
    <div class="container">
        <div class="col-md-8">
            <div class="projectPost">
                <?php if ( have_posts() ) { while ( have_posts() ) { the_post();  ?>

                <?php the_content(); ?>
                <?php  } wp_reset_postdata();  }   ?>

            </div>
        </div>
        <div class="col-md-4">
            <div class="projectSidbar">


                <ul class="project-More-Info">

                    <?php $spana1 = !empty($agent) ? '<li><span>الشريك</span>'.$agent. '</li>' : '';  echo $spana1; ?>
                    <?php $spana2 = !empty($challenge) ? '<li><span>التحدي</span>'.$challenge. '</li>' : '';  echo $spana2; ?>
                    <?php $spana3 = !empty($year ) ? '<li><span>سنة الإنتاج</span>  <i class="raleway">'.$year . '</i>       </li>' : '';  echo $spana3; ?>
                    <?php $spana4 = !empty($duration  ) ? '<li><span>مدة العمل</span>'.$duration . '</li>' : '';  echo $spana4; ?>


                </ul>





            </div>
        </div>
    </div>
</section>
<section class="SeeMoreProjects circle_shape">

    <div class="container">
        <div class="watchMoreTitl">
            <h3>شاهد المزيد من أعمالنا</h3>
        </div>
        <div class="col-md-12">



            <!-- مواضيع ذات صلة  -->
            <?php $related = st_get_related_posts($post->ID,4);?>
            <?php if( $related->have_posts() ) { while( $related->have_posts() ) { $related->the_post(); ?>


            <div class="col-md-3">

                <a href="<?php echo get_permalink(); ?>">
                    <div class="moreprojectBox">
                        <h2><?php echo get_the_title(); ?></h2>
                    </div>
                </a>
            </div>









            <?php }  wp_reset_postdata(); } ?>
            <!--// مواضيع ذات صلة -->






        </div>

    </div>

</section>








<?php get_simple_contact(); ?>
<?php get_main_footer(); ?>
<?php get_footer(); ?>