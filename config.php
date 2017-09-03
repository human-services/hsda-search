<?php
// database settings
$dbhost = "laneworks-cluster-1.cluster-cjgvjastiugl.us-east-1.rds.amazonaws.com";
$dbport = "3306";
$dbname = "open_referral_prototype";
$charset = 'utf8' ;
$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = "laneworks";
$password = "sNdPhoqyHK8EW[E";

// database connection
$conn = new PDO($dsn, $username, $password);

$salt = "op3nR3ferral!234";

$allow_ips = "54.173.109.62";

$openapi_url = 'https://raw.githubusercontent.com/human-services/portal/master/_data/api-commons/openapi-hsda-search.yaml';
$apis_json = 'https://raw.githubusercontent.com/human-services/portal/master/_data/apis.yaml';
?>
