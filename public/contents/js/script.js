// $(document).ready(function() {
//
//     // smooth scroll. begin.
//     $('html, body').animate({
//       scrollTop: $(hash).offset().top
//     }, 900, function(){
//     // smooth scroll. end.
//
//     window.location.hash = hash;
//     });
//   });


(function($) {

  $.fn.menumaker = function(options) {

      var navbar = $(this), settings = $.extend({
        title: "Menu",
        format: "dropdown",
        sticky: false
      }, options);

      return this.each(function() {
        navbar.prepend('<div id="menu-button">' + settings.title + '</div>');
        $(this).find("#menu-button").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $(this).next('ul');
          if (mainmenu.hasClass('open')) {
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
            if (settings.format === "dropdown") {
              mainmenu.find('ul').show();
            }
          }
        });

        navbar.find('li ul').parent().addClass('has-sub');

        multiTg = function() {
          navbar.find(".has-sub").prepend('<span class="submenu-button"></span>');
          navbar.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open text-center').show();
            }
          });
        };

        if (settings.format === 'multitoggle') multiTg();
        else navbar.addClass('dropdown');

        if (settings.sticky === true) navbar.css('position', 'fixed');

        resizeFix = function() {
          if ($( window ).width() > 768) {
            navbar.find('ul').show();
          }

          if ($(window).width() <= 768) {
            navbar.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();
        return $(window).on('resize', resizeFix);

      });
  };
})(jQuery);

(function($){
$(document).ready(function(){

$("#navbar").menumaker({
   title: "Menu",
   format: "multitoggle"
});

});
})(jQuery);
