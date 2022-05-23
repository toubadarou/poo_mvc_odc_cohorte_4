<?php
session_start();

ini_set('display_errors',1);
ini_set('display_start_errors',1);
error_reporting(E_ALL);

use App\Models\RP;
require("../vendor/autoload.php");
require_once('../core/functions.php');
require_once('../routes/route.web.php');
// dd($_SERVER['REQUEST_URI']);