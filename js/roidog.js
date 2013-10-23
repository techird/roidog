$(function () {

/* Tab Widget */
	$('.tab-container').delegate('ul.tab li', 'click', function(e) {
		var li, index, container;
		li = $(e.target);
		if(li.hasClass('active')) return;

		li.addClass("active")
		  .siblings().removeClass("active");
		index = li.prevAll().length;
		container = li.closest(".tab-container");
		container.find(".tab-body").removeClass("active")
			.eq(index).addClass("active");
	});

/* Header Menu */
	$("div.header").delegate("a.drop-down", 'mousedown', function(e) {
		var a = $(e.target);
		var li = a.closest("li");
		var ul = a.next("ul.drop-down-menu");
		if(li.hasClass("active")) {
			li.removeClass("active");
			ul.fadeOut();
			return;
		}
		$("div.header li.active").removeClass("active");
		li.addClass("active");
		if(!ul.length) return;
		var offset = a.offset();
		$("ul.drop-down-menu").css("display", "none");
		ul.css("display", "block");
		offset.top += a.height() + 15;
		offset.left -= ul.width() / 2 - a.width() / 2;
		ul.offset(offset);
		e.stopPropagation();

		$("body").one("mousedown", function(e) {
			$("ul.drop-down-menu").fadeOut("fast");
			$("div.header li.active").removeClass("active");
		});
	});

/* Tooltip */
	$("*[tooltip-text]").on("mouseover", function(e) {
		var $target = $(e.target);
		if(!$target.attr("tooltip-text")) return;
		var $div = $("<div>" + $target.attr("tooltip-text") + "<div class=\"knock\"></div></div>")
			.addClass("tooltip").appendTo("body");

		var tooltipOffset = resolveStyleDeclare($target.attr("tooltip-offset"));
		var pos = $target.offset();
		pos.top -= $div.height();
		pos.left += $target.outerWidth();
		if(tooltipOffset.left) {
			pos.left += +tooltipOffset.left;
		}
		if(tooltipOffset.top) {
			pos.top += +tooltipOffset.top;
		}
		if(tooltipOffset.right) {
			pos.left += +tooltipOffset.right;
		}
		if(tooltipOffset.bottom) {
			pos.top += +tooltipOffset.bottom;
		}
		$div.css({
			left: pos.left,
			top: pos.top
		});

		$target.one("mouseout", function() {
			$div.fadeOut();
		})
	});

/* Select Widget */
	function resolveStyleDeclare( declare ) {
		var pattern = /(\w+)\s*\:\s*([\w\-]+)/g, match;
		var resolved = {};
		while(match = pattern.exec(declare)) {
			resolved[match[1]] = match[2];
		}
		return resolved;
	}

	function markdown(md) {
		return md.replace(/\*(\w+)\*/g, '<b>$1</b>');
	}

	$("select").each(function() {
		var $select = $(this);
		var $div = $('<div class="select-widget"></div>');
		var $label = $('<label class="select-value"></label>').appendTo($div);
		var $caret = $('<span class="select-caret"></span>').appendTo($div);
		var $popup;

		$select.after($div);
		$div.addClass($select[0].className);

		$popup = $('<ul class="select-option-list"></ul>').appendTo($div);
		var text = $select.attr("placeholder");
		$select.children("option").each(function() {
			$option = $(this);
			var $li = $('<li class="select-option"></li>').html(markdown($option.html())).appendTo($popup);
			if($option.attr("selected")) text = $option.text();
		});
		$label.html(markdown(text || $select.children("option").first().text()));

		var width = Math.max($label.width(), $select.width())

		$div.css("width", width);
		$popup.children().css("width", width);

		$popup.css("display", 'none');

		$div.click(function(e) {
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
		});

		$('body').click(function() {
			$div.removeClass("active");
			$popup.fadeOut("fast");
		});

		$div.delegate(".select-option", "click", function() {
			var index = $(this).prevAll().length;
			var text = $select.children("option").removeAttr("selected").eq(index).attr("selected", "selected").text();
			$label.html(markdown(text)).addClass("valued");
		});
		
	}).css("display", "none");

/* Group Button */
	$('label.check-widget').on('click', function(e) {
		var $target = $(e.target);
		if($target[0].tagName.toLowerCase() != 'label') return;
		if($target.hasClass("single")) {
			if($target.hasClass("active")) {
				$target.removeClass("active");
				$target.children("input").removeAttr("checked");
			} else {
				$target.addClass("active");
				$target.children("input").attr("checked", "checked");
			}
		}else {
			$target.siblings().removeClass("active").children("input").removeAttr("checked");
			$target.addClass("active").children("input").attr("checked", "checked");
		}
	});

/* Fast Navigation */
	function onscroll() {
		var top = document.body.scrollTop;
		if(top > 0) {
			$('div.fast-nav li.go-top').fadeIn("fast");
		} else {
			$('div.fast-nav li.go-top').fadeOut("fast");
		}
	}
	function onresize() {
		var body = $('div.content-container');
		$('div.fast-nav').css("left", body.offset().left + body.width() + 10);
	}
	onscroll();
	onresize();
	$(window).scroll(onscroll);
	$(window).resize(onresize);

/* Switcher */
	$(".switch").click(function(e) {
		$(e.target).attr('checked') ? $(e.target).removeAttr("checked") : $(e.target).attr("checked", "checked");
	});
});






