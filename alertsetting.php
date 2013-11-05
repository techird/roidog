<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
    <link rel="stylesheet" href="css/alertsetting.css">
	<title>Alert Setting - Roidog</title>
</head>
<body>	

	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Alert Setting</h1>
        <hr>
    </div>
    <form class="alerts">
        <div class="field">
            <input type="checkbox" class="switch" checked>
            <span>Campaign's ROL less than</span>
            <input type="text" class="short" value="10.0">
            <span>%</span>
        </div>
        <div class="field">
            <input type="checkbox" class="switch">
            <span>Campaign's CR (Conversion Rate) less than</span>
            <input type="text" class="short" value="0.10">
            <span>%</span>
        </div>
        <div class="field">
            <input type="checkbox" class="switch" checked>
            <span>Campaign's click more than</span>
            <input type="text" class="short" value="100">
            <span>. But its conversion less than</span>
            <input type="text" class="short" value="2">
        </div>
        <div class="field">
            <input type="checkbox" class="switch">
            <span>Campaign's click less than</span>
            <input type="text" class="short" value="100">
            <span>. But its cost more than</span>
            <input type="text" class="short" value="100.0">
        </div>
        <div class="field">
            <input type="checkbox" class="switch">
            <span>Landing page is shown more than </span>
            <input type="text" class="short" value="100">
            <span>times and its CTR less than</span>
            <input type="text" class="short" value="0.1">
        </div>
        <div class="field">
            <input type="checkbox" class="switch" checked>
            <span>Landing page is shown more than </span>
            <input type="text" class="short" value="100">
            <span>times and its CTR less than</span>
            <input type="text" class="short" value="0.1">
        </div>
        <div class="field">
            <input type="checkbox" class="switch">
            <span>Landing page's click more than</span>
            <input type="text" class="short" value="100">
            <span>and its conversion less than </span>
            <input type="text" class="short" value="2">
        </div>
    </form>
	<?php include 'content_end.php' ?>

</body>
</html>