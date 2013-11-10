$(function () {
    $('#campaign-list').action('a.action', {
        'edit': {
            text: 'Edit',
            action: function () {}
        },
        'performance': {
            text: 'Performance',
            action: function () {}
        },
        'clone': {
            text: 'Clone',
            action: function () {}
        },
        'delete': {
            text: 'Delete',
            action: function (e) {
                e.removeRow();
            }
        },
        'alert': {
            text: 'Alert',
            action: function (e) {
                $('#alert-dialog').showDialog();
            }
        },
        'note': {
            text: 'Notes',
            action: function () {}
        },
        'manage-group': {
            text: 'Manage Group',
            action: function () {
                $('#new-group-dialog').showDialog();
            }
        },
        'get-url': {
            text: 'Get URL',
            action: function () {
                $('#campaing-url-dialog').showDialog();
            }
        }
    });
});