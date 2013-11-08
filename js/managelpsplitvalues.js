$(function () {

	$('#lp-value-list').action('a.action', {
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

	$('#add-new-value-btn').click(function () {
		$('#new-value-dialog').showDialog();
	});
});