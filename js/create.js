$(function () {
	function getOfferOrProductList( callback ) {
		var data = [];
		var offers = ["Header", "Soft­wa­re De­ve­l­oper and Ga­me De­ve­l­oper", "Mar­ke­ting as­sis­tant", "User in­ter­face de­ve­lop­ment", "as­sis­tant so­ci­al rea­se­ar­ch", "Re­se­ar­ch Po­si­ti­on", "Trainee in the in­dus­t­ri­al Eye­we­ar-Pro­duc­ti­on", "Trainee for .NET de­ve­lop­ment", "Sys­tem Pla­ner for Au­dio / Vi­deo / Ligh­t­ing Tech­no­lo­gy", "R & D In­ternship – High Po­wer Di­o­de La­sers", "IT-Ex­pert for im­p­le­men­ta­ti­on of erp-sys­tem", "In­tern­ship - Core devel­op­ment / Web ap­plic­a­tion devel­op­ment", "In­ternship Cli­ni­cal tri­als moni­to­ring, me­di­cal re­view", "In­ter­ship pos­i­tion - Cul­tur­al Man­age­ment, Arts Ad­min­is­tra­tion", "6-mon­th in­ternship in st­ra­te­gic re­se­ar­ch and mul­ti­di­sci­p­li­na­ry ana­ly­sis", "Eng­l­ish Class Assistant", "4 In­tern­ship Pos­i­tions European Auto­mot­ive After­mar­ket in Mar­ket­ing/Pri­cing/Busi­ness Devel­op­ment/HR", "Prak­ti­kum Ecom­mer­ce/On­li­ne Mar­ke­ting", "In­ternship / Mas­ter The­sis Im­mer­si­ve Au­dio", "In­ternship / Mas­ter The­sis Com­pu­ter Vi­si­on", "The In­tern­a­tion­al Of­fice of­fers a semester long Er­as­mus Work Place­ment as Ju­ni­or In­tern­a­tion­al Re­la­tions ..."];
		for(var i = 0; i < offers.length; i++) {
			data.push({
				id: 10023 + i,
				name: offers[i]
			});
		}
		callback(data);
	}

	getOfferOrProductList(function(data) {
		var length = data.length;

		var $search = $(".field .offers .search-box input");
		var $selected = $('.field .offers .selected ul');
		var $suggest = $('.field .offers .search ul');
		function isSelected(id) {
			var array = $selected.children().map(function(){ 
				return +$(this).attr('data-id')
			}).toArray();
			return ~array.indexOf(id);
		}

		function removeSelected(id) {
			$selected.children("li[data-id='" + id + "']").remove();
			$suggest.find("input[data-id='" + id + "']").removeAttr("checked");
		}
		function checkEmpty() {
			if($selected.children().length) {
				$selected.parent().removeClass("empty");
			} else {
				$selected.parent().addClass("empty");
			}
		}

		$search.on('keyup', function(e) {
			var keyword = $search.val().toLowerCase();
			$suggest.empty();
			$.each(data, function(index, item) {
				var name = item.name;
				if(~name.toLowerCase().indexOf(keyword)) {
					var $chk_container = $("<li><label>" + name + "</label></li>").appendTo($suggest);
					var $chk = $('<input type="checkbox" />').attr("data-id", item.id).prependTo($chk_container.children());
					if(isSelected(item.id)) $chk.attr("checked", "checked");		
				}
			});
		}).on('keyup');

		$suggest.delegate('input[type=checkbox]', 'change', function(e) {
			var $chk = $(e.target);
			if($chk.prop("checked")) {
				$("<li></li>").html($chk.parent().text())
					.attr("data-id", $chk.attr("data-id"))
					.append('<a class="close round-small"></a>')
					.appendTo($selected);
			} else {
				removeSelected($chk.attr("data-id"));
			}
			checkEmpty();
		});
		$selected.delegate("a.close", 'click', function(e) {
			var li = $(e.target).parent();
			removeSelected(li.attr("data-id"));
			checkEmpty();
		});
	});

	$('.panel.landing-page')
		.delegate('.new-output select.split-button option', 'selected', function(e) {
			var $con = $(e.target).closest('.new-output');
			var $ul = $con.find('.rotations > ul');
			var $li = $.def($(e.target).val()).css("display", "none");
			$ul.closest('.field').removeClass('empty');
			$ul.append($li);
			$li.slideDown("fast");
		})
		.delegate('.rotations li.closable', 'close' , function(e){
			var $li = $(e.target);
			var isSingle = $li.siblings().length == 0;
			if(isSingle) {
				$li.closest('.field').addClass('empty');
			}
		})
		.delegate('.new-output-btn', 'click', function(e) {
			$(e.target).before($.def('.new-output'));
		});

	$('.panel.campaign-url')
		.delegate('.param-container button', 'click', function(e) {
			var li = $.def(".campaign-param").css("display", "none");
			$(e.target).prev().append(li);
			li.slideDown("fast");
		})
		.delegate('.traffic-container select.split-button option', 'selected', function(e) {
			var $ul = $(e.target).parent().prev();
			var $li = $.def($(e.target).val()).css("display", "none");
			$ul.append($li);
			$li.slideDown("fast");
		});

	$('.panel.advanced')
		.delegate('.condition select.split-button option', 'selected', function(e) {
			var $ul = $(e.target).parent().prev();
			var $li = $.def($(e.target).val()).css("display", "none");
			$ul.append($li);
			$li.slideDown("fast");
		})
		.delegate('.redirect button.form-button', 'click', function(e) {
			var li = $.def('.rule-redirect-url').css("display", 'none');
			$(e.target).prev().append(li);
			li.slideDown('fast');
		});

	$('.panel.improvely-code')
		.delegate('div.copy-url button', 'click', function(e) {
			var url = $(e.target).prev()[0].select(-1);
		});
})