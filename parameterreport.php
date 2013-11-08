<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>Parameter Report - Roidog</title>
    <script type="text/javascript" src="js/moment.min.js"></script>
    <script type="text/javascript" src="js/daterangepicker.js"></script>
    <script type="text/javascript" src="js/parameterreport.js"></script>
    <link rel="stylesheet" type="text/css" href="css/daterangepicker-bs3.css">
    <link rel="stylesheet" type="text/css" href="css/parameterreport.css">
</head>
<body>	

	<?php include 'content_start.php' ?>
    <div class="content-header">
        <h1>Age report</h1>
        <hr>
        <div class="filter">
            <label for="">Filter:</label>
            <select name="" id="">
                <option value="">campaigns</option>
            </select>
            <select name="" id="">
                <option value="">traffic</option>
            </select>
            <select name="" id="" class="date-range" placeholder="2013-08-31" style="width: 300px;">
            </select>
        </div>
        <div class="filter">
            <label for="">Object:</label>
            <select name="" id="" class="removable">
                <option value="">Keyword</option>
            </select>
            <button class="growth-button">+</button>
        </div>
        <div class="filter">
            <label for="">Mobile Param:</label>
            <select name="" id="">
                <option value="">Brand</option>
            </select>
            <select name="" id="">
                <option value="">Carrie</option>
            </select>
            <select name="" id="">
                <option value="">Model</option>
            </select>
            <select name="" id="">
                <option value="">OS</option>
            </select>
        </div>
    </div>
    <hr> 
    <div class="submit">
        <button class="submit small">Apply</button>
    </div>
    <table class="data-table stand-alone">
        <tr>
            <th>Type</th>
            <th>Keyword</th>
            <th>Parameter1</th>
            <th>Parameter2</th>
            <th>Clicks</th>
            <th>Conversions</th>
            <th>CR</th>
            <th>Income</th>
            <th>Net</th>
            <th>ROI</th>
        </tr>
        <tr>
            <td><span class="type-mobile"></span></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><span class="type-pc"></span></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
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