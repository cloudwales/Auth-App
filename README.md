<h1>Welcome to CW Auth - Based on the Codeigniter Framework!</h1>
CW Auth is a simple auth app created for you to play around with and modify as needed. It also gives you the perfect starting point for a project.
		
<h3>Installation</h3>
To install:
		<ul>
			<li>Upload all the files to your directory</li>
			<li>Create the database and upload the db file</li>
			<li>Configure your secret key in the config file and setup your datatbase</li>
		</ul>


<h3>Removing index.php</h3>
To remove the index.php from the address bar:
<code>edit: application/config/config.php</code>
<br/>Change:
<code> $config['index\_page'] = 'index.php'; </code><p>To:</p><code>$config['index_page'] = ''; </code>
Then rename the:
<code>htaccess.txt to .htaccess</code>
<small>You may need to edit the htacces file to suit your needs</small>

		
<h3>The admin</h3>
To login to the admin page visit http://www.your-domain.com/index.php/admin <br/>
<strong>Username:</strong> admin@admin.com<br/>
<strong>Password:</strong> admin
