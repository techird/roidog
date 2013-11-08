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

    <div id="create-traffic-source-dialog" class="dialog-widget">
        <div class="dialog-title"><h2>Create Traffic Source</h2></div>
        <div class="dialog-content">
            <form class="stand-alone longer">
                <div class="field">
                    <label>Name<span class="required">*</span></label>
                    <input type="text" class="longer">
                </div>
                <div class="field">
                    <label>Cost Type</label>
                    <select>
                        <option selected="selected">Type A</option>
                        <option value="0">Type B</option>
                        <option value="">Type C</option>
                    </select>
                </div>
                <div class="field">
                    <label>Keyword</label>
                    <input type="text" class="longer">
                </div>
                <div class="field">
                    <label>Key Append</label>
                    <input type="text" class="longer">
                </div>
                <div class="padding-box"></div>
                <div class="field">
                    <label></label>
                    <button id="create-traffic-source-btn" class="submit small">Save</button>
                    <a class="close-dialog">Cancel</a>
                </div>
            </form>
        </div>
    </div>

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