$(function () {

	$('#traffic-source-list').action('a.action', {
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

	$('#add-traffic-source-btn').click(function () {
		$('#create-traffic-source-dialog').showDialog();
	});
});