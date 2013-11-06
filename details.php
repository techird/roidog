<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>Details - Roidog</title>
    <link rel="stylesheet" href="css/networkdialog.css">
    <script src="js/createoffer.js"></script>
    <style>
        form.save-detail {
            margin-top: -10px;
        }
        #save-detail-btn {
            margin: 20px 0;
            width: 80px;
        }
        a.new-network {
            font-size: 14px;
        }
    </style>
</head>
<body>	
    <?php include 'new_network_dialog.php' ?>
	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Details</h1>
        <hr />
        <p><b>Create Offer</b> 15803 Cupid - Mobile Web 18+ Registration - UK</p>
    </div>
    <form class="stand-alone save-detail">
        <div class="field">
            <label>Name</label>
            <input class="longer" type="text" value="15803 Cupid - Mobile Web 18+ Registration - UK" />
        </div>
        <div class="field">            
            <label>URL</label>
            <input class="longer" type="url" value="http://fbsvu.com/click/?s=229794&amp;c=829668" />
        </div>
        <div class="field">            
            <label>Affiliate Network</label>
            <select placeholder="Select a network...">
                <option selected>neverblue</option>
                <option>Qunar Flight Inc.</option>
            </select>
            <a class="new-network">New Network</a>
        </div>
        <div class="field">
            <label>Payout</label>
            <span class="dollor-mark"></span><input type="dollor" value="2.10" />
        </div>
        <div class="field">
            <label></label>
            <button id="save-detail-btn" type="button" class="submit">Save</button>
        </div>
    </form>
	<?php include 'content_end.php' ?>

</body>
</html>