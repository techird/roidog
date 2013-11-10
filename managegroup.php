<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>Manage Group - Roidog</title>
    <style>
        table.groups {
            margin: -20px 30px 0;
        }
        table.groups td {
            font-size: 14px;
            padding: 10px 100px 10px 0;
        }
    </style>
    <script>
    $(function () {
        $('#new-group-dialog-button').click(function(){
            $('#new-group-dialog').showDialog();
        });
    });
    </script>
</head>
<body>	
    <?php include "new_group_dialog.php" ?>
	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Manage Group</h1>
        <hr>
        <button id="new-group-dialog-button" class="form-button"><span class="icon-add">+</span>New Group</button>
    </div>
    <table class="groups">
        <tr>
            <td>bigdeamastermind</td>
            <td><a class="delete">Delete</a></td>
        </tr>
        <tr>
            <td>Group1-this</td>
            <td><a class="delete">Delete</a></td>
        </tr>
        <tr>
            <td>Group2-that</td>
            <td><a class="delete">Delete</a></td>
        </tr>
        <tr>
            <td>be2</td>
            <td><a class="delete">Delete</a></td>
        </tr>
        <tr>
            <td>singleparentment</td>
            <td><a class="delete">Delete</a></td>
        </tr>
    </table>
	<?php include 'content_end.php' ?>

</body>
</html>