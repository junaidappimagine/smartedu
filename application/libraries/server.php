<?php



// error reporting (this is a demo, after all!)
ini_set('display_errors',1);error_reporting(E_ALL);

// Autoloading (composer is preferred, but for this example let's just do this)

function loadServer($loadData){
$dsn      = 'mysql:dbname=rubycampus;host=localhost';
$username = 'root';
$password = '';
require_once('oauth2-server-php/src/OAuth2/Autoloader.php');
OAuth2\Autoloader::register();

// $dsn is the Data Source Name for your database, for exmaple "mysql:dbname=my_oauth2_db;host=localhost"
$storage = new OAuth2\Storage\Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password));
$config = array(
    'access_lifetime' => 3600// expiry time
);
// Pass a storage object or array of storage objects to the OAuth2 server class
$server = new OAuth2\Server($storage,$config);



// add the grant type to your OAuth server
$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));


// Add the "Authorization Code" grant type (this is where the oauth magic happens)
$server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));

if($loadData=='getToken'){

	$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();	

}else if($loadData=='getAuthCode'){
	$request = OAuth2\Request::createFromGlobals();
	//$server->handleTokenRequest($request);
	$response = new OAuth2\Response();
	// print_r($response);
	// exit;

	// validate the authorize request
	if (!$server->validateAuthorizeRequest($request, $response)) {
		//echo "send";
	    $response->send();
	    die;
	}
	// display an authorization form
	if (empty($_POST)) {
	  exit('
	<form method="post">
	  <label>Do You Authorize TestClient?</label><br />
	  <input type="submit" name="authorized" value="yes">
	  <input type="submit" name="authorized" value="no">
	</form>');
	}

	// print the authorization code if the user has authorized your client
	$is_authorized = ($_POST['authorized'] === 'yes');
	$server->handleAuthorizeRequest($request, $response, $is_authorized);
	if ($is_authorized) {
	  // this is only here so that you get to see your code in the cURL request. Otherwise, we'd redirect back to the client
	  $code = substr($response->getHttpHeader('Location'), strpos($response->getHttpHeader('Location'), 'code=')+5, 40);
	  exit("SUCCESS! Authorization Code: $code");
	}
	$response->send();
}else if($loadData=='getResource'){
	if (!$server->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
	    $server->getResponse()->send();
	    die;
	}
	//echo json_encode(array('success' => true, 'message' => 'You accessed my APIs!'));

}else if($loadData=='checkClient'){
	// create test clients in memory
	$clients = array('123' => array('client_secret' => '123456'));

	// create a storage object
	$memory = new OAuth2\Storage\Memory(array('client_credentials' => $clients));

	// create the grant type
	$grantType = new OAuth2\GrantType\ClientCredentials($memory);

	// this request will only allow authorization via the Authorize HTTP Header (Http Basic)
	// $grantType = new OAuth2\GrantType\ClientCredentials($storage, array(
	//     'allow_credentials_in_request_body' => false
	// ));

	// add the grant type to your OAuth server
	$server->addGrantType($grantType);

}else if($loadData=='checkUser'){
		// create some users in memory
	$users = array('admin@gmail.com' => array('password' => '123'));

	// create a storage object
	$memory = new OAuth2\Storage\Memory(array('user_credentials' => $users));

	// create the grant type
	$grantType = new OAuth2\GrantType\UserCredentials($memory);

	// add the grant type to your OAuth server
	$server->addGrantType($grantType);

	$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();	

}


}
// print_r($server);
// exit;	