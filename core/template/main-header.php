<?php global $vectors; ?>


<!-- Modal -->
<div class="modal fade" id="video_show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/320867392?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
      </div>
    </div>
  </div>
</div>
 
 <header>

  <!-- Phone Header -->
    <div class="phoneMenu hidden-lg hidden-md hidden-sm">
       <div class="hamberger">
     
       <button id="burger" class="open-main-nav">
			<span class="burger"></span>
			<span class="burger-text">Menu</span>
		</button>
       </div>
       <div class="logo">
           <?php global $vectors; ?>
           <a href="<?php echo bloginfo('url'); ?>">
           <img src="<?php echo $vectors ;?>phone_logo_main.svg" />
           </a>
       </div>
    </div>
    <!-- Phone Header -->

 
<div class="container-fluid">
  <div class="mainnavbar">
    <nav class="navbar navbar-default">
      <div class="flex-row">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo $vectors; ?>le-logo.svg" alt=""></a>
        </div>

          <?php
              wp_nav_menu( array(
                'theme_location'    => 'primary_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'main-menu navbar-collapse collapse',
                'menu_class'        => 'nav navbar-nav navbar-left',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
              ));
            ?>
    
          <div class="start-project-btn rightToLeft-effect">
            <a href="/contact">ابدأ مشروعك</a>
          </div>

          <div class="lang-switcher">
              <div class="lang">
                <a href="/en">EN</a>
              </div>
          </div>
      </div>
    </nav>
  </div>
</div>
</header>
 





<div class="demande-Form-submiting" style="display:none;">
<div class="content-sending">
<img src="<?php echo $vectors; ?>/rocket.png" alt="">
<h2>جاري ارسال طلبك</h2>
</div>
</div>

<div class="demande-Form" id='demande_form_id' style="display:none;">
    <a href="javascript:;" id="closeForm"><img src="<?php echo $vectors; ?>/demande/close.png" alt=""></a>
    
     <div class="col-md-8 col-md-offset-2  col-xs-12 contact-form ">
       
       <input type="reset" id="resetform" value="reset" style="display:none;">
       <div class="sucess-submit text-center" style='display:none;'>
          <img src="<?php echo $vectors; ?>/success.png" alt="">
           
           <h4>شكراً لك ، سنكون سعيدين بالتواصل معك قريباً</h4>
       </div>
        <form   id="MaindemandeForm" class="form">
         <h3 class='text-center'>طلب الخدمة</h3>
         <h4 class='text-center'>قم بتعبئة النموذج </h4>
         <div class="col-md-12">
           <div class="row">
            <div class="form-group">
                <input type="text" placeholder="اسمك الكريم" class='form-control inpt' id="your_name"  />
            </div>
            </div>
           </div>
          <div class="col-md-12">
           <div class="row">
            <div class="form-group">
               <select class='form-control inpt' id="your_service">
<option value="">ما الخدمة التي تودها طلبها؟</option>
<?php if(is_page( 'digital-marketing' )): ?>
 <option value="إدارة مواقع التواصل">إدارة مواقع التواصل</option>
 <option value="كتابة المحتوى الإبداعي">كتابة المحتوى الإبداعي</option>

 <option value="الترويج الرقمي">الترويج الرقمي</option>


<?php  endif; ?>

<?php  if(is_page( 'visual-production' )): ?>
  <option value="الأفلام الدعائية">الأفلام الدعائية</option>
  <option value="الأفلام الوثائقية">الأفلام الوثائقية</option>
  <option value="الرسوم المتحركة">الرسوم المتحركة</option>
  <option value="التصوير الفوتوغرافي">  التصوير الفوتوغرافي</option>
  <option value="الإنتاج السينمائي">الإنتاج السينمائي</option>
  <option value='خدمات الانتاج المرئي'>خدمات الانتاج المرئي</option>
<?php  endif; ?>


<?php  if(!is_page( 'visual-production' ) and !is_page( 'digital-marketing' ) ): ?>
  <option value="الإنتاج المرئي">الإنتاج المرئي</option>
  <option value="التسويق الرقمي">التسويق الرقمي</option>
  <option value="بناء الهوية التجارية">بناء الهوية التجارية</option>
<?php  endif; ?>


                   
                  
                  
                 
               </select>
            </div>
            </div>
           </div>
           <div class="col-md-12">
           <div class="row">
            <div class="form-group">
                <input type="text" placeholder="ما هي ميزانيتك التقريبية؟" class='form-control inpt raleway' id="your_bidget"  />
            </div>
            </div>
           </div>
           <div class="col-md-6">
           <div class="row">
            <div class="form-group">
                <input type="text" placeholder="البريد الإلكتروني" class='form-control inpt raleway' id="your_email"  />
            </div>
            </div>
           </div>
           <div class="col-md-6 padding-right-input">
           <div class="row">
            <div class="form-group">
                <input type="text" placeholder="رقم الهاتف" class='form-control inpt raleway' id="your_phone"  />
            </div>
            </div>
           </div>
            <div class="col-md-12">
           <div class="row">
            <div class="form-group">
               <textarea name="" id="your_message" class='form-control inpt txtarear' id="" placeholder="هل تود إخبارنا بشيء ما؟" cols="30" rows="10"></textarea>
            </div>
            </div>
           </div>
            <div class="form-group text-center"><button class="btn btn">اطلب مشروعك</button></div>
        </form>
    </div>
   </div>
    


<div class="demande-Form" id="resume-form" style="display:none;">
    <a href="javascript:;" id="closeForm"><img src="<?php echo $vectors; ?>/demande/close.png" alt=""></a>
    
     <div class="col-md-8 col-md-offset-2  col-xs-12 contact-form ">
       
       <input type="reset" id="resetform" value="reset" style="display:none;">
       <div class="sucess-submit text-center" style='display:none;'>
          <img src="<?php echo $vectors; ?>/success.png" alt="">
           
           <h4>شكراً لك  ، سنكون سعيدين بالتواصل معك قريباً</h4>
       </div>
        <form   id="resumForm" class="form">
         <h3 class='text-center'>تقديم سيرة ذاتية </h3>
         <h4 class='text-center'>قم بتعبئة النموذج </h4>
         <div class="col-md-12">
           <div class="row">
            <div class="form-group">
                <input type="text" placeholder="اسمك الكريم" class='form-control inpt' id="your_name"  />
            </div>
            </div>
           </div>
       
          
           <div class="col-md-12">
           <div class="row">
            <div class="form-group">
                <input type="text" placeholder="البريد الإلكتروني" class='form-control inpt raleway' id="your_email"  />
            </div>
            </div>
           </div>
           <div class="col-md-12">
           <div class="row">
            <div class="form-group">
                <input type="text" placeholder="رقم الهاتف" class='form-control inpt raleway' id="your_phone"  />
            </div>
            </div>
           </div>
             <div class="col-md-12">
           <div class="row">
            <div class="form-group">
               
<label  id='wrapperup' >رفع ملف السيرة الذاتية <input type='file' id='browseup'> </label>


            </div>
            </div>
           </div>
            <div class="form-group text-center"><button class="btn btn">تقديم السيرة الذاتية</button></div>
        </form>
    </div>
   </div>
    



<style>
#wrapperup {
     width: 93px; /*play with this value */
     height: 28px; /*play with this value */
     background: url('browseBtn.png') 0 0 no-repeat;
     border:none;
     overflow:hidden;
}

#browseup{
     margin-left:-145px; /*play with this value */
     opacity:0; /* set to .5 or something so you can better position it as an overlay then back to zero again after you're done */
     -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
     filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
}
#wrapperup {
    width: 190px;
    background: #fdbd2e;
    height: 45px;
    border-radius: 94px;
    text-align: center;
    line-height: 45px;
    color: white;
    margin-bottom: 75px;
}
#browseup:focus {
    color: white !important;
}

#wrapperup:link {
    color: white;
}

#browseup {
    display: none;
}
</style>











