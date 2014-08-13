<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CW Auth based on the Codeigniter Framework</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CW Auth - Based on the Codeigniter Framework!</h1>

	<div id="body">
		<p>CW Auth is a simple auth app created for you to play around with and modify as needed. It also gives you the perfect starting point for a project.</p>
		
		<h3>Installation</h3>
		<p>To install:
		<ul>
			<li>Upload all the files to your directory</li>
			<li>Create the database and upload the db file</li>
			<li>Configure your secret key in the config file and setup your datatbase</li>
		</ul>
		</p>
		<br/>
		<h3>Removing index.php</h3>
		<p>To remove the index.php from the address bar:</p>
		<code>edit: application/config/config.php</code>
		<p>Change:</p>
		<code> $config['index_page'] = 'index.php'; </code><p>To:</p><code>$config['index_page'] = ''; </code>
		<p>Then rename the:</p>
		<code>htaccess.txt to .htaccess</code>
		<p><small>You may need to edit the htacces file to suit your needs</small></p>
		
		<br/>
		<h3>The admin</h3>
		<p>To login to the admin page please click <a href="<?php echo base_url('index.php/admin');?>">Here</a>.</p>
		<p><strong>Username:</strong> admin@admin.com</p>
		<p><strong>Password:</strong> admin</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>