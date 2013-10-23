<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>New Campiagn - Roidog</title>
	<script type="text/javascript" src="js/create.js"></script>
	<link rel="stylesheet" type="text/css" href="css/create.css">
</head>
<body>	

	<?php include 'content_start.php' ?>
	
	<div class="create-form-container">
		<h1>New Compaign</h1>
		<form class="campaign-basic-info">
			<div class="field">
				<label for="name">Campaign Name</label>
				<input type="text" name="name" />
			</div>
			<div class="field">
				<label for="mobile">Mobile</label>
				<input type="checkbox" class="switch" />
			</div>
			<div class="field">
				<label for="active">Active</label>
				<input type="checkbox" class="switch" />
			</div>
			<div class="field">
				<label for="group">Group</label>
				<select name="group" style="form-select" placeholder="select a group">
					<option value="">Group1</option>
					<option value="">Group2</option>
				</select>
				<a href="">New Group</a>
			</div>
			<div class="field">
				<label for="timezone">Time Zone</label>
				<select name="timezone" placeholder="select a time zone">
					<option value="">Beijing (UTC + 8:00)</option>
				</select>
			</div>
			<div class="field top-align">
				<label for="">Offers / Products</label>
				<div class="offers">
					<div class="selected empty">
						<ul>
						</ul>
					</div>
					<div class="search">
						<div class="search-box">
							<input type="search" placeholder="search" />
						</div>
						<ul></ul>
					</div>
				</div>
				<a href="">New Offer</a>
			</div>
		</form>
	</div>

	<?php include 'content_end.php' ?>

</body>
</html>