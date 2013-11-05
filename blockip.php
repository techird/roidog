<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
    <link rel="stylesheet" href="css/blockip.css">
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/blockip.js"></script>
	<title>Block IP - Roidog</title>
</head>
<body>	
    <div class="dialog-widget new-block-ip-dialog">
        <div class="dialog-title">
            <h2>Add Blocked IP</h2>
        </div>
        <div class="dialog-content">
            <form class="stand-alone">
                <div class="field">
                    <label>Block Type</label>
                    <select id="block-ip-type" style="width: 150px;">
                        <option value="single">Block single IP</option>
                        <option value="region">Block IPs in a region</option>
                    </select>
                </div>
                <div class="field single-ip-field">
                    <label>Single IP</label>
                    <input type="text" style="width: 300px;" />
                </div>
                <div class="field region-ip-field">
                    <label>IP From</label>
                    <input type="text" style="width: 300px;" />
                </div>
                <div class="field region-ip-field">
                    <label>IP To</label>
                    <input type="text" style="width: 300px;" />
                </div>
                <div class="field">
                    <label>State</label>
                    <select style="width: 150px;">
                        <option value="blocked">Block the IP</option>
                        <option value="unblocked">Unblock the IP</option>
                    </select>
                </div>
                <div class="padding-box"></div>
                <div class="field">
                    <label></label>
                    <button class="submit small">Add</button>
                    <a class="close-dialog">Cancel</a>
                </div>
            </form>
        </div>
    </div>
	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Block IP</h1>
        <hr>
        <button id="add-block-ip-btn" class="form-button" type="button">Add Blocked IP</button>
    </div>
    <table id="block-ip-list" class="data-table stand-alone">
        <tr>
            <th>Block Type</th>
            <th>Single IP</th>
            <th>IP From</th>
            <th>IP To</th>
            <th>State</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><a>Block IPs in a region</a></td>
            <td>0.0.0.0</td>
            <td>192.168.2.1</td>
            <td>192.168.2.225</td>
            <td>Block the IP</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td><a>Block a single IP</a></td>
            <td>192.168.0.1</td>
            <td>0.0.0.0</td>
            <td>0.0.0.0</td>
            <td>Block the IP</td>
            <td><a class="action"></a></td>
        </tr>
    </table>
    <div class="paging-widget" page-size-option="20 50 100 200" page-size="50" item-count="482" page-index="2"></div>
	<?php include 'content_end.php' ?>

</body>
</html>