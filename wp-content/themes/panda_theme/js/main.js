function animate(elem) {
     var effect = elem.data("effect");
    elem.addClass("animated " + effect).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
      elem.removeClass("animated " + effect)
    });
}

jQuery(document).ready(function($) { 
  $('.otvet').addClass('animated bounceInDown');
  $('.infoPanda').addClass('animated bounceInDown');
  $('.pandaslider').addClass('animated bounceInDown');
  $('.slogBlock').addClass('animated slideInLeft');
  $(".pimg").mouseenter(function() {
    animate($(this));
  });
  $(".buttoninfo").mouseenter(function() {
    animate($(this));
  });
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      slideshow: true,
      slideshowSpeed: 1500,
      prevText: "Previous",
      touch: true
    });
  });

  document.getElementById('User2').onkeypress = function (d) {
    return !(/[0-9]/.test(String.fromCharCode(d.charCode)));
  }

  document.getElementById('User1').onkeypress = function (d) {
    return !(/[А-Яа-яA-Za-z ]/.test(String.fromCharCode(d.charCode)));
  }

  function validEmail(e) { 
    var filter = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@gmail.com/gi; 
    return String(e).search (filter) != -1; 
  }
  function validEmailYandex(e) { 
    var filter = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@yandex.ru/gi; 
    return String(e).search (filter) != -1; 
  }
          $('.wpcf7-validates-as-email').removeClass('valid');


  $('.wpcf7-submit').prop('disabled', true);
  $('.wpcf7-validates-as-email').on('input', function(e) {
      console.log();
      if (validEmail($(this).val()) || validEmailYandex($(this).val())) {
          $('.wpcf7-submit').prop('disabled', false);
          $(this).removeClass('custom-error').addClass('custom-valid');
      } else {
        $('.wpcf7-submit').prop('disabled', true);
        $(this).removeClass('custom-valid').addClass('custom-error');
      }
  });

});