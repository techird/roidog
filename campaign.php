<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>Campaigns - Roidog</title>
    <link rel="stylesheet" href="css/campaign.css">
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/campaign.js"></script>
</head>
<body>	

    <div id="campaing-url-dialog" class="dialog-widget active">
        <div class="dialog-title"><h2>Campaign URL</h2><a class="close round close-dialog"></a></div>
        <div class="dialog-content">
            <h3>Landing Page 1</h3>
            <p>Lorem ipsum doior sit amet,maiores ornare ac fermentum,imperdiet ut vivamus a,nam lectus at nunc,Quam ruismod sem,semper ut poten Lorem ipsum doior sit amet,maiores ornare ac fermentum</p>
            <textarea disabled>http://chtrack.com/roidogforuidesign/bell/ad.php?a=12</textarea>
            <button class="form-button" type="button">Copy</button>
            <hr>
            <h3>Landing Page 2</h3>
            <p>Lorem ipsum doior sit amet,maiores ornare ac fermentum,imperdiet ut vivamus a,nam lectus at nunc,Quam ruismod sem,semper ut poten Lorem ipsum doior sit amet,maiores ornare ac fermentum</p>
            <textarea disabled>http://chtrack.com/roidogforuidesign/bell/ad.php?a=12</textarea>
            <button class="form-button" type="button">Copy</button>
        </div>
    </div>
	<?php include 'content_start.php' ?>
    <div class="content-header campaign-filter">
        <h1>Campaign</h1>
        <hr>
        <span>Filter:</span>
        <label>Type</label>
        <select>
            <option value="mobile" selected>Mobile</option>
            <option value="pc">PC</option>
        </select>
        <label>Group</label>
        <select>
            <option value="womaijiu" selected>Womaijiu</option>
            <option value="any">Any Group</option>
        </select>
        <label>Status</label>
        <select>
            <option value="active" selected>Active</option>
            <option value="paused">Paused</option>
        </select>
        <button type="button" class="submit small">Apply</button>
    </div>
    <table class="data-table stand-alone" id="campaign-list">
        <tr>
            <th>Type</th>
            <th>Campaign Name</th>
            <th>Group</th>
            <th>Status</th>
            <th>Last Click</th>
            <th>Click</th>
            <th>Conversions</th>
            <th>CR</th>
            <th>Cost</th>
            <th>Income</th>
            <th>Net</th>
            <th>EPC</th>
            <th>ROI</th>
            <th>CPA</th>
            <th>Action</th>
        </tr>
        <tr>
            <td><span class="type-mobile"></span></td>
            <td><a>demoForLpsplit Clore 13776651527</a></td>
            <td>Item</td>
            <td><span class="status-running"></span></td>
            <td>*15: 05</td>
            <td>0</td>
            <td>0</td>
            <td>0.000%</td>
            <td>$ 135.5</td>
            <td>$ 0.00</td>
            <td><span class="up-going">$ 0.00</span></td>
            <td>$ 0.00</td>
            <td><span class="down-going">$ 0.000</span></td>
            <td>$1.24</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td><span class="type-pc"></span></td>
            <td><a>demoForLpsplit Clore 13776651527</a></td>
            <td>Click</td>
            <td><span class="status-pause"></span></td>
            <td>*15: 05</td>
            <td>0</td>
            <td>0</td>
            <td>0.000%</td>
            <td>$ 135.5</td>
            <td>$ 0.00</td>
            <td><span class="down-going">$ 0.00</span></td>
            <td>$ 0.00</td>
            <td><span class="up-going">$ 0.000</span></td>
            <td>$1.24</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td><span class="type-mobile"></span></td>
            <td><a>demoForLpsplit Clore 13776651527</a></td>
            <td>Conversion</td>
            <td><span class="status-running"></span></td>
            <td>*15: 05</td>
            <td>0</td>
            <td>0</td>
            <td>0.000%</td>
            <td>$ 135.5</td>
            <td>$ 0.00</td>
            <td><span class="down-going">$ 0.00</span></td>
            <td>$ 0.00</td>
            <td><span class="up-going">$ 0.000</span></td>
            <td>$1.24</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td><span class="type-mobile"></span></td>
            <td><a>demoForLpsplit Clore 13776651527</a></td>
            <td>Conversion</td>
            <td><span class="status-running"></span></td>
            <td>*15: 05</td>
            <td>0</td>
            <td>0</td>
            <td>0.000%</td>
            <td>$ 135.5</td>
            <td>$ 0.00</td>
            <td><span class="up-going">$ 0.00</span></td>
            <td>$ 0.00</td>
            <td><span class="down-going">$ 0.000</span></td>
            <td>$1.24</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td><span class="type-pc"></span></td>
            <td><a>demoForLpsplit Clore 13776651527</a></td>
            <td>CR</td>
            <td><span class="status-pause"></span></td>
            <td>*15: 05</td>
            <td>0</td>
            <td>0</td>
            <td>0.000%</td>
            <td>$ 135.5</td>
            <td>$ 0.00</td>
            <td><span class="down-going">$ 0.00</span></td>
            <td>$ 0.00</td>
            <td><span class="up-going">$ 0.000</span></td>
            <td>$1.24</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td><span class="type-pc"></span></td>
            <td><a>demoForLpsplit Clore 13776651527</a></td>
            <td>Cost</td>
            <td><span class="status-running"></span></td>
            <td>*15: 05</td>
            <td>0</td>
            <td>0</td>
            <td>0.000%</td>
            <td>$ 135.5</td>
            <td>$ 0.00</td>
            <td><span class="down-going">$ 0.00</span></td>
            <td>$ 0.00</td>
            <td><span class="up-going">$ 0.000</span></td>
            <td>$1.24</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td><span class="type-mobile"></span></td>
            <td><a>demoForLpsplit Clore 13776651527</a></td>
            <td>EPC</td>
            <td><span class="status-running"></span></td>
            <td>*15: 05</td>
            <td>0</td>
            <td>0</td>
            <td>0.000%</td>
            <td>$ 135.5</td>
            <td>$ 0.00</td>
            <td><span class="up-going">$ 0.00</span></td>
            <td>$ 0.00</td>
            <td><span class="down-going">$ 0.000</span></td>
            <td>$1.24</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td><span class="type-mobile"></span></td>
            <td><a>demoForLpsplit Clore 13776651527</a></td>
            <td>Net</td>
            <td><span class="status-pause"></span></td>
            <td>*15: 05</td>
            <td>0</td>
            <td>0</td>
            <td>0.000%</td>
            <td>$ 135.5</td>
            <td>$ 0.00</td>
            <td><span class="down-going">$ 0.00</span></td>
            <td>$ 0.00</td>
            <td><span class="up-going">$ 0.000</span></td>
            <td>$1.24</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td><span class="type-mobile"></span></td>
            <td><a>demoForLpsplit Clore 13776651527</a></td>
            <td>Income</td>
            <td><span class="status-running"></span></td>
            <td>*15: 05</td>
            <td>0</td>
            <td>0</td>
            <td>0.000%</td>
            <td>$ 135.5</td>
            <td>$ 0.00</td>
            <td><span class="down-going">$ 0.00</span></td>
            <td>$ 0.00</td>
            <td><span class="up-going">$ 0.000</span></td>
            <td>$1.24</td>
            <td><a class="action"></a></td>
        </tr>
    </table>
    <div class="paging-widget" page-size-option="20 50 100 200" page-size="50" item-count="482" page-index="2"></div>
	<?php include 'content_end.php' ?>

</body>
</html>