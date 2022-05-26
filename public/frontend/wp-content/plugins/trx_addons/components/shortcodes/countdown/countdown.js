(function() {
    "use strict";
    jQuery(document).on('action.init_hidden_elements', trx_addons_sc_countdown_init);

    function trx_addons_sc_countdown_init(e, container) {
        if (container === undefined) container = jQuery('body');
        container.find('.sc_countdown:not(.inited)').each(function() {
            jQuery(this).addClass('inited');
            var id = jQuery(this).attr('id');
            var interval = 1;
            var countTo = jQuery(this).data('count-to') > 0;
            var endDateStr = jQuery(this).data('date');
            var endDateParts = endDateStr.split('-');
            var endTimeStr = jQuery(this).data('time');
            var endTimeParts = endTimeStr.split(':');
            if (endTimeParts.length < 3) endTimeParts[2] = '00';
            var endDateTimeStr = endDateStr + ' ' + endTimeStr;
            var countDate = new Date(endDateParts[0], endDateParts[1] - 1, endDateParts[2], endTimeParts[0], endTimeParts[1], endTimeParts[2]);
            var countInit = {
                tickInterval: interval,
                onTick: trx_addons_sc_countdown,
                alwaysExpire: true,
                onExpiry: trx_addons_sc_countdown_expire
            };
            if (countTo) {
                countInit.until = countDate;
            } else {
                countInit.since = countDate;
            }
            jQuery(this).find('.sc_countdown_placeholder').countdown(countInit);
        });
    }

    function trx_addons_sc_countdown_expire() {
        dcl('Expire');
        trx_addons_sc_countdown([0, 0, 0, 0, 0, 0]);
    }

    function trx_addons_sc_countdown(dt) {
        var counter = jQuery(this).parent();
        for (var i = 3; i < dt.length; i++) {
            var v = (dt[i] < 10 ? '0' : '') + dt[i];
            var item = counter.find('.sc_countdown_item').eq(i - 3);
            var digits = item.find('.sc_countdown_digits span').addClass('hide');
            for (var ch = v.length - 1; ch >= 0; ch--) {
                digits.eq(ch + (i == 3 && v.length < 3 ? 1 : 0)).removeClass('hide').text(v.substr(ch, 1));
            }
            trx_addons_sc_countdown_update_canvas(item, dt[i]);
        }
    }

    function trx_addons_sc_countdown_update_canvas(item, value) {
        var canvas = item.find('canvas');
        if (canvas.length == 0) return;
        var digits = canvas.next();
        var brd = parseInt(digits.css('border-top-width'), 10);
        var w = Math.ceil(digits.width() + 2 * brd);
        var needRepaint = false;
        if (canvas.attr('width') != w) {
            needRepaint = true;
            canvas.attr({
                'width': w,
                'height': w
            });
        }
        if (item.data('old-value') == value && !needRepaint) return;
        item.data('old-value', value);
        var percent = value * 100 / canvas.data('max-value');
        var angle = 360 * percent / 100;
        var Ar = angle * Math.PI / 180;
        var canvas_dom = canvas.get(0);
        var context = canvas_dom.getContext('2d');
        var r = (w - brd) / 2;
        var cx = w / 2;
        var cy = w / 2;
        context.beginPath();
        context.clearRect(0, 0, w, w);
        context.arc(cx, cy, r, 0, Ar, false);
        context.imageSmoothingEnabled = true;
        context.lineWidth = brd;
        context.strokeStyle = canvas.data('color');
        context.stroke();
    }
})();