$(function () {

    /* Closable */
    $('body').delegate('a.close', 'click', function (e) {
        var $closable = $(e.target).closest('.closable').slideUp("fast", function (e) {
            $closable.trigger('close');
            $closable.remove();
        });
    });

    /* Collapasible */
    $('body').delegate('div.panel.collapsible .panel-header h2', 'click', function (e) {
        $(e.target).closest('.panel').toggleClass('collapsed');
    });

    /* Tab Widget */
    $('.tab-container').delegate('ul.tab li', 'click', function (e) {
        var li, index, container;
        li = $(e.target);
        if (li.hasClass('active') || li.hasClass('growth-button')) return;

        li.addClass("active")
            .siblings().removeClass("active");
        index = li.prevAll().length;
        container = li.closest(".tab-container");
        container.find(".tab-body").removeClass("active")
            .eq(index).addClass("active");
    })

    .delegate('a.remove-tab', 'click', function (e) {
        var body = $(e.target).closest('.tab-body');
        var index = body.prevAll('.tab-body').length;
        var container = body.closest('.tab-container');
        var ul = container.find('ul.tab');
        var li = ul.children().eq(index);
        var next = li.prev().length ? li.prev() : li.next();
        next.trigger('click');
        li.remove();
        body.remove();
    });

    $('.tab-container ul.tab.growth').each(function (index, ul) {
        var $ul = $(ul);
        var $li = $ul.children();
        var $button = $('<li class="growth-button" title="add a tab"></li>').appendTo($ul);
        var title = $li.text();
        var id = 1;
        var template;
        setTimeout(function () {
            template = $ul.closest(".tab-container").find('.tab-body').clone();
        });
        $button.click(function () {
            $newLi = $("<li></li>").html(title + id++);
            $button.before($newLi);
            $ul.closest(".tab-container").find('.tab-body:last-child').after(template.clone());
            $newLi.click();
        });
    });

    /* Header Menu */
    $("div.header").delegate("a.drop-down", 'mousedown', function (e) {
        var a = $(e.target);
        var li = a.closest("li");
        var ul = a.next("ul.drop-down-menu");
        if (li.hasClass("active")) {
            li.removeClass("active");
            ul.fadeOut();
            return;
        }
        $("div.header li.active").removeClass("active");
        li.addClass("active");
        if (!ul.length) return;
        var offset = a.offset();
        $("ul.drop-down-menu").css("display", "none");
        ul.css("display", "block");
        offset.top += a.height() + 15;
        offset.left -= ul.width() / 2 - a.width() / 2;
        ul.offset(offset);
        e.stopPropagation();

        $("body").one("mousedown", function (e) {
            $("ul.drop-down-menu").fadeOut("fast");
            $("div.header li.active").removeClass("active");
        });
    });

    $.extend($.fn, {
        tooltip: function( text, opt ) {
            var opt = $.extend({
                timeout: 1500
            }, opt);
            this.each(function(index, element) {
                var $target = $(element);

                var $div = $("<div>" + text + "<div class=\"knock\"></div></div>")
                    .addClass("tooltip").appendTo("body");

                var pos = $target.offset();
                pos.top -= $div.height();
                pos.left += $target.outerWidth();
                if (opt.left) {
                    pos.left += +opt.left;
                }
                if (opt.top) {
                    pos.top += +opt.top;
                }
                if (opt.right) {
                    pos.left += +opt.right;
                }
                if (opt.bottom) {
                    pos.top += +opt.bottom;
                }
                $div.css({
                    left: pos.left,
                    top: pos.top
                });
                if(opt.timeout > 0) {
                    setTimeout(function() {
                        $div.fadeOut(300, function() {
                            $div.remove();
                        });
                    }, opt.timeout);
                }
            });
        }
    });

    /* Tooltip */
    $("*[tooltip-text]").on("mouseover", function (e) {
        var $target = $(e.target);
        if (!$target.attr("tooltip-text")) return;
        var $div = $("<div>" + $target.attr("tooltip-text") + "<div class=\"knock\"></div></div>")
            .addClass("tooltip").appendTo("body");

        var tooltipOffset = resolveStyleDeclare($target.attr("tooltip-offset"));
        var pos = $target.offset();
        pos.top -= $div.height();
        pos.left += $target.outerWidth();
        if (tooltipOffset.left) {
            pos.left += +tooltipOffset.left;
        }
        if (tooltipOffset.top) {
            pos.top += +tooltipOffset.top;
        }
        if (tooltipOffset.right) {
            pos.left += +tooltipOffset.right;
        }
        if (tooltipOffset.bottom) {
            pos.top += +tooltipOffset.bottom;
        }
        $div.css({
            left: pos.left,
            top: pos.top
        });

        $target.one("mouseout", function () {
            $div.fadeOut();
        });
    });

    /* Select Widget */

    function resolveStyleDeclare(declare) {
        var pattern = /(\w+)\s*\:\s*([\w\-]+)/g,
            match;
        var resolved = {};
        while ((match = pattern.exec(declare))) {
            resolved[match[1]] = match[2];
        }
        return resolved;
    }

    function markdown(md) {
        return md.replace(/\*(\w+)\*/g, '<b>$1</b>');
    }

    $.extend($.fn, {
        selectwidget: function () {
            return this.each(function () {
                var $select = $(this);
                var $div = $('<div class="select-widget"></div>');
                var $label = $('<label class="select-value"></label>').appendTo($div);
                var $caret = $('<span class="select-caret"></span>').appendTo($div);
                var $popup;

                $select.after($div);
                $div.addClass($select[0].className);

                $popup = $('<ul class="select-option-list popup-list"></ul>').appendTo($div);
                var text = $select.attr("placeholder");
                $select.children("option").each(function () {
                    $option = $(this);
                    var $li = $('<li class="select-option"></li>').html(markdown($option.html())).appendTo($popup);
                    if ($option.attr("selected")) text = $option.text();
                });
                $label.html(markdown(text || $select.children("option").first().text()));

                var $detect = $select.clone().appendTo('body');
                var $detect2 = $label.clone().appendTo('body');
                var width = Math.max($detect2.width(), $detect.width());
                $detect.remove();
                $detect2.remove();

                $div.css("width", width);
                $popup.children().css("width", width);

                if ($select.hasClass('removable')) {
                    $div.after('<button class="select-widget-remove-button">-</button>');
                }

                $popup.css("display", 'none');

                $select.css("display", "none");
            });
        }
    });

    $('body').delegate('button.select-widget-remove-button', 'click', function () {
        var btn = $(this),
            widget = btn.prev(),
            select = widget.prev();
        btn.remove();
        widget.remove();
        select.remove();
    });

    $("select").selectwidget();

    $('body').delegate('.select-widget', 'click', function (e) {
        var $div = $(e.target).closest('.select-widget');
        $popup = $div.find('.select-option-list');
        if ($div.hasClass("active")) {
            $div.removeClass("active");
            $popup.fadeOut("fast");
        } else {
            $(".select-widget.active").removeClass("active")
                .find(".select-option-list").css("display", "none");
            $div.addClass("active");
            $popup.css("display", "block");
        }
        e.stopPropagation();
    })

    .delegate(".select-option", "click", function () {
        var index = $(this).prevAll().length;
        var $div = $(this).closest('.select-widget');
        var $select = $div.prev();
        var $label = $div.children('label');
        var $option = $select.children("option").removeAttr("selected").eq(index).attr("selected", "selected");
        if (!$select.hasClass('split-button')) {
            $label.html(markdown($option.text())).addClass("valued");
        } else {
            $option.trigger('selected');
        }
        $select.trigger('changed');
    })

    .on('click', function () {
        $('.select-widget').removeClass('active')
            .find(".select-option-list").fadeOut('fast');
    });

    /* Switch Widget */
    function switchWdiget() {
        var check = $(this);
        var div = $('<div>').addClass('switch');
        if (check.prop('checked')) {
            div.attr('checked', 'checked');
        }
        check.after(div);
        div.click(function () {
            check.click();
        });
    }
    $.extend($.fn, {
        switchwidget: function () {
            this.each(switchWdiget);
        }
    });
    $('input[type=checkbox].switch').switchwidget();

    /* Group Button */
    $('label.check-widget').on('click', function (e) {
        var $target = $(e.target);
        if ($target[0].tagName.toLowerCase() != 'label') return;
        if ($target.hasClass("single")) {
            if ($target.hasClass("active")) {
                $target.removeClass("active");
                $target.children("input").removeAttr("checked");
            } else {
                $target.addClass("active");
                $target.children("input").attr("checked", "checked");
            }
        } else {
            $target.siblings().removeClass("active").children("input").removeAttr("checked");
            $target.addClass("active").children("input").attr("checked", "checked");
        }
    });

    /* Fast Navigation */
    var content = $('div.content-container');

    function onscroll() {
        var top = document.body.scrollTop;
        if (top > 0) {
            $('div.fast-nav li.go-top').fadeIn("fast");
        } else {
            $('div.fast-nav li.go-top').fadeOut("fast");
        }
    }

    function onresize() {
        $('div.fast-nav').css("left", content.offset().left + content.width() + 10);
    }
    if (content.length) {
        onscroll();
        onresize();
        $(window).scroll(onscroll);
        $(window).resize(onresize);
    }

    /* Switcher */
    $(".switch").click(function (e) {
        if ($(e.target).attr('checked')) {
            $(e.target).removeAttr("checked");
        } else {
            $(e.target).attr("checked", "checked");
        }
    });

    /* Def support */
    var defContainer = $("<div></div>");
    $(".def").appendTo(defContainer);
    $.def = function (selector) {
        return defContainer.children(selector).clone().removeClass('def');
    };

    /* Paging Widget */

    function resolvePageSize(str) {
        var arr = str.split(' '),
            opt;
        var result = {
            options: [],
            value: 50
        };
        while ((opt = arr.shift())) {
            if (opt.charAt(0) == '[') {
                opt = opt.substr(1, opt.length - 2);
                result.value = +opt;
            }
            result.options.push(+opt);
        }
        return result;
    }
    $('div.paging-widget').on("paging-change", function () {
        var $widget = $(this).empty();
        var pageSizeOption = $widget.attr('page-size-option').split(' ');
        var pageSize = +$widget.attr('page-size');
        var itemCount = +$widget.attr('item-count');
        var pageIndex = +$widget.attr('page-index') || 1;
        var pageCount = Math.floor(itemCount / pageSize);

        $widget.attr('page-count', pageCount);
        if (pageIndex > pageCount) {
            $widget.attr('page-index', pageIndex = pageCount);
        }

        var $pso = $('<div class="page-size-option"></div>').appendTo($widget);
        while ((opt = pageSizeOption.shift())) {
            var $a = $("<a></a>").html(opt).appendTo($pso);
            if (pageSize == opt) $a.addClass('selected');
        }

        var $pn = $('<div class="page-navigator"></div>').appendTo($widget);
        $pn.append('<span>' + itemCount + ' items</span>');
        if (pageIndex == 1) {
            $pn.append('<span class="go-first"></span>');
            $pn.append('<span class="go-prev"></span>');
        } else {
            $pn.append('<a class="go-first"></a>');
            $pn.append('<a class="go-prev"></a>');
        }
        $pn.append('<span>' + pageIndex + ' of ' + pageCount + '</span>');
        if (pageIndex == pageCount) {
            $pn.append('<span class="go-next"></span>');
            $pn.append('<span class="go-last"></span>');
        } else {
            $pn.append('<a class="go-next"></a>');
            $pn.append('<a class="go-last"></a>');
        }
    })

    .delegate('div.page-size-option a', 'click', function (e) {
        var widget = $(e.target).closest('div.paging-widget');
        var newValue = +$(e.target).html();
        var oldValue = +widget.attr('page-size');
        if (oldValue != newValue) {
            widget.attr('page-size', newValue);
            widget.trigger('paging-change');
        }
    })

    .delegate('div.page-navigator a', 'click', function (e) {
        var target = $(e.target);
        var widget = target.closest('div.paging-widget');
        var pageIndex = +widget.attr('page-index');
        var pageCount = +widget.attr('page-count');

        if (target.hasClass('go-prev')) pageIndex--;
        if (target.hasClass('go-next')) pageIndex++;
        if (target.hasClass('go-first')) pageIndex = 1;
        if (target.hasClass('go-last')) pageIndex = pageCount;

        widget.attr('page-index', pageIndex).trigger('paging-change');
    })

    .trigger('paging-change');

    /* Dialog */
    $.extend($.fn, {
        showDialog: function () {
            var widget = $(this);
            widget.centerDialog().fadeIn("fast").trigger('dialogshow');
            $('body').addClass('masked');
        },
        hideDialog: function () {
            $(this).fadeOut("fast", function () {
                $('body').removeClass('masked');
            }).trigger('dialoghide');
        },
        centerDialog: function () {
            this.css({
                'margin-left': -this.outerWidth() / 2,
                'margin-top': -this.outerHeight() / 2
            });
            return this;
        }
    });

    $('body').delegate('.dialog-widget .close-dialog', 'click', function (e) {
        var dialog = $(e.target).closest('.dialog-widget');
        dialog.hideDialog();
    });

    /* Action Menu Support */

    function removeRow() {
        if (!confirm('Are you sure to remove this row?')) {
            return;
        }
        var tr = $(this.target).closest('tr');
        tr.children().animate({
            'background-color': '#A00',
            'color': 'white'
        }, "fast", function () {
            tr.remove();
        });
    }
    $.extend($.fn, {
        action: function (clickTarget, actions) {
            var popup = $('<ul></ul>').addClass('popup-list');
            for (var name in actions) {
                var action = actions[name];
                $('<li>')
                    .attr('action-name', name)
                    .text(action.text)
                    .addClass('action-' + name)
                    .appendTo(popup);
            }

            this.delegate(clickTarget, 'click', function (e) {
                var target = $(this);
                if (target.hasClass('active')) return;

                target.addClass('active');

                popup.appendTo(target.parent()).show().css({
                    left: target.offset().left - popup.width() / 2 + 20,
                    top: target.offset().top + target.height() + 5
                });

                $('body').one('click', function () {
                    popup.fadeOut("normal", function () {
                        popup.detach();
                    });
                    target.removeClass('active');
                });

                e.stopPropagation();
            })

            .delegate('.popup-list li', 'click', function (e) {
                var li = $(e.target);
                var name = li.attr('action-name');
                var action = actions[name];
                if (!action) return;
                action = action.action;
                e.removeRow = removeRow;
                action.call(e, e);
            });
            return this;
        }
    });

    /* Feedback Dialog */
    $('div.header div.action li.feedback').click(function () {
        $('#feedback-dialog').showDialog();
    });
});