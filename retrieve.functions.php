<?php

function setup_sqlite_database ($SQLiteDatabase) {
    // Make the SQLite a global for this script, god knows where we're going to need it.
    $GLOBALS['SQLDatabaseFile'] = $SQLiteDatabase;
    
    class MediaDB extends SQLite3
    {
        function __construct()
        {
            // We know this database is in the SAME directory as this script ./, so we won't do anything absolute.
            $database = $GLOBALS['SQLDatabaseFile'];
            $this->open($database);
        }
    }
    
    $db_socket = new MediaDB();
    // Now $db_socket->exec, ->query, etc are usable.
    // Further $result = $db_socket->query() is able to $result->fetchArray()
    
    return $db_socket;
}

// Error handler that has a nicer gui.
function problem_happened ( $error_message ) {
    include("./header.php");
    echo "<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\"><center><br /><p class=\"lead bg-danger\" style=\"max-width:400px; text-align:center;\">$error_message<p> <a href=\"./deposit.php\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Back</a></center>";  
    die();
}

?>