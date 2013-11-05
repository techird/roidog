$(function() {
    $('#campaign-list').action('a.action', {
        'edit' : {
            text: 'Edit',
            action: function() {}
        },
        'performance' : {
            text: 'Performance',
            action: function() {}
        },
        'clone' : {
            text: 'Clone',
            action: function() {}
        },
        'delete' : {
            text: 'Delete',
            action: function(e) {
                e.removeRow();
            }
        },
        'alert' : {
            text: 'Alert',
            action: function(e) {}
        },
        'note' : {
            text: 'Notes',
            action: function() {}
        },
        'manage-group' : {
            text: 'Manage Group'
        },
        'get-url' : {
            text: 'Get URL',
            action: function() {
                $('#campaing-url-dialog').showDialog();
            }
        }
    });
});