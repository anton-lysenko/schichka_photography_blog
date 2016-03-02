/**
 * Created by Anton on 26.02.2016.
 */
(function($){
    $(function(){

        var combinedMenu = $('#menu-primary').clone();
        var secondMenu = $('#menu-social-items').clone();

        secondMenu.children('li').addClass('social-item').appendTo(combinedMenu);

        combinedMenu.slicknav({
            label: '',
            duration: 500,
            prependTo: '.site-header',
            duplicate:false
        });

    });
})(jQuery);