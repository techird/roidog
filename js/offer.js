$(function () {
    $('#create-offer-button').click(function() {
        window.location.href = "createoffer.php";
    });

    $('div.offer-list-paging').on('paging-change', function(e) {
        var widget = $(this);
        var param = {
            pagesize: +widget.attr('page-size'),
            pageindex: +widget.attr('page-index')
        };
        window.location.href = "#" + $.param(param);
    });

    $('table.offer-list').delegate('a.action', 'click', function(e) {
        var target = $(this);

        if(!target.hasClass('active')) {
            var popup = $('<ul></ul>').addClass('popup-list').appendTo(target.parent());
            popup.append('<li class="action-edit">Edit</li>');
            popup.append('<li class="action-delete">Delete</li>');
            popup.css({
                left: target.offset().left - popup.width() / 2 + 20,
                top: target.offset().top + target.height() + 5
            });
            target.addClass('active');
            $('body').one('click', function() {
                popup.fadeOut("normal", function() { popup.remove(); });
                target.removeClass('active');
            });
            e.stopPropagation();
        }
        
    })

    .delegate('.action-delete', 'click', function(e) {
        var tr = $(e.target).closest('tr');
        tr.children().animate({ 'background-color': '#A00', 'color': 'white' }, "fast", function() {
            tr.remove();
        });
    });
})