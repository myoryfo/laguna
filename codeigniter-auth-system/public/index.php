<?php

// Load the CodeIgniter framework
require '../vendor/autoload.php';

use Config\Services;

// Create a new instance of the application
$app = Services::application();

// Run the application
$app->run();