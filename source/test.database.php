<?php

include("../config.include.php");

header("Content-type: text/plain");

$GLOBALS['SQLdatabaseFile'] = $ApplicationConfiguration["LiteDatabaseFile"];

class MediaDB extends SQLite3
{
    function __construct()
    {
	$database = $GLOBALS['SQLdatabaseFile'];
        $this->open('../'.$database);
    }
}

echo "Creating a self destructing data entry to test!\n\n";

// Create a connection, from the above class
$db = new MediaDB();

// Execute an example query
$db->exec('INSERT INTO "deposit" ("MediaID","MediaFileTag","MediaTitle","MediaTags","MediaDescription") VALUES (NULL,\'{13921491284-120412931824-124912931824124}\',\'Media Title\',\'Some, Tags, Separated\',\'A big long description\')');

// Get the result of the table (probably not great on a production db)
$result = $db->query('SELECT * FROM deposit');

echo "Executed an insert and query...\n";
// dump le result!
var_dump($result->fetchArray());

// Execute a cleanup
$db->exec('DELETE FROM "deposit" WHERE "MediaTitle" = "Media Title"');

echo "\nExecuted a cleanup...\n";
// dump le result!
var_dump($result->fetchArray());