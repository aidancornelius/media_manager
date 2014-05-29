<?php

// Deposit functions, this is the code that captures the post, uploads, and all that jazz and inserts it into the sqlite.

include("./config.include.php");

function setup_sqlite_database ($ApplicationConfiguration) {
    // Make the SQLite a global for this script, god knows where we're going to need it.
    $GLOBALS['SQLiteDatabaseFile'] = $DatabaseFile = $ApplicationConfiguration["LiteDatabaseFile"];
    
    class MediaDB extends SQLite3
    {
        function __construct()
        {
            // We know this database is in the SAME directory as this script ./, so we won't do anything absolute.
            $database = $GLOBALS['SQLiteDatabaseFile'];
            $this->open($database);
        }
    }
    
    $db_socket = new MediaDB();
    // Now $db_socket->exec, ->query, etc are usable.
    // Further $result = $db_socket->query() is able to $result->fetchArray()
}
function problem_happened ( $error_message ) {
    include("./header.php");
    echo "<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\"><center><br /><p class=\"lead bg-danger\" style=\"max-width:400px; text-align:center;\">$error_message<p> <a href=\"./deposit.php\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Back</a></center>";  
    die();
}

// This page has only THIS feature set, there isn't an actual "page" here.
$recieved_post = $_POST;

if (!empty($recieved_post)) { 
    include("./header.php");
    // Upload them to the temporary directory, add the meta to the database, and twiddle your thumbs!
    echo "<div class=\"bg-info\" style=\"max-width: 570px; padding-left:5px; padding-right:5px; padding-bottom:2px;margin-left: auto; margin-right: auto; border-radius:3px;\"><h1><span class=\"glyphicon glyphicon-import\"></span> Processing media</h1>";
    echo "<p>Media_file: " . $_POST["media_file"] . "</p>";
    echo "<p>Media_name: " . $_POST["media_name"] . "</p>";
    echo "<p>Media_tags: " . $_POST["media_tags"] . "</p>";
    echo "<p>Media_description: " .$_POST["media_description"] . "</p></div>";
    
    echo "<h3>Processing...</h3><p>This may take some time, please don't turn off the server for several hours.</p> <p>You can now safely close this page, the media will process in background!</p> <a href=\"./deposit.php\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\"></span> Add more media</a> <a href=\"./retrieve.php\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-th-list\"></span> Media list</a>";
    
} else {
    problem_happened("500: Something went wrong. Please check you typed into all of the fields.");
}