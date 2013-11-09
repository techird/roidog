$(function () {

	$('.landing-page').delegate('a.fold', 'click', function (e) {
		var $tr = $(e.target).closest("tr");
		$tr.addClass("expanded");
		if ($tr.next().hasClass('landing-page-detail')) {
			$tr.next().removeClass("hidden");
		}
	}).delegate('a.unfold', 'click', function (e) {
		var $tr = $(e.target).closest("tr");
		$tr.removeClass("expanded");
		if ($tr.next().hasClass('landing-page-detail')) {
			$tr.next().addClass("hidden");
		}
	});

	$('div.date-range').daterangepicker({
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
				'Last 7 Days': [moment().subtract('days', 6), moment()],
				'Last 30 Days': [moment().subtract('days', 29), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
			},
			startDate: moment().subtract('days', 29),
			endDate: moment()
		},
		function (start, end) {
			$('div.date-range label').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		}
	);

	$('#note-dialog-link').click(function () {
		$('#note-dialog').showDialog();
	});
	setTimeout(function () {
		$('#note-dialog-link').click();
	})
});