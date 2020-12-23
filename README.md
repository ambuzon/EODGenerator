How to Set Up this Project, 1st Ed.

Terminology:
Project Folder: This is the folder which has been downloaded from github

1. Highly Recommended Programs and pluigns to Download
 a. XAMPP (Tutorial:https://www.youtube.com/watch?v=6tCWiexc05U)
 b. composer------------|
 c. gitbash-------------|--- (Tutorial: https://www.youtube.com/watch?v=H3uRXvwXz1o)
 d. visual studio code--|
 e. Laravel Blade Snippets -> required plugin for your code editor

2. Setting up 
    Clone the project folder inside of the folder titled "htdocs"
	Note: IF using XAMPP, this can be found in the XAMPP folder

3. Change the necessary files
    File 1: httpd-vhosts-conf (This sets up the virtual hosts)
	1. Proceed to the file titled "httpd-vhosts" found in your apache folder
	Note: If using XAMPP (xampp->apache->conf->extra->httpd-vhost)
	
	2. Add the following lines at the bottom of the file
	<VirtualHost *:80>
    	DocumentRoot {Add the path of the htdocs with quotation marks} -> Example "C:/xampp/htdocs"
    	ServerName localhost
	</VirtualHost>

	<VirtualHost *:80>
    	DocumentRoot {Add the path of the public folder found in the project folder} -> Ex: "C:/xampp/htdocs/lsapp/public"
    	ServerName {Add the servername} -> Ex: lsapp2.me 
	</VirtualHost>

	3. Save changes

    File 2: hosts file
	1. Open notepad with admin mode and set filetype to "All Files"
	2. Open the file titled "hosts" found in the etc folder
	Note: If on windows (Local Disk(C:)->Windows->System32->drivers-> etc) 
	3. At the bottom of the file, add the following
		127.0.0.1 localhost
		127.0.0.1 {servername} -> input what you want to name your server. Ex: lsapp2.me   
	4. Save changes and restart Apache 

    File 3: env (This is for the database credentials)
 	1. Open visual studio code
	2. Rename the file titled ".env.example" found in the project folder to ".env"
	3. In your gitbash terminal, run the command "composer install" 
	4. Afterwards, run the command "php artisan key:generate"
	5. On DB_DATABASE found on line 12, change it to match the name of the database you intend to use
	6. On DB_PASSWORD found on line 14, change it to match the password you have set in your local server
	Note: If you have no password, leave it empty

4. Run the Migrations
    In the terminal, run the command "php artisan migrate"
