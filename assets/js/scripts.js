(function($){
    $(document).ready(function(){
        var container = $('#pages'),
            pageWidth = container.width(),
            pages = container.children('.page'),
            pageCount = pages.length;

        pages.each(function(i) {
            var self = $(this);
            self.css({
                'left': i * pageWidth,
                'width': pageWidth
            });
        });

        container.width(pageWidth * pageCount);

        var hammertime = Hammer(container, {
            prevent_default: true,
            no_mouseevents: true
        });

        var isSideOpen = function() {
            if ($('.wrapper').hasClass('is-toggled')) {
                return true;
            }
            return false;
        }

        var navigate = function(e) {
            var left = parseInt(container.css('left'));
            switch(e.gesture.direction) {
                case "left":
                    if (isSideOpen) {
                        closeSide();
                    } else {
                        if (left > (1 - pageCount) * pageWidth) {
                            container.css({
                                'left': left - pageWidth
                            });
                        }
                    }
                    break;
                case "right":
                    if (left < 0) {
                        container.css({
                            'left': left + pageWidth
                        });
                    }
                    break;
                default: break;
            }
        }

        var openSide = function(e) {
            $('.wrapper').addClass('is-toggled');
        }

        var closeSide = function(e) {
            $('.wrapper').removeClass('is-toggled');
        }

        hammertime.on('dragstart', function(e) {
            if (!isSideOpen()) {
                hammertime.off('swipe', navigate);
                hammertime.on('swipe', openSide);
            } else {
                hammertime.off('swipe', openSide)
                hammertime.on('swipe', navigate);
            }
        });

        hammertime.on('dragend', function(e) {
            hammertime.off('swipe', openSide);
            hammertime.on('swipe', navigate);
        });
    });

})(jQuery);