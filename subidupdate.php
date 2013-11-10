<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>Subid Update - Roidog</title>
    <style>
        form.stand-alone {
            margin-top: -20px;
        }
        form.stand-alone div.field label {
            width: 80px;
        }
        form.stand-alone div.field textarea {
            width: 600px;
            height: 120px;
        }
    </style>
</head>
<body>	

	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Subid Update</h1>
        <hr>
    </div>
    <form class="stand-alone">
        <div class="field top-align">
            <label for="">Subid List</label>
            <textarea></textarea>
        </div>
        <div class="field">
            <label for=""></label>
            <button class="submit" style="margin-top: 20px;">Update</button>
        </div>
    </form>
	<?php include 'content_end.php' ?>

</body>
</html>