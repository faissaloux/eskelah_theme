<?php /* Template Name: تواصل معنا */ ?>
<!-- جلب الهيدر -->
<?php  get_header();  ?>

<!-- جلب اعدادات القالب من ريداكس فريمورك -->
<?php global $theme_setting;  ?>
<?php global $vectors;  ?>

<style>
span.iconic:hover {
    background: white !important;
    border: 3px solid #fdbd2e;
    -webkit-box-shadow: -1px 0 5px 0 rgb(173 173 173);
    -moz-box-shadow: -1px 0 5px 0 rgba(173, 173, 173, 1);
    box-shadow: -1px 0 55px 0 rgb(173 173 173 / 30%);
    box-sizing: content-box !important;
    transition: 0.2s;
}

/************/
h1.main-title {
    display: inline-grid;
}

img.contact-us-img {
    width: 150px;
    text-align: center;
    margin: 0 auto;
    margin-bottom: 25px;
}

section.about-page-tite.contact-title {
    margin-bottom: 20px;
}

.eskelah-map {
    width: 100%;
}

section.map-section {
    margin-bottom: 70px;
}

a.open-cart {
    text-align: center;
    display: block;
    margin-top: 30px;
    color: #fdbd2e;
    font-size: 24px;
}

span.iconic img {
    width: 100%;
}

section.contactInfo {
    margin-top: 100px;
}

iframe {
    width: 100%;
}

span.iconic {
    background: initial;
}
</style>

<!-- جلب محتوى الهيدر -->
<?php get_main_header(); ?>

<!-- about us eskelah team -->
<section class="about-page-tite contact-title">
    <div class="col-md-12 text-center">
        <h1 class="main-title">
            <img class="contact-us-img" src="<?php echo $vectors; ?>/contact-us.png" alt="">
            <span class='eskelah undelined'>
                تواصل معنا
            </span>
        </h1>
        <h3 class="col-md-12 text-center light">
            ملاحو إسكلة رهن إشارتك!
        </h3>
    </div>
</section>
<!--// about us eskelah team -->




<!-- Modal -->
<div class="modal fade" id="MAPMODAL" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">موقع اسكلة</h4>
            </div>
            <div class="modal-body">
                <div class="map-responsive">

                    <iframe style="border: 0;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14843.486337729155!2d39.156864!3d21.551876!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb96eb3a7028dae25!2sEskelah+Digital+Marketing+%26+Production!5e0!3m2!1sen!2sin!4v1551964613707"
                        width="300" height="300" frameborder="0" allowfullscreen="allowfullscreen"
                        data-mce-fragment="1"></iframe>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<section class="map-section">
    <div class="container">
        <div class="col-md-12">
            <a href='javascript:;' data-toggle="modal" data-target="#MAPMODAL"><img class="eskelah-map"
                    src="<?php echo $vectors; ?>/map1.png" alt=""></a>
        </div>
        <div class="col-md-12">
            <a href='javascript:;' class="open-cart" data-toggle="modal" data-target="#MAPMODAL"> <span>احصل على
                    الوجهة</span></a>
        </div>
    </div>
</section>

<section class="contactInfo">
    <div class="container">
        <div class="col-md-12 text-center">
            <div class="col-md-4">
                <span class="iconic"><img src="<?php echo $vectors; ?>/contact/email.svg" alt=""></span>
                <h1 class="title">البريد الإلكتروني</h1>
                <p class="desc nexa">info@eskelah.com</p>
                <a href="mailto:info@eskelah.com"><span>تواصل معنا</span></a>

            </div>
            <div class="col-md-4">
                <span class="iconic"><img src="<?php echo $vectors; ?>/contact/phone.svg" alt=""></span>
                <h1 class="title">الهاتف</h1>
                <p class="desc nexa" dir='ltr'>+966567173705</p>

                <a href='tel:+966567173705'> <span>اتصل بنا</span></a>


            </div>
            <div class="col-md-4">
                <span class="iconic"><img src="<?php echo $vectors; ?>/contact/time.svg" alt=""></span>
                <h1 class="title">اوقات العمل</h1>
                <p class="desc">من السبت إلى الخميس</p>
                <span class="raleway "> 10AM-6PM <span>
            </div>
        </div>
    </div>
</section>





<!-- Contact Form in Contact Page -->
<section class="contactSection">
    <div class="col-md-8 col-md-offset-2 text-center">


        <div class="contactForm-contactPage">

            <h3>تواصل معنا</h3>
            <h4>سنكون سعداء بتواصلك معنا</h4>



            <form action="" id="contactForm" class="form">
                <input type='reset' id='resetform' value='reset' style="display:none;" />

                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group">
                            <input type="text" placeholder="الإسم" id="contact_full_name" class='form-control inpt' />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="form-group">
                            <input type="text" placeholder="البريد الإلكتروني" id="contact_email"
                                class='form-control inpt raleway' />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 padding-right-input">
                    <div class="row">
                        <div class="form-group">
                            <input type="text" id="contact_phone" placeholder="الرقم"
                                class='form-control inpt raleway' />
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group">
                            <textarea class='form-control inpt txtarear' id="contact_message" placeholder="الرسالة"
                                cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center"><button class="btn btn">ارسال</button></div>
                <div class="sendresult"></div>

            </form>

            <img src="<?php echo $vectors; ?>/contact/newsletter-bg.png" alt="">

        </div>
    </div>
</section>
<!-- Contact Form in Contact Page -->


<!-- جلب محتوى الفوتر -->
<?php get_main_footer(); ?>

<!-- جلب الفوتر -->
<?php get_footer(); ?>