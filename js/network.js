$(function () {    

    $('table.network-list').action('a.action', 
    {
        'edit' : {
            text: 'Edit',
            action: function(e) {
                alert('请重写该方法');
            } 
        },
        'delete' : {
            text: 'Delete',
            action: function(e) {
                e.removeRow();
            }
        }
    });

    $('#create-network-button').click(function() {
        $('#new-network-dialog').showDialog();
    });
});