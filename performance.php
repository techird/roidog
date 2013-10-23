<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>Performance - Roidog</title>
	<script type="text/javascript" src="js/moment.min.js"></script>
	<script type="text/javascript" src="js/daterangepicker.js"></script>
	<script type="text/javascript" src="js/performance.js"></script>
	<link rel="stylesheet" type="text/css" href="css/daterangepicker-bs3.css">
	<link rel="stylesheet" type="text/css" href="css/performance.css">
</head>
<body>
	<a name="page-top"></a>
	<div class="fast-nav">
		<ul>
			<li class="go-top"><a href="#page-top"></a></li>
			<li><a href="#landing-page">Landing page</a></li>
			<li><a href="#campaign-uri">Compaign URI</a></li>
			<li><a href="#conversion-time">Advanced</a></li>
			<li class="last-link"><a href="#geo">Link</a></li>
			<li><a>Notes</a></li>
		</ul>
	</div>

	<?php include 'content_start.php' ?>

	<div class="performance-container">			
		<div class="filter">
			<select class="filter-left" style="width: 280px;">
				<option value="1" selected="selected">*Performance* of advertcn-promotion</option>
				<option value="2">Option1</option>
				<option value="3">Option2</option>
			</select>
			<select class="filter-right date-range pull-right" style="width: 300px;" placeholder="Pick a date range here...">
			</select>
			<select class="filter-right">					
				<option value="1" selected="selected">Note</option>
				<option value="2">Option1</option>
				<option value="3">Option2</option>
			</select>
			<select class="filter-right">					
				<option value="1" selected="selected">Edit/Alert/Get Url</option>
				<option value="2">Option1</option>
				<option value="3">Option2</option>
			</select>
		</div>
		<div class="clear-fix"></div>
		<div class="panel trend">
			<div class="panel-header"><h2>Trend</h2></div>
			<div class="panel-content">
				<div class="trend-filter">
					<div class="radio-group data-type-select">
						<label class="check-widget first-child"><input type="radio" name="data-choise" />CLK</label>
						<label class="check-widget active"><input type="radio" name="data-choise" checked />Click/Conversion</label>
						<label class="check-widget last-child"><input type="radio" name="data-choise" />CVS</label>
						<label class="check-widget alone"><input type="checkbox" value="ROI" />ROI</label>
						<label class="check-widget alone"><input type="checkbox" value="CR" />CR</label>
					</div>
				</div>
				<div class="trend-chart">
					<img style="position: relative; left: -9px;" src="image/p1.png" />
				</div>
			</div>
		</div>
		<div class="panel overall">
			<div class="panel-header"><h2>Over All</h2></div>
			<div class="panel-content">
				<table>
					<tr>
						<td>Click</td>
						<td>2609</td>
					</tr>
					<tr class="odd">
						<td>Conversion</td>
						<td>3</td>
					</tr>
					<tr>
						<td>CR</td>
						<td>0.115%</td>
					</tr>
					<tr class="odd">
						<td>Cost</td>
						<td>$1.00</td>
					</tr>
					<tr>
						<td>Income</td>
						<td>$3.00</td>
					</tr>
					<tr class="odd">
						<td>Net</td>
						<td>$3.00</td>
					</tr>
					<tr>
						<td>EPC</td>
						<td>0.00</td>
					</tr>
					<tr class="odd">
						<td>ROI</td>
						<td>200%</td>
					</tr>
					<tr>
						<td>Time Zone</td>
						<td>(GMT -8:00)(US & Canada)</td>
					</tr>
					<tr class="odd">
						<td>Create Date</td>
						<td>2013-01-20</td>
					</tr>
					<tr>
						<td>Last Click</td>
						<td>2013-07-22</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="panel landing-page">
			<a name="landing-page"></a>
			<div class="panel-header"><h2>Landing Pages</h2></div>
			<div class="panel-content">
				<table class="data-table">
					<tr>
						<th class="first-child name">Name</th>
						<th>Views</th>
						<th>Click through</th>
						<th>CTR</th>
						<th>Leads</th>
						<th>CR</th>
						<th>EPC</th>
						<th>Cost</th>
						<th>Income</th>
						<th>Net</th>
						<th>CPA</th>
						<th>ROL</th>
						<th class="last-child"></th>
					</tr>
					<tr class="first-child">
						<td class="first-child">cn.affofice.com</td>
						<td>2973</td>
						<td>243</td>
						<td>9.645%</td>
						<td>128</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="last-child fold-action"><a class="fold">fold</a><a class="unfold">unfold</a></td>
					</tr>
					<tr class="landing-page-detail hidden">
						<td class="indent"></td>
						<td class="content" colspan="12">
							<table class="sub-table output-link">
								<tr>
									<th>Output Link Name</th>
									<th>Views</th>
									<th>Click</th>
									<th>CTR</th>
									<th>Lead</th>
									<th>CR</th>
									<th>EPC</th>
								</tr>
								<tr>
									<td>buybutton-top</td>
									<td>1973</td>
									<td>93</td>
									<td>3.707%</td>
									<td>36</td>
									<td>2.3%</td>
									<td>$0.5</td>
								</tr>
								<tr>
									<td>buybutton-bottom</td>
									<td>2971</td>
									<td>149</td>
									<td>5.939%</td>
									<td>24</td>
									<td>1.8%</td>
									<td>$1.2</td>
								</tr>
							</table>
							<table class="sub-table split-element">
								<tr>
									<th>Split Element Name</th>
									<th>Status</th>
									<th>Test Values</th>
									<th>Clicks</th>
									<th>Confidence</th>
									<th>Recommend</th>
									<th>Action</th>
								</tr>
								<tr>
									<td rowspan="2">kkkjj</td>
									<td rowspan="2">Finish</td>
									<td>Image 1 CRT = 0.3%</td>
									<td rowspan="2">200</td>
									<td rowspan="2">100.00%</td>
									<td rowspan="2">Keep testing</td>
									<td rowspan="2"><a>View More</a></td>
								</tr>
								<tr>
									<td>Image 2 CTR = 0.5%</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td class="first-child">cn.affofice.com</td>
						<td>2973</td>
						<td>243</td>
						<td>9.645%</td>
						<td>128</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="last-child fold-action"><a class="fold">fold</a><a class="unfold">unfold</a></td>
					</tr>
					<tr class="landing-page-detail hidden">
						<td class="indent"></td>
						<td class="content" colspan="12">
							<table class="sub-table output-link">
								<tr>
									<th>Output Link Name</th>
									<th>Views</th>
									<th>Click</th>
									<th>CTR</th>
									<th>Lead</th>
									<th>CR</th>
									<th>EPC</th>
								</tr>
								<tr>
									<td>buybutton-top</td>
									<td>1973</td>
									<td>93</td>
									<td>3.707%</td>
									<td>36</td>
									<td>2.3%</td>
									<td>$0.5</td>
								</tr>
								<tr>
									<td>buybutton-bottom</td>
									<td>2971</td>
									<td>149</td>
									<td>5.939%</td>
									<td>24</td>
									<td>1.8%</td>
									<td>$1.2</td>
								</tr>
							</table>
							<table class="sub-table split-element">
								<tr>
									<th>Split Element Name</th>
									<th>Status</th>
									<th>Test Values</th>
									<th>Clicks</th>
									<th>Confidence</th>
									<th>Recommend</th>
									<th>Action</th>
								</tr>
								<tr>
									<td rowspan="2">kkkjj</td>
									<td rowspan="2">Finish</td>
									<td>Image 1 CRT = 0.3%</td>
									<td rowspan="2">200</td>
									<td rowspan="2">100.00%</td>
									<td rowspan="2">Keep testing</td>
									<td rowspan="2"><a>View More</a></td>
								</tr>
								<tr>
									<td>Image 2 CTR = 0.5%</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td class="first-child">cn.affofice.com</td>
						<td>2973</td>
						<td>243</td>
						<td>9.645%</td>
						<td>128</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="last-child fold-action"><a class="fold">fold</a><a class="unfold">unfold</a></td>
					</tr>
					<tr class="landing-page-detail hidden">
						<td class="indent"></td>
						<td class="content" colspan="12">
							<table class="sub-table output-link">
								<tr>
									<th>Output Link Name</th>
									<th>Views</th>
									<th>Click</th>
									<th>CTR</th>
									<th>Lead</th>
									<th>CR</th>
									<th>EPC</th>
								</tr>
								<tr>
									<td>buybutton-top</td>
									<td>1973</td>
									<td>93</td>
									<td>3.707%</td>
									<td>36</td>
									<td>2.3%</td>
									<td>$0.5</td>
								</tr>
								<tr>
									<td>buybutton-bottom</td>
									<td>2971</td>
									<td>149</td>
									<td>5.939%</td>
									<td>24</td>
									<td>1.8%</td>
									<td>$1.2</td>
								</tr>
							</table>
							<table class="sub-table split-element">
								<tr>
									<th>Split Element Name</th>
									<th>Status</th>
									<th>Test Values</th>
									<th>Clicks</th>
									<th>Confidence</th>
									<th>Recommend</th>
									<th>Action</th>
								</tr>
								<tr>
									<td rowspan="2">kkkjj</td>
									<td rowspan="2">Finish</td>
									<td>Image 1 CRT = 0.3%</td>
									<td rowspan="2">200</td>
									<td rowspan="2">100.00%</td>
									<td rowspan="2">Keep testing</td>
									<td rowspan="2"><a>View More</a></td>
								</tr>
								<tr>
									<td>Image 2 CTR = 0.5%</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="panel compaign-url">
			<a name="campaign-uri"></a>
			<div class="panel-header"><h2>Compaign URLs</h2></div>
			<div class="panel-content">
				<table class="data-table">
					<tr class="first-child">
						<th class="first-child">Name</th>
						<th>Click</th>
						<th>Conversation</th>
						<th>CR</th>
						<th>Cost</th>
						<th>Income</th>
						<th>Net</th>
						<th>Epc</th>
						<th>ROL</th>
					</tr>
					<tr>
						<td class="first-child">link1(demoTraffic 1)</td>
						<td>2509</td>
						<td>3</td>
						<td>0.12%</td>
						<td>$0.00</td>
						<td>$3.00</td>
						<td>$3.00</td>
						<td>$0.00</td>
						<td>0%</td>
					</tr>
					<tr>
						<td class="first-child">top link of direct landing page(DemoTraffic 2)</td>
						<td>100</td>
						<td>0</td>
						<td>0%</td>
						<td>$1.00</td>
						<td>$0.00</td>
						<td>$-1.00</td>
						<td>$0.00</td>
						<td>-100%</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="panel conversion-time tab-container">
			<div class="panel-header">
				<a name="conversion-time"></a>
				<h2>Conversion Time</h2>									
				<ul class="tab">
					<li class="active">Days in a week</li>
					<li>Hours in a day</li>
				</ul>
			</div>
			<div class="panel-content tab-body active">
				<div class="chart">
					<h3>
						<div class="radio-group">
							<label class="check-widget first-child"><input type="radio" value="1" />CLK</label>
							<label class="check-widget active"><input type="radio" value="2" checked />Click/Conversion</label>
							<label class="check-widget last-child"><input type="radio" value="3" />CVS</label>
						</div>
					</h3>
					<img src="image/p2.png" />
				</div>
				<div class="chart">
					<h3>CR</h3>
					<img src="image/p3.png" />
				</div>
				<div class="chart">
					<h3>ROI</h3>
					<img src="image/p4.png" />
				</div>
			</div>
			<div class="panel-content tab-body">
				<div class="chart">
					<h3>
						<div class="radio-group">
							<label class="check-widget first-child"><input type="radio" value="1" />CLK</label>
							<label class="check-widget active"><input type="radio" value="2" checked />Click/Conversion</label>
							<label class="check-widget last-child"><input type="radio" value="3" />CVS</label>
						</div>
					</h3>
					<img src="image/p2.png" />
				</div>
				<div class="chart">
					<h3>CR</h3>
					<img src="image/p3.png" />
				</div>
				<div class="chart">
					<h3>ROI</h3>
					<img src="image/p4.png" />
				</div>
			</div>
		</div>
		<div class="panel conversion-time tab-container">
			<a name="geo"></a>
			<div class="panel-header">
				<h2>GEO</h2>									
				<ul class="tab">
					<li>Country</li>
					<li>State</li>
					<li class="active">City</li>
				</ul>
			</div>
			<div class="panel-content tab-body">
				<div class="chart">
					<h3>
						<div class="radio-group">
							<label class="check-widget first-child"><input type="radio" value="1" />CLK</label>
							<label class="check-widget active"><input type="radio" value="2" checked />Click/Conversion</label>
							<label class="check-widget last-child"><input type="radio" value="3" />CVS</label>
						</div>
					</h3>
					<img src="image/p5.png" />
				</div>
				<div class="chart">
					<h3>CR</h3>
					<img src="image/p6.png" />
				</div>
				<div class="chart">
					<h3>ROI</h3>
					<img src="image/p7.png" />
				</div>
			</div>
			<div class="panel-content tab-body">
				<div class="chart">
					<h3>
						<div class="radio-group">
							<label class="check-widget first-child"><input type="radio" value="1" />CLK</label>
							<label class="check-widget active"><input type="radio" value="2" checked />Click/Conversion</label>
							<label class="check-widget last-child"><input type="radio" value="3" />CVS</label>
						</div>
					</h3>
					<img src="image/p5.png" />
				</div>
				<div class="chart">
					<h3>CR</h3>
					<img src="image/p6.png" />
				</div>
				<div class="chart">
					<h3>ROI</h3>
					<img src="image/p7.png" />
				</div>
			</div>
			<div class="panel-content tab-body active">
				<div class="chart">
					<h3>
						<div class="radio-group">
							<label class="check-widget first-child"><input type="radio" value="1" />CLK</label>
							<label class="check-widget active"><input type="radio" value="2" checked />Click/Conversion</label>
							<label class="check-widget last-child"><input type="radio" value="3" />CVS</label>
						</div>
					</h3>
					<img src="image/p5.png" />
				</div>
				<div class="chart">
					<h3>CR</h3>
					<img src="image/p6.png" />
				</div>
				<div class="chart">
					<h3>ROI</h3>
					<img src="image/p7.png" />
				</div>
			</div>
		</div>
	</div>

	<?php include 'content_end.php' ?>
</body>
</html>