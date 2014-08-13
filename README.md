<h1>Welcome to CW Auth - Based on the Codeigniter Framework!</h1>
CW Auth is a simple auth app created for you to play around with and modify as needed. It also gives you the perfect starting point for a project.
		
<h3>Installation</h3>
To install:
		<ul>
			<li>Upload all the files to your directory</li>
			<li>Create the database and upload the db file</li>
			<li>Configure your secret key in the config file and setup your datatbase</li>
		</ul>

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