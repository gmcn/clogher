( function($) {

  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 50) {
          $(".navbar-fixed-top").addClass("scrolled");
      } else {
          $(".navbar-fixed-top").removeClass("scrolled");
      }
  });

  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

  // bxslider
  $('.bxslider').bxSlider({
    pager: false,
    touchEnabled: false,
    infiniteLoop: true,
    mode: 'fade',
   });

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
  }
  window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

} ) (jQuery);

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#1E3B6C",
      "text": "#fff"
    },
    "button": {
      "background": "#14191F"
    }
  },
  "theme": "edgeless",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "privacy-policy"
  }
});
