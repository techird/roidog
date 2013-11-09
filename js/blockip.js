$(function () {
    $('#block-ip-list').action('a.action', {
        'edit': {
            text: 'Edit',
            action: function (e) {
                alert('请重写该方法');
            }
        },
        'delete': {
            text: 'Delete',
            action: function (e) {
                e.removeRow();
            }
        }
    });

    $('#add-block-ip-btn').on('click', function () {
        $('.new-block-ip-dialog').showDialog();
    });

    $('#block-ip-type').on('changed', function (e) {
        var val = $(e.target).val();
        var form = $(e.target).closest('form');
        if (val == 'single') {
            form.children('.single-ip-field').slideDown();
            form.children('.region-ip-field').slideUp();
        } else {
            form.children('.single-ip-field').slideUp();
            form.children('.region-ip-field').slideDown();
        }
    }).trigger('changed');
});