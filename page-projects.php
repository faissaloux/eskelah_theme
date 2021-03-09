<?php /* Template Name: التحديات */ ?>

<!-- جلب الهيدر -->
<?php  get_header();  ?>

<!-- جلب اعدادات القالب من ريداكس فريمورك -->
<?php global $theme_setting;  ?>
<?php global $vectors;  ?>

<!-- جلب محتوى الهيدر -->
<?php get_main_header(); ?>

<?php
    $projectsCategories = get_terms( array(
        'taxonomy'  => 'project_categories', 
        'order'     => 'DESC'
    ));
?>

<style>
@media only screen and (min-width: 760px) {

    .col-md-6.col-md-offset-3.col-sm-12.text-center {
        margin: 0 auto !important;
        display: inline-block;
        width: initial;
        float: none;
    }

    section.service-tite.projects_title {
        text-align: center;
    }


    .postitle h1 {
        margin-top: 105px;
        font-size: 38px;
    }
}
</style>
<?php  
        $args = array(
            'numberposts' => -1,
            'post_type'        => 'projects',
            'post_status'      => 'publish',
            'suppress_filters' => true ,
            "orderby" => 'meta_value_num',
            "meta_key" => 'tartib',
            "order" => 'ASC'
        );
        $projects = get_posts( $args );  
    ?>
<!-- about us eskelah team -->
<section class="service-tite projects_title">
    <div class="col-md-6 col-md-offset-3 col-sm-12 text-center">
        <img src="<?php echo $vectors; ?>/project/Groupe%2061.png" alt="">
        <div class="page-title">
            <h1 class="main-title">
                <span>في</span>
                <span class="eskelah undelined">إسكلة</span>
                <span>لا نتجاوز التحديات وحسب</span>
            </h1>
            <h3 class="text-right">بل نرفق بأحلامك في مرفأ الإبداع </h3>
        </div>
    </div>
</section>
<!--// about us eskelah team -->

<section class="categories-switchers flex-row hidden-xs">
    <div class="categories-switcher active" data-category="0">
        <a href="javascript:;">
            الكل
        </a>
    </div>
    <?php foreach($projectsCategories as $category): ?>
    <div class="categories-switcher" data-category="<?php echo $category->term_id; ?>">
        <a href="javascript:;">
            <?php echo $category->name; ?>
        </a>
    </div>
    <?php endforeach; ?>
</section>

<style>
.map-responsive {
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative;
    height: 0;
}

.map-responsive iframe {
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    position: absolute;
}

.frame {
    height: 270px !important;
    width: 640px !important;
    margin: 0 auto;
    background-size: contain !important;
    width: 100%;
    background-repeat: no-repeat !important;
}

section.portfolio {
    max-width: 1340px;
    margin: 0 auto;
}

.frame:after {
    content: 'dd';
    top: 0;
    left: 0;
    content: '';
    right: 30px;
    bottom: 0;
    background: red;
    position: absolute;
    -webkit-filter: grayscale(100%);
    /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
    background-size: contain !important;
}

.frame {
    position: relative;
    height: 270px !important;
    width: 640px !important;
    margin: 0 auto;
    width: 100%;

}

.project-info {
    text-align: right;
    width: 640px !important;
    margin: 0 auto;
    padding-right: 45px;
}

.frame a.btn {
    color: white;
    text-decoration: none;
    padding: 15px 28px;
    display: inline-block;
    float: left;
    font-weight: bold;
    background: #0000008c;
    top: 110px !important;
    position: absolute;
    z-index: 9999999;
    left: 253px;
    color: white;
    border: 2px solid #fdbd2e !important;
}

.frame {
    margin-bottom: 25px;
}

.frame img {
    -webkit-filter: grayscale(100%);
    /* Safari 6.0 - 9.0 */
    filter: grayscale(100%);
    width: 100%;
}

.frame {
    overflow: hidden;
}

.frame:after {
    display: none;
}

.frame img:hover {
    filter: initial;
}
</style>

<div class="modal fade" id="video_project" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body"></div>
        </div>
    </div>
</div>

<section class="portfolio">
    <div class="col-md-12">

        <?php $count = 0; foreach($projects as $post): setup_postdata($post);  ?>

        <?php 
            // Get the metaBoxes 
            $meta_data          = get_post_meta( get_the_ID(), 'project_info', true );
            $little_description = $meta_data['little_description'];
            $video_link         = $meta_data['video_link'];
        ?>

        <!-- style='background:url("<?php echo urldecode(get_the_post_thumbnail_url()) ;?> ") !important; '-->
        <div class="col-md-6 hidden-xs">
            <div class='frame'>
                <img src='<?php echo urldecode(get_the_post_thumbnail_url()) ;?>' />


                <!-- class="show-project-video" data-toggle="modal" data-target="#video_project" data-video="<?php echo $video_link ?>" !-->
                <a href="<?php the_permalink(); ?>">
                    <?php if($video_link): ?>
                    <span class="videoplay"><img src="<?php echo $vectors; ?>/play.png" /></span>
                    <?php endif; ?>
                </a>
            </div>
        </div>

        <?php $class = ($count % 2 == 1) ? "odd" : "even"; ?>
        <div
            class="col-md-8 col-md-offset-2  col-sm-8 projectDisplay <?php echo $class; ?> hidden-sm hidden-lg hidden-md">
            <div class="main_display">

                <?php if($class == 'odd'): ?>
                <div class="project-info-dipslay">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <pre><?php echo $little_description; ?></pre>
                    <a href="javascript:;" class="show-project-video" data-toggle="modal" data-target="#video_project"
                        data-video="<?php echo $video_link ?>">
                        <?php if($video_link): ?>
                        <span class="videoplay"><img src="<?php echo $vectors; ?>/play.png" /></span>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="project-display-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url() ;?>" alt="">
                    </a>
                </div>


                <?php else : ?>

                <div class="project-info-dipslay hidden-sm hidden-md hidden-lg">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <pre><?php echo $little_description; ?></pre>
                    <a href="javascript:;" class="show-project-video" data-toggle="modal" data-target="#video_project"
                        data-video="<?php echo $video_link ?>">
                        <?php if($video_link): ?>
                        <span class="videoplay"><img src="<?php echo $vectors; ?>/play.png" /></span>
                        <?php endif; ?>
                    </a>
                </div>
                <div class="project-display-thumbnail hidden-sm hidden-md hidden-lg">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url() ;?>" alt="">
                    </a>
                </div>




                <div class="project-display-thumbnail hidden-xs">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url() ;?>" alt="">
                    </a>
                </div>
                <div class="project-info-dipslay hidden-xs">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <pre><?php echo $little_description; ?></pre>
                    <a href="javascript:;" class="show-project-video" data-toggle="modal" data-target="#video_project"
                        data-video="<?php echo $video_link ?>">
                        <?php if($video_link): ?>
                        <span class="videoplay"><img src="<?php echo $vectors; ?>/play.png" /></span>
                        <?php endif; ?>
                    </a>
                </div>


                <?php endif; ?>

            </div>

        </div>
        <?php $count++; endforeach; ?>
    </div>
</section>





















<?php get_simple_contact(); ?>



<!-- جلب محتوى الفوتر -->
<?php get_main_footer(); ?>

<!-- جلب الفوتر -->
<?php get_footer(); ?>