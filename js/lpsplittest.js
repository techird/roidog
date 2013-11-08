$(function () {
    $('#split-test-list').action('a.action', {
        'edit': {
            text: 'Edit',
            action: function () {}
        },
        'delete': {
            text: 'Delete',
            action: function (e) {
                e.removeRow();
            }
        },
        'manage-group': {
            text: 'Manage Group',
            action: function () {}
        }
    });
    $('#create-test-button').click(function () {
        $('#new-test-dialog').showDialog();
    });
});