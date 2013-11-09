<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
    <link rel="stylesheet" href="css/trafficsource.css">
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/trafficsource.js"></script>
	<title>Traffic Source - Roidog</title>
</head>
<body>	

    <?php include 'new_traffic_source_dialog.php' ?>
	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Traffic Source</h1>
        <hr>
        <button id="add-traffic-source-btn" class="form-button" type="button"><span class="icon-add">+</span>New Traffic Source</button>
    </div>
    <table id="traffic-source-list" class="data-table stand-alone">
        <tr>
            <th>Traffic Network Name</th>
            <th>Cost Type</th>
            <th>Keyword</th>
            <th>Key Append</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>xinlangweibo</td>
            <td>CPV</td>
            <td></td>
            <td></td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>xinlangweibo</td>
            <td>CPV</td>
            <td></td>
            <td></td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>xinlangweibo</td>
            <td>CPV</td>
            <td></td>
            <td></td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>xinlangweibo</td>
            <td>CPV</td>
            <td></td>
            <td></td>
            <td><a class="action"></a></td>
        </tr>
    </table>
    <div class="paging-widget" page-size-option="20 50 100 200" page-size="50" item-count="482" page-index="2"></div>
	<?php include 'content_end.php' ?>

</body>
</html>