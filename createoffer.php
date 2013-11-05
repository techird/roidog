<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>Create Offer - Roidog</title>
    <link rel="stylesheet" href="css/createoffer.css">
    <link rel="stylesheet" href="css/networkdialog.css">
    <script src="js/createoffer.js"></script>
</head>
<body>	
    <?php include 'new_network_dialog.php' ?>
	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Create Offer</h1>
        <hr />
    </div>
    <form class="stand-alone create-offer">
        <div class="field">
            <label>Split Test Name</label>
            <input class="longer" type="text" />
        </div>
        <div class="field">            
            <label>URL</label>
            <input class="longer" type="url" />
        </div>
        <div class="field">            
            <label>Affiliate Network</label>
            <select placeholder="Select a network...">
                <option>Baidu Online Inc.</option>
                <option>Qunar Flight Inc.</option>
            </select>
            <a class="new-network">New Network</a>
        </div>
        <div class="field">
            <label>Payout</label>
            <span class="dollor-mark"></span><input type="dollor" />
        </div>
        <div class="field">
            <label></label>
            <button id="create-offer-btn" type="button" class="submit">Create</button>
        </div>
    </form>
	<?php include 'content_end.php' ?>

</body>
</html>