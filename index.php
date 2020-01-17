<?php
$directory = $_SERVER['REQUEST_URI'];
$directories = explode("/", $directory);

// Load initialising the page
require('core/init.php');

// Load page content
if(empty($directories[0])) {
  $page = 'pages/index.php';
}

require($page);
?>