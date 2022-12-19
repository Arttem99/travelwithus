<?

require 'rb.php';

$db = require "../config/config_db.php";

R::setup($db["dsn"], $db["user"], $db["pass"]);

echo '<pre>' .print_r(R::testConnection(),1). '</pre>';

