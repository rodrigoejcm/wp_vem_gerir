(function ($) {
$.fn.vAlign = function() {
    return this.each(function(i){
        $(this).children().wrapAll('<div class="nitinh-vAlign" style="position:relative;"></div>');
        var div = $(this).children('div.nitinh-vAlign');
        var ph = $(this).innerHeight();
        var dh = div.height();
        var mh = (ph - dh) / 2;
        div.css('top', mh);
    });
};
})(jQuery);


$(document).ready(function(){

    
    $( ".conteudo-vci-sistema").vAlign();    

    $( ".nosso-sistema" ).closest('.site').css("background-color","#94E673");
    /*.css("background-color","#94E673");*/

    $('.superheader-vemcriar').parallax({imageSrc: path_vemgerir.img_path + 'vemcriar-banner.png'});
    $('.superheader-vemcrescer').parallax({imageSrc: path_vemgerir.img_path + 'vemcrescer-banner.jpg'});
    $('.superheader-home').parallax({imageSrc: path_vemgerir.img_path + 'banner-home.jpg'});
    
    $('.intro-scroll-down').on('click', function(){
        var this_el = $('.area-visivel');
        var altura = this_el.height()+90;
       $('body, html').animate({'scrollTop':altura});

    });
    
    $("#toggle").click(function() {
       $(this).toggleClass("on");
    });


    $('.dep-info ').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 8000,
        arrows: false,
        /*adaptiveHeight:true,*/
      });

    
  $('#login-trigger').click(function(){
    $(this).next('#login-content').slideToggle();
    $(this).toggleClass('active');          
    
    })

});

 

/*var theToggle = document.getElementById('toggle');
console.log(theToggle);

theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}*/





// based on Todd Motto functions
// http://toddmotto.com/labs/reusable-js/

// hasClass
function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}
// removeClass
function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
// toggleClass
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}



