<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>New Campiagn - Roidog</title>
	<script type="text/javascript" src="js/ZeroClipboard.min.js"></script>
	<script type="text/javascript">
		ZeroClipboard.setDefaults( { moviePath: 'js/ZeroClipboard.swf' } );
	</script>
	<script type="text/javascript" src="js/create.js"></script>
	<link rel="stylesheet" type="text/css" href="css/create.css">
</head>
<body>	

	<div id="new-offer-dialog" class="dialog-widget">
	    <div class="dialog-title"><h2>Create New Offer</h2></div>
	    <div class="dialog-content">
	        <form class="stand-alone longer">
	            <div class="field">
	                <label>Offer Name<span class="required">*</span></label>
	                <input type="text">
	            </div>
	            <div class="field">
	                <label>Offer URL<span class="required">*</span></label>
	                <input type="text">
	            </div>
	            <div class="field">
	                <label>Affiliate Network</label>
	                <select placeholder="Select a network...">
	                    <option selected="selected">Net 1</option>
	                    <option>Net 2</option>
	                </select>
	                <a class="new-network-expander">New Network</a>
	            </div>
	            <div class="sub-form">
	            	<div class="field">
	            		<label for="">Name<span class="required">*</span></label>
	            		<input type="text">
	            	</div>
	            	<div class="field">
	            		<label for="">Host</label>
	            		<input type="text">
	            	</div>
	            	<div class="field">
	            		<label for="">Subid Key<span class="required">*</span></label>
	            		<input type="text">
	            	</div>
	            	<div class="field">
	            		<label for="">Cloak<span class="required">*</span></label>
	            		<select name="" id="">
	            			<option value="">Yes</option>
	            			<option value="">No</option>
	            		</select>
	            	</div>
	            	<div class="field">
	            		<label for="">Description<span class="required">*</span></label>
	            		<textarea></textarea>
	            	</div>
	            	<div class="padding-box"></div>
	            	<div class="field">
	            		<label></label>
	            		<button class="form-button save-network-button" type="button">Save</button>
	            	</div>
	            </div>
	            <div class="field">
	                <label>Payout</label>
	                <span class="dollor-mark"></span><input type="dollor" class="dollor">
	            </div>
	            <div class="padding-box"></div>
	            <div class="field">
	                <label></label>
	                <button id="save-offer-btn" class="submit small">Save</button>
	                <a class="close-dialog">Cancel</a>
	            </div>
	        </form>
	    </div>
	</div>
	<?php include 'new_group_dialog.php' ?>
    <?php include 'new_traffic_source_dialog.php' ?>

	<?php include 'content_start.php' ?>
	
	<div class="create-form-container">
		<h1>New Compaign</h1>
		<form class="campaign-basic-info">
			<div class="field">
				<label for="name">Campaign Name</label>
				<input type="text" name="name" />
			</div>
			<div class="field">
				<label for="active">Active</label>
				<input type="checkbox" class="switch" checked />
			</div>
			<div class="field">
				<label for="mobile">Mobile</label>
				<input type="checkbox" class="switch" />
			</div>
			<div class="field">
				<label for="group">Group</label>
				<select name="group" class="form-select" style="width: 150px;" placeholder="select a group">
					<option value="">Group1</option>
					<option value="">Group2</option>
				</select>
				<a class="new-group-dialog-link">New Group</a>
			</div>
			<div class="field">
				<label for="timezone">Time Zone</label>
				<select name="timezone" placeholder="select a time zone" style="width: 150px;" >
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
				<a class="open-new-offer-dialog">New Offer</a>
			</div>
		</form>
		<div class="panel landing-page tab-container">
			<div class="panel-header">
				<h2>Landing page</h2>
			</div>
			<ul class="tab block growth">
				<li class="active">Landing page</li>
			</ul>
			<div class="panel-content tab-body active">
				<form>
					<div class="field">
						<label>Landing Page Name</label>
						<input type="text" class="longer" />
					</div>
					<div class="field">
						<label>Landing Page URL</label>
						<input type="text" class="longer" />
					</div>	
				</form>					
				<div class="def new-output closable">
					<a class="close square"></a>
					<form>
						<div class="field">
							<label>output name</label>
							<input type="text" class="longer" >
						</div>
						<div class="field top-align empty">
							<label></label>
							<div class="rotations">
								<ul>
									<li class="def new-offer-rotation sub-item closable">
										<label>Rotation to offer</label>
										<select placeholder="select a group">
											<option>Group1</option>
											<option>Group2</option>
										</select>
										<span>share</span>
										<input type="text" class="short" />
										<span>%</span>
										<a class="close round"></a>
									</li>
									<li class="def new-landing-rotation sub-item closable">
										<label>Rotation to Landing page</label>
										<select placeholder="select a group">
											<option value="offer">group1</option>
											<option value="offer">group2</option>
										</select>
										<span>share</span>
										<input type="text" class="short" />
										<span>%</span>
										<a class="close round"></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="field">
							<label></label>
							<select class="split-button" placeholder="New rotation to">
								<option value=".new-offer-rotation">offer</option>
								<option value=".new-landing-rotation">landing page</option>
							</select>
						</div>
					</form>
				</div>
				<button class="new-output-btn form-button" type="button">New output link</button>
				<a class="remove-tab">Delete this Landing Page</a>
			</div>
		</div>
		<div class="panel campaign-url tab-container">
			<div class="panel-header">
				<h2>Compaign URL</h2>
			</div>
			<ul class="tab block growth">
				<li class="active">Compaign URL</li>
			</ul>
			<div class="panel-content tab-body active">
				<form>
					<div class="field">
						<label>Campaign URL name</label>
						<input type="text" />
					</div>
					<div class="field">
						<label>Traffic Source</label>
						<select placeholder="select a group" style="width: 150px;">
							<option value="group">Group1</option>
						</select>
						<a class="new-traffic-source-dialog-link">New Traffic Source</a>
					</div>
					<div class="field">
						<label>CPC($)</label>
						<input type="text" />
					</div>
					<div class="field">
						<label>Keyword Token</label>
						<input type="text" value="roidog_kw" disabled />
						<label>Keyword Value</label>
						<input type="text" />
					</div>
					<div class="field">
						<label></label>
						<div class="param-container">
							<ul>
								<li class="def campaign-param sub-item gray closable">
									<label>Parameter Name</label>
									<input type="text" />
									<span>Value</span>
									<input type="text" />
									<a class="close round"></a>
								</li>
							</ul>
							<button class="form-button" type="button">New parameter</button>
						</div>
					</div>
					<div class="padding-box"></div>
					<div class="field top-align">
						<label style="line-height: 40px;">Assign Traffic Source</label>
						<div class="traffic-container">
							<ul>
								<li class="def assign-traffic-to-landing-page gray sub-item closable">
									<label>To landing page</label>
									<select placeholder="select a group">
										<option value="">Group1</option>
									</select>
									<span>share</span>
									<input type="text" class="short" />
									<span>%</span>
									<a class="close round"></a>
								</li>
								<li class="def assign-traffic-to-offer sub-item gray closable">
									<label>To offer</label>
									<select placeholder="select a group">
										<option value="">Group1</option>
									</select>
									<span>share</span>
									<input type="text" class="short" />
									<span>%</span>
									<a class="close round"></a>
								</li>
							</ul>
							<select class="split-button" placeholder="Split Traffic To">
								<option value=".assign-traffic-to-landing-page">Landing Page</option>
								<option value=".assign-traffic-to-offer">Offer</option>
							</select>
						</div>
					</div>
				</form>
				<a class="remove-tab">Delete this URL</a>
			</div>
		</div>
		<div class="panel advanced collapsible collapsed">
			<div class="panel-header">
				<h2>Advanced</h2>
			</div>
			<div class="panel-content">
				<h3>Redirect</h3>
				<form>
					<div class="field">
						<label></label>
						<div class="condition">
							<ul>
								<li class="sub-item">
									<label class="short">
										<span class="if">IF</span>
									</label>
									<select class="short" placeholder="param...">
										<option value="">Param1</option>
									</select>
									<select class="short" placeholder="compare">
										<option value="">=</option>
										<option value="">&gt;</option>
										<option value="">&lt;</option>
									</select>
									<input type="text" />
								</li>
								<li class="def and-condition sub-item gray closable">
									<label class="short">And</label>
									<select class="short" placeholder="param...">
										<option value="">Param1</option>
									</select>
									<select class="short" placeholder="compare">
										<option value="">=</option>
										<option value="">&gt;</option>
										<option value="">&lt;</option>
									</select>
									<input type="text" />
									<a class="close round"></a>
								</li>
								<li class="def or-condition sub-item gray closable">
									<label class="short">Or</label>
									<select class="short" placeholder="param...">
										<option value="">Param1</option>
									</select>
									<select class="short" placeholder="compare">
										<option value="">=</option>
										<option value="">&gt;</option>
										<option value="">&lt;</option>
									</select>
									<input type="text" />
									<a class="close round"></a>
								</li>
							</ul>
							<select class="split-button" placeholder="Add new rule">
								<option value=".and-condition">And</option>
								<option value=".or-condition">Or</option>
							</select>
						</div>
					</div>
					<div class="field">
						<label></label>
						<div class="redirect">				
							<h3>Then redirect to</h3>
							<ul>
								<li class="def rule-redirect-url sub-item gray closable">
									<label>URL</label>
									<select placeholder="select a group">
										<option>Group1</option>
									</select>
									<span>share</span>
									<input type="text" class="short" />
									<span>%</span>
									<a class="close round"></a>
								</li>
							</ul>
							<button type="button" class="form-button">Add New URL</button>
						</div>
					</div>
				</form>
				<hr>
				<h3>Alert setting</h3>
				<form class="alert-settings">
					<div class="field">
						<label for=""></label>
						<input type="checkbox" class="switch" checked />
						<span>当天click点击比前一天高出</span>
						<input type="text" class="short" />
						<span>个</span>
					</div>
					<div class="field">
						<label for=""></label>
						<input type="checkbox" class="switch" />
						<span>当天click点击比前一天高出</span>
						<input type="text" class="short" />
						<span>个</span>
					</div>
					<div class="field">
						<label for=""></label>
						<input type="checkbox" class="switch" checked />
						<span>当天click点击比前一天高出</span>
						<input type="text" class="short" />
						<span>个</span>
					</div>
					<div class="field">
						<label for=""></label>
						<input type="checkbox" class="switch" />
						<span>当天click点击比前一天高出</span>
						<input type="text" class="short">
						<span>个</span>
					</div>
					<div class="field">
						<label for=""></label>
						<input type="checkbox" class="switch" />
						<span>当天click点击比前一天高出</span>
						<input type="text" class="short" />
						<span>个</span>
					</div>
					<div class="field">
						<label for=""></label>
						<input type="checkbox" class="switch" checked />
						<span>当天click点击比前一天高出</span>
						<input type="text" class="short" />
						<span>个</span>
					</div>
					<div class="field">
						<label for=""></label>
						<input type="checkbox" class="switch" />
						<span>当天click点击比前一天高出</span>
						<input type="text" class="short" />
						<span>个</span>
					</div>
					<div class="field">
						<label for=""></label>
						<input type="checkbox" class="switch" />
						<span>当天click点击比前一天高出</span>
						<input type="text" class="short" />
						<span>个</span>
					</div>
				</form>
			</div>
		</div>		
		<div class="submit">
			<button class="submit large">Save Campaign</button>
		</div>
		<div class="panel improvely-code">
			<div class="panel-header">
				<h2>Improvely Code</h2>
			</div>
			<div class="panel-content">
				<h3>Landing Page: cn.affoffice.com-> Option: buybutton-top</h3>
				<p>this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.</p>
				<div class="copy-url">
					<input id="copy-target-1" type="text" class="copy-url" disabled="disabled" value="http://chtrack.com/roidogforuidesign/bell/ad.php?tl=37&amp;creative={creative}&amp;adtype=adtype&amp;bannernum=1" />
					<button class="normal-btn copy-button" data-clipboard-target="copy-target-1">Copy Url</button>
				</div>
				<h3>Landing Page: cn.affoffice.com-> Option: buybutton-top</h3>
				<p>this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.this is tips.</p>
				<div class="copy-url">
					<input id="copy-target-2" type="text" class="copy-url" disabled="disabled" value="http://chtrack.com/roidogforuidesign/bell/ad.php?tl=37&amp;creative={creative}&amp;adtype=adtype&amp;bannernum=1" />
					<button class="normal-btn copy-button" data-clipboard-target="copy-target-1">Copy Url</button>
				</div>
			</div>
		</div>
	</div>

	<?php include 'content_end.php' ?>

</body>
</html>