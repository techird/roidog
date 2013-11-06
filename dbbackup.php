<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>DB backup - Roidog</title>
    <style>
        h3 {
            font-family: Helvetica;
            font-size: 18px;
            margin:  20px 0;
            font-weight: normal;
        }
        button.submit.small, button.form-button {
            font-size: 14px;
        }
        button.normal-btn {
            position: relative;
            overflow: hidden;
        }
        input[type=file] {
            opacity: 0;
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
        }
        form {
            padding: 0;
            background: none;
        }
    </style>
</head>
<body>	

	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>DB backup</h1>
        <hr>
        <h3>backup your database</h3>
        <button class="submit small">Backup your database</button>
        <h3>Resore</h3>
        <form>
            <div class="field">
                <input type="text">
                <button class="normal-btn">Browse<input type="file" /></button>
            </div>
            <div class="field">
                <button class="form-button">restore</button>
            </div>
        </form>
    </div>
	<?php include 'content_end.php' ?>

</body>
</html>