//////TOGGLE-PASSWORD/////////////

$(".toggle-password").click(function() {

    $(this).toggleClass("active");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });

////MULTIPLE-IMG-UPLOAD/////////

jQuery(document).ready(function () {
	ImgUpload();
  });
  
  function ImgUpload() {
	var imgWrap = "";
	var imgArray = [];
  
	$('.upload-inputfile').each(function () {
	  $(this).on('change', function (e) {
		imgWrap = $(this).closest('.upload-box').find('.upload-img-wrap');
		var maxLength = $(this).attr('data-max_length');
  
		var files = e.target.files;
		var filesArr = Array.prototype.slice.call(files);
		var iterator = 0;
		filesArr.forEach(function (f, index) {
  
		  if (!f.type.match('image.*')) {
			return;
		  }
  
		  if (imgArray.length > maxLength) {
			return false
		  } else {
			var len = 0;
			for (var i = 0; i < imgArray.length; i++) {
			  if (imgArray[i] !== undefined) {
				len++;
			  }
			}
			if (len > maxLength) {
			  return false;
			} else {
			  imgArray.push(f);
  
			  var reader = new FileReader();
			  reader.onload = function (e) {
				var html = "<div class='upload-img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload-img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload-img-close'></div></div></div>";
				imgWrap.append(html);
				iterator++;
			  }
			  reader.readAsDataURL(f);
			}
		  }
		});
	  });
	});
  }

  //////DATE-PICKER///////

  $(function() {
    $("#datepicker").datepicker({
      setDate: new Date(),
      showOtherMonths: true,
      selectOtherMonths: true,
      dateFormat: 'dd/mm/yy',
      showAnim: 'slideDown'
    }).attr('readonly', 'readonly'); // Prevent keyboard input

    // Ensure the datepicker is toggled correctly on icon click
    $(".input-group-addon").click(function() {
      $("#datepicker").focus();
    });

    // Prevent closing the datepicker when clicking the input
    $("#datepicker").click(function(event) {
      event.stopPropagation();
    });
  });

////////////ADVERTISE MOBILE SLICK SLIDER/////////////////////

mobileOnlySlider(".advertise-row", {
    dots: false,
    arrows: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    centerMode: false,
    centerPadding: '0px'
}, 767);

// Stop the slider for .all-advertise .advertise-row
if ($('.all-advertise .advertise-row').hasClass('slick-initialized')) {
	$('.all-advertise .advertise-row').slick('unslick');
}

////////////SUGGESTED MOBILE SLICK SLIDER/////////////////////


mobileOnlySlider(".figure-row", {
    dots: false,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    centerPadding: '68px'
}, 767);

function mobileOnlySlider(selector, settings, breakpoint) {
    var slider = $(selector);
    var defaultSettings = {
        mobileFirst: true,
        autoplay: false,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: breakpoint,
                settings: "unslick"
            }
        ]
    };

    var finalSettings = $.extend({}, defaultSettings, settings);

    slider.slick(finalSettings);

    $(window).on("resize", function () {
        if ($(window).width() > breakpoint) {
            return;
        }
        if (!slider.hasClass("slick-initialized")) {
            return slider.slick(finalSettings);
        }
    });
}

///////NOTIFY-TOGGLE////////
$(".toggle-notify").click(function () {
	$("body").toggleClass('open-toggle');
	  $(".notify-bar").toggleClass('active'); 
  
});

/////////PROFILE GALLERY/////////////

$('.thumbnail').on('click', function() {
	var clicked = $(this);
	var newSelection = clicked.data('big');
	var $img = $('.primary').css("background-image","url(" + newSelection + ")");
	clicked.parent().find('.thumbnail').removeClass('selected');
	clicked.addClass('selected');
	$('.primary').empty().append($img.hide().fadeIn('slow'));
  });

/////////CHAT-MOBILE-JQUERY///////////////

jQuery(document).ready(function() {
    $(".chat-list .chat-box").click(function() {
        $(".empty-screen").hide(); 
        $(".full-profile").addClass("showbox"); 
    });
    
    $(".chat-icon").click(function() {
        $(".full-profile").removeClass('showbox'); 
        $(".full-profile").hide(); 
    });
});

//-----JS for Price Range slider-----

$(function() {
	$( "#slider-range" ).slider({
	  range: true,
	  min: 20,
	  max: 29,
	  values: [ 20, 29],
	  slide: function( event, ui ) {
		$( "#amount" ).val(  ui.values[ 0 ] + " - " + ui.values[ 1 ] );
	  }
	});
	$( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 ) +
	  " - " + $( "#slider-range" ).slider( "values", 1 ) );
});


