<!DOCTYPE html>
<html>
<head>
	<?php include 'common_head.php' ?>
	<title>LP Split Test - Roidog</title>
    <link rel="stylesheet" href="css/lpsplittest.css">
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/lpsplittest.js"></script>
</head>
<body>	
    <div id="new-test-dialog" class="dialog-widget new-test-dialog">
        <div class="dialog-title"><h2>Create Split Test</h2></div>
        <div class="dialog-content">
            <form class="stand-alone">
                <div class="field">
                    <label>Split Test Name</label>
                    <input type="text" class="longer">
                </div>
                <div class="field">
                    <label>Campaign</label>
                    <select name="" id="">
                        <option value="">Campaign1</option>
                    </select>
                </div>
                <div class="field">
                    <label>Landing Page</label>
                    <select name="" id=""> 
                        <option value="">Landing Page 1</option>
                    </select>
                </div>
                <div class="field">
                    <label>Status</label>
                    <select>
                        <option value="1" selected="selected">Running</option>
                        <option value="0">Paused</option>
                    </select>
                </div>
                <div class="field">
                    <label>Basic Traffic</label>
                    <input type="text"> 
                </div>
                <div class="padding-box"></div>
                <div class="field">
                    <label></label>
                    <button id="create-test-btn" class="submit small">Create</button>
                    <a class="close-dialog">Cancel</a>
                </div>
            </form>
            <div class="steps">
                <dl>
                    <dt>Step 1</dt>
                    <dd>Open your fridge</dd>
                    <dt>Step 2</dt>
                    <dd>Put the elephent into it</dd>
                    <dt>Step 3</dt>
                    <dd>Close your fridge</dd>
                </dl>
            </div>
        </div>
    </div>
	<?php include 'content_start.php' ?>
    <div class="content-header">        
        <h1>LP Split Test</h1>
        <hr />
        <button id="create-test-button" class="form-button"><span class="icon icon-add">+</span><span>Create Split Test</span></button>
    </div>
    <table id="split-test-list" class="data-table stand-alone">
        <tr>
            <th>Split Test Name</th>
            <th>Campaign</th>
            <th>LP Name</th>
            <th>Status</th>
            <th>Values Name</th>
            <th>Click</th>
            <th>Confidence</th>
            <th>Recommend</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>kkkjj</td>
            <td>advertcn-promotion</td>
            <td>cn.affoffice.com</td>
            <td></td>
            <td>Image 1 CTR = 0.00%<br>Image 2 CTR = 0.00%</td>
            <td></td>
            <td>100%</td>
            <td>Keep testing</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>kkk</td>
            <td>advertcn-promotion</td>
            <td>cn.affoffice.com</td>
            <td></td>
            <td>No value yet</td>
            <td></td>
            <td></td>
            <td></td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>Element</td>
            <td>advertcn-promotion</td>
            <td>Download Link</td>
            <td></td>
            <td>Image 1 CTR = 0.00%<br>Image 2 CTR = 0.00%<br>Image 3 CTR = 0.00%</td>
            <td></td>
            <td>100%</td>
            <td>Keep testing</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>size</td>
            <td>advertcn-promotion</td>
            <td>demoSplitTestLp1</td>
            <td></td>
            <td>Image 1 CTR = 0.00%<br>Image 2 CTR = 0.00%</td>
            <td></td>
            <td>100%</td>
            <td>Keep testing</td>
            <td><a class="action"></a></td>
        </tr>
        <tr>
            <td>555028img</td>
            <td>advertcn-promotion</td>
            <td>11508-555028</td>
            <td></td>
            <td>Image 1 CTR = 0.00%<br>Image 2 CTR = 0.00%</td>
            <td></td>
            <td>100%</td>
            <td>Keep testing</td>
            <td><a class="action"></a></td>
        </tr>
    </table>
    <div class="paging-widget offer-list-paging" page-size="50" page-size-option="20 50 100 200" item-count="482" page-index="2"></div>
	<?php include 'content_end.php' ?>

</body>
</html>