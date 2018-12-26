<?php

	
	define('ENVIRONMENT', 'DEV'); // Change this environment for the development and production

	define('SITE_NAME', 'Iris');
	define('GEN_UID', date('mdY').''.time());

	if(ENVIRONMENT == 'DEV') {
		define('PROTOCOL', 'http://');
		define('ASSET_URL', PROTOCOL.''.getenv('HTTP_HOST').'/iris-webmon/assets'); // FOR IMAGES,CSS,JS URL : Change the value to http://localhost/jobstalk/ if you are using a windows xamp
		define('API_URL', PROTOCOL.''.getenv('HTTP_HOST').'/iris-webmon/api/v1'); // FOR API URL AJAX REQUEST :  Change the value to http://localhost/jobstalk/ if you are using a windows xamp
		define('SITE_URL', PROTOCOL.''.getenv('HTTP_HOST').'/iris-webmon');  // FOR REDIRECTION BACK TO HOMEPAGE : Change the value to http://localhost/jobstalk/ if you are using a windows xamp
		define('API_VERSION', '/v1');

		// Database Configurations
		define('SERVERNAME', 'localhost');
		define('USERNAME', 'root');
		define('PASSWORD', 'root');
		define('DATABASE', 'iris_db');

	}
	else if(ENVIRONMENT == 'PROD') {
		define('PROTOCOL', 'https://');
		define('ASSET_URL', PROTOCOL.''.getenv('HTTP_HOST').'/assets'); // FOR IMAGES,CSS,JS URL : Change the value to http://localhost/jobstalk/ if you are using a windows xamp
		define('API_URL', PROTOCOL.''.getenv('HTTP_HOST').'/api/v1'); // FOR API URL AJAX REQUEST :  Change the value to http://localhost/jobstalk/ if you are using a windows xamp
		define('SITE_URL', PROTOCOL.''.getenv('HTTP_HOST'));  // FOR REDIRECTION BACK TO HOMEPAGE : Change the value to http://localhost/jobstalk/ if you are using a windows xamp
		define('API_VERSION', '/v1');

		// Database Configurations
		define('SERVERNAME', '');
		define('USERNAME', '');
		define('PASSWORD', '');
		define('DATABASE', '');
	}

	// Create database connection
	$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
	// Check database connection
	if ($conn->connect_error)
	{
		die("Database Connection failed: "); // Die the whole page when the connection goes failed
	}

?>