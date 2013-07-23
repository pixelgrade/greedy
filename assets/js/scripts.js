(function($){
    $(document).ready(function(){
    	$('.settings-toggle').on('click', function(e) {
    		e.preventDefault();
    		$('body').toggleClass('settings-visible');
    	});

    	$('[name="sidebar"]').on('change', function(e) {
    		var self = $(this);
			$('body').removeClass('l-sidebar-left l-sidebar-right l-fullwidth')
			$('body').addClass(self.val());
    	});

    	$('[name="layout"]').on('change', function(e) {
    		var self = $(this);
    		if (self.val() == 'l-boxed') {
    			$('body').addClass('l-boxed');
    		} else {
    			$('body').removeClass('l-boxed');
    		}
    	});

    	$('[name="navigation"]').on('change', function(e) {
    		var self = $(this);
    		if (self.val() == 'inverse') {
    			$('.nav').addClass('inverse');
    		} else {
    			$('.nav').removeClass('inverse');
    		}
    	});


    	// Color picker
		function hexToRgb(hex) {
		    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
		    return result ? {
		        r: parseInt(result[1], 16),
		        g: parseInt(result[2], 16),
		        b: parseInt(result[3], 16)
		    } : null;
		}

		function hexToRgbString(hex) {
			var rgb = hexToRgb(hex);
			return 'rgb('+rgb.r+', '+rgb.g+', '+rgb.b+')';
		}

		var ss = document.styleSheets;

		var defaultColor = $('body').data('accentcolor'),
			cookieColor = $.cookie('accent_color');

		if (typeof cookieColor !== undefined && cookieColor != null) {
			updateColor(defaultColor, cookieColor);
		} else {
			$.cookie('accent_color', defaultColor);
		}

    	$('[name="accent-color"]').spectrum({
    		color: $.cookie('accent_color'),
    		// showPaletteOnly: true,
		    showPalette: true,
		    palette: [
		        'rgb(15, 146, 126)',
		        'rgb(15, 146, 246)', 'yellow', 'green', 'blue', 'violet'
		    ]
    	}).on('change', function(e) {
    		var self = $(this);
    		updateColor($.cookie('accent_color'), self.spectrum("get").toHexString());
    	});

		function updateColor(oldColor, newColor) {
			var rgbString = hexToRgbString(oldColor);
    		for (var i=0; i<ss.length; i++) {
	            var rules = ss[i].cssRules || ss[i].rules;

	            for (var j=0; j<rules.length; j++) {
	                if (typeof rules[j].style !== 'undefined' && rules[j].style.backgroundColor == rgbString) {
	            		rules[j].style.backgroundColor = newColor;
	                }
	            }
	        }

	        $.cookie('accent_color', newColor);
        }
    });

})(jQuery);