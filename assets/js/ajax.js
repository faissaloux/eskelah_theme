jQuery(function($){

    $('body .categories-switcher').click(function(e){
        e.preventDefault();
        $('body .categories-switcher.active').removeClass('active');
        $(this).addClass('active');

        const section   = $("section.portfolio");
        const category  = $(this).data('category'); 
        const formData  = new FormData();
        formData.append('action', 'portfolio_reload'); 
        formData.append('category', category);  
        
        $.ajax({
            url: varjs.eskelah_ajax_url,
            type: 'POST',
            processData: false,
            contentType: false, 
            data: formData,
            cache:false,
            dataType: "JSON",
            success: function(projects) {
                section.empty();
                refill(section, projects);
            }
        });
    });

    $( document ).on( 'click', '.show-project-video', function(e) {
        e.preventDefault();

        const videoLink = $(this).data('video').split('/');
        const modalBody = $('#video_project .modal-body');
        modalBody.empty();
        
        switch(videoType(videoLink)){
            case 'vimeo'    : vimeoIframe(videoLink, modalBody);
                              break;
            case 'youtube'  : youtubeIframe(videoLink, modalBody);
                              break;
            default         : platformError(modalBody);
        }
        
    });

    const refill = (section, projects) => {
        if(projects.length != 0){
            section.append(`<div class="col-md-12 loaded"></div>`);
            $.each(projects, (index, project) => {
                $("section.portfolio .loaded").append(`
                    <div class="col-md-6 hidden-xs">
                        <div class='frame' >
                            <img src='${project.thumbnail}'/>
                            <a href="${project.permalink}">
                                <span class="videoplay"><img src="${project.vectors}play.png"/></span>
                            </a>
                        </div>
                    </div>
                `);
            });
        };
    }

    const videoType = videoLink => videoLink[2].split('.').reverse()[1];

    const vimeoIframe = (videoLink, modalBody) => {
        modalBody.append(`
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://player.vimeo.com/video/${videoLink[3]}"></iframe>
            </div>
        `);
    }

    const youtubeIframe = (videoLink, modalBody) => {
        modalBody.append(`
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/${videoLink[3].split('=')[1]}" allowfullscreen></iframe>
            </div>
        `);
    }

    const platformError = (modalBody) => {
        modalBody.append(`
            <div class="embed-responsive embed-responsive-16by9 platform-error">
                <p>Platform not found</p>
            </div>
        `);
    }

});