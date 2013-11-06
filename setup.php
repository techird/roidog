<!DOCTYPE html>
<html>
<head>
    <title>Setup - Step1 - Roidog</title>
    <link rel="stylesheet" href="css/roidog.css">
    <link rel="stylesheet" href="css/setup.css">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="js/roidog.js"></script>
</head>
<body>
    <div class="head-line"></div>
    <div class="content">
        <h1>ROIDog Installation</h1>
        <h2>Welcome</h2>
        <p>Welcome to the ROIDog installation process! Just fill in the information below and you'll be on your way to using the most extended and powerful advertising tracking software in the world.</p>
        <h2>System Configration</h2>
        <ul>
            <li>PHP 5.1 or higher version... <span class="ok">OK</span></li>
            <li>MySql 4.3 or higher version... <span class="ok">OK</span></li>
            <li>PDO Extension... <span class="ok">OK</span></li>
            <li>PDO MySql Extendsion... <span class="error">Failed, please check "PDO MySql Extension" on your server.</span></li>
        </ul>
        <h2>Account Information</h2>
        <p>Please provide the following information. Don't worry, you can always change these settings later.</p>
        <form action="setup2.php">
            <div class="field">
                <label>Timezone</label>
                <select name="" id="" placeholder="select a time zone">
                    <option value="">Beijing, China. (GMT+8)</option>
                </select>
            </div>
            <div class="field">
                <label>Email</label>
                <input type="email">
            </div>
            <div class="field">
                <label>Username</label>
                <input type="text">
            </div>
            <div class="field">
                <label>Password</label>
                <input type="password">
            </div>
            <div class="field">
                <label>Verify Pass</label>
                <input type="password">
            </div>
            <div class="padding-box"></div>
            <div class="field">
                <label for=""></label>
                <button class="form-button">Install ROIDog</button>
            </div>
        </form>
    </div>
    <div class="footer">
        Copyright © Mosogic 2011—2013 All Right Reserved
    </div>
</body>
</html>