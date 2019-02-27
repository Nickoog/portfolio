/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        // ==========================================================================
        // Skill bar animation
        // ==========================================================================
        $('.skillbar').each(function(){
            $(this).find('.skillbar-bar').animate({
                width:$(this).attr('data-percent')
            },6000);
        });
        // ==========================================================================
        // Contact
        // ==========================================================================
        $('.contact-wrapper').on('click', function(){
            $(this).toggleClass('open');
        });
        // ==========================================================================
        // Modal
        // ==========================================================================
        $('#exampleModal').on('hidden.bs.modal', function (e) {
            console.log('ici');
            $('.contact-wrapper').removeClass('open');
        });
        // ==========================================================================
        // Scrollmagic
        // ==========================================================================

        // init controller
        var controller = new ScrollMagic.Controller();

        // build scene
        var scene = new ScrollMagic.Scene({
            triggerElement: "#about-me"
        })
        .setClassToggle("#about-me", 'slide-in') // trigger a TweenMax.to tween
        //.addIndicators({name: "1 (duration: 0)"}) // add indicators (requires plugin)
        .addTo(controller);

        // ==========================================================================
        // Owl carousel
        // ==========================================================================

        // Declare Carousel jquery object

        // Carousel initialization
        
        $(".owl-carousel").owlCarousel({
            items: 1,
            center: true,
            loop: true,
            nav: true,
            dots: false,
            margin: 50,
            autoplay: false,
            navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });
        var owl = $('.owl-carousel');
        owl.owlCarousel();
        owl.on('translate.owl.carousel', function (event) {
        $('.owl-carousel .translate').removeClass('animated fadeInRight').hide();
        //$('.owl-carousel img').removeClass('animated fadeIn').hide();
        $('.owl-carousel p').removeClass('animated fadeInRight').hide();
        //$('.owl-carousel .boxed-btn').removeClass('animated').hide();
        });
        
        owl.on('translated.owl.carousel', function (event) {
            $('.owl-carousel .translate').addClass('animated fadeInRight').show();
            $('.owl-carousel p').addClass('animated fadeInRight').show();
           // $('.owl-carousel img').addClass('animated fadeIn').show();
            //$('.owl-carousel .boxed-btn').addClass('animated fadeInDown').show();
        });
        // ==========================================================================
        // Form 
        // ==========================================================================
        var email = '';

        function checkEmail(value) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(value).toLowerCase());
        }

        function check_required_inputs(elements) {
            var boolean = true;
            var first = null;
            elements.each(function () {
                if ($(this).val() === "") {
                    $(this).parents(".textInput").addClass("failed");
                    if (first == null) {
                        first = $(this);
                    }
                    boolean = false;
                } else {
                    $(this).parents(".textInput").removeClass("failed");
                    $(this).parents(".textInput").addClass("success");
                }
                if ($(this).parents(".textInput").hasClass("email")) {
                    if (!checkEmail($(this).val())) {
                        $(this).parents(".textInput").addClass("failed");
                        if (first == null) {
                            first = $(this);
                        }
                        boolean = false;
                    }
                }
            });
            if (first != null) {
                first.focus();
            }
            return boolean;
        }
        // check email value
        $(".textInput.email input").keyup(function (e) {
            $(this).parents(".textInput").removeClass("success");
            $(this).parents(".textInput").removeClass("failed");
            if (checkEmail(e.target.value)) {
                $(this).parents(".textInput").addClass("success");
                email=$(this).val();
            } else {
                $(this).parents(".textInput").addClass("failed");
            }
        });

        // Send form
        $(".portfolio-button[type='submit']").on("click", function (e) {
            e.preventDefault();
            var form = new FormData();
            var forms = $(this).parents("form");
            var fd = new FormData(forms[0]);
            var object = {};
            fd.forEach(function (value, key) {
                if (object[key]) {
                    object[key] += ", " + value;
                } else {
                    object[key] = value;
                }
            });
            form.append('action', 'ajax_forms');
            form.append('title', forms.attr("object"));
            form.append('email', email);
            form.append('forms', JSON.stringify(object));
            var defaultvalue = forms.find(".portfolio-button[type='submit']").html();
            console.log(object, forms, email);
            if ( check_required_inputs(forms.find(".required input")) ) {
                $.ajax({
                    url: admin_ajax.ajax_url,
                    data: form,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    beforeSend: function () {
                        var loader = forms.find(".fa-spinner.fa-pulse");
                        var forContainer = forms.find(".form-container");
                        forContainer.fadeOut(function(){
                            loader.fadeIn();
                        });
                    },
                    success: function (html) {
                        console.log(html);
                        var loader = forms.find(".fa-spinner.fa-pulse");
                        var sent = forms.find(".sent-form");
                        var error = forms.find(".error");
                        var forContainer = forms.find(".form-container");
                        if (html === "1") {
                            loader.fadeOut(function() {
                                sent.css({'display':'flex'}).addClass("animated bounceInLeft");
                            });
                        } else {
                            loader.fadeOut(function() {
                                error.css({'display':'flex'}).addClass("animated bounceInLeft");
                            });
                            setTimeout(function () {
                                error.fadeOut(function(){
                                    forContainer.css({'display':'block'}).addClass("animated bounceInLeft");
                                });
                            }, 5000);
                        }
                    }
                });
            }
        });
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.