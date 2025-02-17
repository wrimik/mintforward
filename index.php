<?php

// Check if the request is coming to www.mintrx.com
// Get the requested URI and query string
$uri = $_SERVER['REQUEST_URI'];

// Redirect to www2.mintrx.com with the same URI and query string
header("Location: https://www2.mintrx.com" . $uri, true, 301);
exit();


