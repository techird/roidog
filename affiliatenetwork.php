<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>New Page - Roidog</title>
    <link rel="stylesheet" href="css/network.css">
    <link rel="stylesheet" href="css/networkdialog.css">
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src='js/network.js'></script>
</head>
<body>	
    <?php include 'new_network_dialog.php' ?>
	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Affiliate Network Setting</h1>
        <hr>
        <button id="create-network-button" class="form-button"><span class="icon icon-add">+</span><span>New Affiliate Network</span></button>
    </div>
    <table class="data-table stand-alone network-list">
        <tr>
            <th>Traffic Network Name</th>
            <th>Host</th>
            <th>Subid Key</th>
            <th>Cloak</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>backbea network</td>
            <td>http://www.backbts.com</td>
            <td>subid</td>
            <td>Yes</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>affoffice</td>
            <td>http://www.affoffice.com</td>
            <td>subid</td>
            <td>Yes</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>Yeahmobi</td>
            <td>http://yeahmobi.om</td>
            <td>aff_sub</td>
            <td>No</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>backbea network</td>
            <td>http://www.backbts.com</td>
            <td>subid</td>
            <td>Yes</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>affoffice</td>
            <td>http://www.affoffice.com</td>
            <td>subid</td>
            <td>Yes</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>Yeahmobi</td>
            <td>http://yeahmobi.om</td>
            <td>aff_sub</td>
            <td>No</td>
            <td><a class="action"></a></td>
        </tr>
    </table>
	<?php include 'content_end.php' ?>

</body>
</html>