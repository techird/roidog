$(function() {
    $('table.report-list').delegate('a.expander', 'click', function(e) {
        var tr = $(e.target).toggleClass('expanded').closest('tr').next();
        tr.toggleClass('expanded');
    });
});