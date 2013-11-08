<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
    <link rel="stylesheet" href="css/managelpsplitvalues.css">
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/managelpsplitvalues.js"></script>
	<title>Manage LP Split Values - Roidog</title>
</head>
<body>	

    <div id="new-value-dialog" class="dialog-widget">
        <div class="dialog-title"><h2>Create Spilit Test Value</h2></div>
        <div class="dialog-content">
            <form class="stand-alone longer">
                <div class="field">
                    <label>Value Name<span class="required">*</span></label>
                    <input type="text" class="longer">
                </div>
                <div class="field">
                    <label>Value Link<span class="required">*</span></label>
                    <input type="text" class="longer">
                </div>
                <div class="field">
                    <label>Confirm<span class="required">*</span></label>
                    <select>
                        <option selected="selected">Testing</option>
                        <option value="0">Winner</option>
                        <option value="">Loser</option>
                    </select>
                </div>
                <div class="padding-box"></div>
                <div class="field">
                    <label></label>
                    <button id="create-value-btn" class="submit small">Save</button>
                    <a class="close-dialog">Cancel</a>
                </div>
            </form>
        </div>
    </div>

	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Block IP</h1>
        <hr>
        <button id="add-new-value-btn" class="form-button" type="button"><span class="icon-add">+</span>Create New Value</button>
        <p>
            <span>Split Test Name: kkkjj</span>
            <span>Campaign: advertcn-promotion</span>
            <span>Landing Page: cn.affoffice.com</span>
        </p>
    </div>
    <table id="lp-value-list" class="data-table stand-alone">
        <tr>
            <th>Value Name</th>
            <th>Value Link</th>
            <th>Status</th>
            <th>Share</th>
            <th>View Count</th>
            <th>Click Count</th>
            <th>CTR</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>advertcn-promotion</td>
            <td>imgforest/jinshenyigirl.jpg</td>
            <td>Testing</td>
            <td>50%</td>
            <td>0</td>
            <td>0</td>
            <td>0.00%</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>advertcn-promotion</td>
            <td>imgforest/jinshenyigirl.jpg</td>
            <td>Testing</td>
            <td>50%</td>
            <td>0</td>
            <td>0</td>
            <td>0.00%</td>
            <td><a class="action"></a></td>
        </tr>
    </table>
    <div class="paging-widget" page-size-option="20 50 100 200" page-size="50" item-count="482" page-index="2"></div>
	<?php include 'content_end.php' ?>

</body>
</html>