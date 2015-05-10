jQuery(document).ready(function($){
    $('.team-slider').bxSlider({
            auto:false,
            pager:false,
            nextText: '<i class="fa fa-angle-right"></i>',
            prevText: '<i class="fa fa-angle-left"></i>',
            moveSlides : 1,
            minSlides: 2,
            maxSlides: 7,
            slideWidth: 140,
            slideMargin: 15,
            infiniteLoop: false,
            hideControlOnEnd: true
        });

        $('.team-content').each(function(){
            $('.team-content .team-list:first').show();
        });
        
        $('.team-tab').each(function(){
            $('.team-tab .team-image:first').addClass('active');
        });

        $('.team-tab .team-image').on('click', function(){
            $('.team-image').removeClass('active');
            $('.team-content .team-list').hide();
            $(this).addClass('active');
            var teamid = $(this).attr('id');
            $('.team-content .'+teamid).fadeIn();
            return false;
        });
});