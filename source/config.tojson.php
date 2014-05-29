<?php

include("../config.include.php");

header("Content-Type: text/plain");

echo json_encode($ApplicationConfiguration, JSON_PRETTY_PRINT);
