<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
    <link rel="stylesheet" href="css/agereport.css">
	<title>Age Report - Roidog</title>
</head>
<body>	

	<?php include 'content_start.php' ?>
    <div class="content-header age-report-filters">
        <h1>Age Report</h1>
        <hr>
        <label class="lead-head">Filters</label>
        <select placeholder="campaigns">
            <option>campaign 1</option>
            <option>campaign 2</option>
        </select>
        <select placeholder="traffic">
            <option>traffic 1</option>
            <option>traffic 2</option>
        </select>
        <select placeholder="2013-08-31">
            <option>Today</option>
            <option>Yesterday</option>
        </select>
        <select placeholder="Age Pattern">
            <option>Pattern1</option>
            <option>Pattern2</option>
        </select>
        <label><input type="checkbox" />Show Conversions Only</label>
        <button type="button" class="submit small">Apply</button>
    </div>
    <div class="graph">
        <div class="radio-group">
            <label class="check-widget"><input type="radio" name="data-choise" />CLK</label>
            <label class="check-widget active"><input type="radio" name="data-choise" checked />Click/Conversion</label>
            <label class="check-widget"><input type="radio" name="data-choise" />CVS</label>
        </div>
        <br>
        <img src="image/age-report.png" />
    </div>
    <table id="age-report" class="data-table stand-alone age-report">
        <tr>
            <th>Age</th>
            <th>Clicks</th>
            <th>Conversion</th>
            <th>CR</th>
            <th>Cost</th>
            <th>Income</th>
            <th>Net</th>
            <th>ROI</th>
            <th>CPA</th>
        </tr>
        <tr>
            <td>25 - 30</td>
            <td>225</td>
            <td>30</td>
            <td>8%</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>31 - 35</td>
            <td>122</td>
            <td>14</td>
            <td>2%</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>36 - 40</td>
            <td>234</td>
            <td>5</td>
            <td>6%</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
    <div class="paging-widget" page-size-option="20 50 100 200" page-size="50" item-count="482" page-index="2"></div>
	<?php include 'content_end.php' ?>

</body>
</html>